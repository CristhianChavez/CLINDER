@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <div class="flexbox-container">
                            <div>
                            @if($nose === null)
                            <h1>No hay mas personas</h1>
                            @endif
                            @if($nose != null)
                            <form method="POST" action="{{ route('home') }}">
                                @csrf

                                    <img src="{{\Illuminate\Support\Facades\Storage::url($nose->fotos)}}" id="stores" class="stores">
                                <br>
                                <br>
                                <button type="submit" class="btn btn-circle btn-sm linea offset-md-3 afir" id="respuesta" name="respuesta" value="1"></button>
                                <button type="submit" class="btn btn-circle btn-sm linea offset-md-3 neg" id="respuesta" name="respuesta" value="0"></button>
                                <input type="hidden" value=" {{$nose['idunico']}}" id="elid" name="elid">
                            </form>
                            </div>
                    <div>


                        <div class="form-group row">
                            <label for="generoo"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Nombre: ') }}</label>
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    {{$nose['nombre']}}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="generoo"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Apellido: ') }}</label>
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    {{$nose['apellido']}}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="generoo"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Edad: ') }}</label>
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    {{$nose['edad']}}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="generoo"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Pais: ') }}</label>
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    {{$nose['ciudad']}}
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="generoo"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Descripcion: ') }}</label>
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    {{$nose['descripcion']}}
                                </div>
                            </div>
                        </div>


                            </div>

                        @endif
                            </div>
                    </div>
            </div>
        </div>
    </div>
</div>

    <style>
        body {
            background: #ccc;
        }

        .flexbox-container {
            display: -ms-flex;
            display: -webkit-flex;
            display: flex;
        }

        .flexbox-container > div {
            width: 50%;
            padding: 10px;
            background: #fff;
        }

        .flexbox-container > div:first-child {
            margin-right: 10px;
        }

    </style>
@endsection
