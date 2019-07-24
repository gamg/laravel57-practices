const app = new Vue({
    el: '#app',
    data: {
        selected_faculty: '',
        selected_career: '',
        careers: [],
    },
    mounted() {
        document.getElementById("career").disabled=true;

        this.selected_faculty = this.getOldData('faculty');
        if (this.selected_faculty != '') {
            this.loadCareers();
        }

        this.selected_career = this.getOldData('career');
    },
    methods: {
        loadCareers() {
            this.selected_career = '';
            document.getElementById("career").disabled=true;

            if (this.selected_faculty != '') {
                axios.get('careers', {params: {faculty_id: this.selected_faculty} }).then((response) => {
                    this.careers = response.data;
                    document.getElementById("career").disabled=false;
                });
            }
        },
        getOldData(type) {
            return document.getElementById(type).getAttribute('data-old');
        }
    }
});