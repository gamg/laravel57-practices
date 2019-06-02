$(document).ready(function(){
    function loadCareer() {
        var faculty_id = $('#faculty').val();
        if ($.trim(faculty_id) != '') {
            $.get('careers', {faculty_id: faculty_id}, function (careers) {

                var old = $('#career').data('old') != '' ? $('#career').data('old') : '';

                $('#career').empty();
                $('#career').append("<option value=''>Selecciona una carrera</option>");

                $.each(careers, function (index, value) {
                    $('#career').append("<option value='" + index + "'" + (old == index ? 'selected' : '') + ">" + value +"</option>");
                })
            });
        }
    }
    loadCareer();
    $('#faculty').on('change', loadCareer);
});