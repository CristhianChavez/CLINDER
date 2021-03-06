@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Modificar tu Perfil') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/modificar-perfil">
                            @csrf

                            <div class="form-group row">
                                <label for="generoo"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="generoo" name="generoo" >
                                        <option value="{{$resultado["generoo"]}}">{{$resultado["generoo"]}}</option>
                                        <option value="Hombre">Hombre</option>
                                        <option value="Mujer">Mujer</option>
                                        <option value="Prefiero no Decirlo">Prefiero no Decirlo</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="orientacion"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Orientacion sexual') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="orientacion" name="orientacion" >
                                        <option value="{{$resultado["orientacion"]}}">{{$resultado["orientacion"]}}</option>
                                        <option value="Heterosexual">Heterosexual</option>
                                        <option value="Gay">Gay</option>
                                        <option value="Lesbiana">Lesbiana</option>
                                        <option value="Bisexual">Bisexual</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="relationship"
                                       class="col-md-4 col-form-label text-md-right">{{ __('??Cu??l es su estado civil?') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="relationship" name="relationship" >
                                        <option value="{{$resultado["relationship"]}}">{{$resultado["relationship"]}}</option>
                                        <option value="Soltero">Soltero</option>
                                        <option value="Comprometido">Comprometido</option>
                                        <option value="Casado">Casado</option>
                                        <option value="Es Complicado">Es Complicado</option>
                                        <option value="Relacion Abierta">Relacion Abierta</option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="ciudad"
                                       class="col-md-4 col-form-label text-md-right">{{ __('??De que pais eres?') }}</label>

                                <div class="col-md-6">
                                    <select class="form-control" id="ciudad" name="ciudad" >

                                        <option value="{{$resultado["ciudad"]}}">{{$resultado["ciudad"]}}</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Chile">Chile</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Espa??a">Espa??a</option>
                                        <option value="Venezuela">Venezuela</option>

                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="educacion" class="col-md-4 col-form-label text-md-right">{{ __('Grado de educacion') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" value="{{$resultado["educacion"]}}"
                                           class="form-control @error('educacion') is-invalid @enderror" name="educacion"
                                           value="{{ old('educacion') }}" required autocomplete="educacion" autofocus>

                                    @error('educacion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telefono"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="text" value="{{$resultado["telefono"]}}"
                                           class="form-control @error('telefono') is-invalid @enderror" name="telefono"
                                           value="{{ old('telefono') }}" required autocomplete="telefono">

                                    @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="descripcion"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Cu??ntanos acerca de t??:') }}</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"
                                              style="resize:none;" required
                                              autocomplete="descripcion">{{$resultado["descripcion"]}}</textarea>
                                </div>

                                @error('descripcion')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button id="modificar-button" type="submit" class="btn btn-primary">
                                        {{ __('Modificar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        body {
            background: #cccc;
        }
    </style>
@endsection

