@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Subir Foto') }}</div>

                    <form id="form1" method="POST" action="/subir-foto">
                        @csrf
                    <div class="card-body">
                        @foreach($data as $pelfil)
                        @endforeach
                        @if($pelfil["generoo"] != 'Mujer' && $pelfil["generoo"] != 'Hombre')
                        <img src="https://i.ibb.co/S7w86d5/defaultotro.jpg"  alt="defaultotro" id="blah" border="0">
                        @endif
                        @if($pelfil["generoo"] == 'Hombre')
                        <img src="https://i.ibb.co/0G5LYCh/defaulthombre.png" alt="defaulthombre" id="blah" border="0">
                        @endif
                        @if($pelfil["generoo"] == 'Mujer')
                        <img src="https://i.ibb.co/FzXZDpB/defaultfmujer.jpg" alt="defaultfmujer" id="blah" border="0">
                        @endif

                        <input type='file' id="imgInp" id="fotos" name="fotos"/>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="register-button" type="submit" class="btn btn-primary">
                                    {{ __('Subir Foto') }}
                                </button>
                            </div>
                        </div>

                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('vue')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
            $("#imgInp").change(function () {
            // Código a ejecutar cuando se detecta un cambio de archivo
        });
    </script>
    <script>
        function readImage (input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function () {
            readImage(this);
        });
    </script>
@endsection


