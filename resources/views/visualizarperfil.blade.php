@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Mi Perfil') }}</div>

                            @csrf


                            <div class="form-group row">
                                <label for="generoo"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                                <div class="col-md-6">
                                    <div class="col-md-6">
                                        @foreach($resultado as $pelfil)
                                            {{$pelfil["generoo"]}}
                                        @endforeach
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="orientacion"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Orientacion sexual') }}</label>

                                <div class="col-md-6">
                                    @foreach($resultado as $pelfil)
                                        {{$pelfil["orientacion"]}}
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="ciudad"
                                       class="col-md-4 col-form-label text-md-right">{{ __('¿De que pais eres?') }}</label>

                                <div class="col-md-6">
                                    @foreach($resultado as $pelfil)
                                        {{$pelfil["ciudad"]}}
                                    @endforeach
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="educacion" class="col-md-4 col-form-label text-md-right">{{ __('Grado de educacion') }}</label>

                                <div class="col-md-6">
                                    @foreach($resultado as $pelfil)
                                        {{$pelfil["educacion"]}}
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefono"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                                <div class="col-md-6">
                                    @foreach($resultado as $pelfil)
                                        {{$pelfil["telefono"]}}
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="descripcion"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Cuéntanos acerca de tí:') }}</label>

                                <div class="col-md-6">
                                    @foreach($resultado as $pelfil)
                                        {{$pelfil["descripcion"]}}
                                    @endforeach
                                </div>
                            </div>

                                <div class="form-group row">
                                    <label for="fotos"
                                           class="col-md-4 col-form-label text-md-right">{{ __('Foto de Perfil') }}</label>

                                    <div class="col-md-6">
                                        @foreach($resultado as $pelfil)
                                            <img src="{{\Illuminate\Support\Facades\Storage::url($pelfil->fotos)}}"  id="blah">
                                        @endforeach

                                    </div>
                                </div>


                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <a class="enlace" href="{{ route('modificarperfil') }}">
                                                <button id="register-button" type="enlace" class="btn btn-primary" >
                                                    {{ __('Editar') }}
                                                </button></a>
                                        </div>
                                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
