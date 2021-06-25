@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">{{ __('Subir Foto') }}</div>
                    <form id="form1" method="POST" action="{{ route('subirfoto') }}" enctype="multipart/form-data">
                        @csrf
                            <div class="card-body">

                                <div class="col-md-1 offset-md-1">
                                    <img src="{{$data}}" id="blah" >
                                </div>
                                <br>
                                    <div class="col-md-1 offset-md-1">
                                        <input type='file' id="imgInp"  name="imgInp" />
                                    </div>
                                <br>

                                <div class="form-group row mb-">
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
    <style>
        body {
            background: #cccc;
        }
    </style>
@endsection


