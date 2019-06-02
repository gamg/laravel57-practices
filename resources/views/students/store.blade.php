@extends('layouts.app')

@section('content')
    @inject('faculties', 'App\Services\Faculties')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Agregar Estudiante</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('students.store') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="last_name" class="col-md-4 col-form-label text-md-right">Apellido</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" required autofocus>

                                    @if ($errors->has('last_name'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="faculty" class="col-md-4 col-form-label text-md-right">Facultad</label>

                                <div class="col-md-6">
                                    <select id="faculty" name="faculty_id" class="form-control{{ $errors->has('faculty_id') ? ' is-invalid' : '' }}">
                                        @foreach($faculties->get() as $index => $faculty)
                                            <option value="{{ $index }}" {{ old('faculty_id') == $index ? 'selected' : '' }}>
                                                {{ $faculty }}
                                            </option>
                                        @endforeach
                                    </select>

                                    @if ($errors->has('faculty_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('faculty_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="career" class="col-md-4 col-form-label text-md-right">Carrera</label>

                                <div class="col-md-6">
                                    <select id="career" data-old="{{ old('career_id') }}" name="career_id" class="form-control{{ $errors->has('career_id') ? ' is-invalid' : '' }}"></select>

                                    @if ($errors->has('career_id'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('career_id') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
