@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Mi Perfil') }}</div>


                    <div class="form-group row">
                        <label for="generoo"
                               class="col-md-4 col-form-label text-md-right">{{ __('Genero') }}</label>

                        <div class="col-md-6">
                            <div class="col-md-6">
                               {{auth()->user()->id}}
                            </div>
                        </div>
                    </div>



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
