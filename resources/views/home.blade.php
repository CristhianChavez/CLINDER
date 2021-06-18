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

                        @foreach($resultados as $fotoss)
                        @endforeach
                            <img height="80" width="80" src="data:image/png;base64,'.base64_encode({{$fotoss['fotos']}}).'">
                            <img src="data:image/jpg; base64,{{base64_encode($fotoss['fotos'])}}">


                    </div>
                </div>
            </div>
        </div>

        <style>
            img {
                border: 4px solid #ccc;
                border-radius: 4px;
                display: block;
                height: 100px;
                margin: 25px auto;
                width: 100px;
            }
        </style>
@endsection
