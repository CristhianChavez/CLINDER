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
                            @foreach($resultadosa as $imag)
                            @endforeach
                                <img src="{{\Illuminate\Support\Facades\Storage::url($imag->fotos)}}"  id="stores">

                    </div>
                </div>
            </div>
        </div>

        <style>
            #stores{
                border-width: thin;
                border-style: solid;
                border-color: black;
                height: 420px;
                width: 450px;
            }
        </style>
@endsection
