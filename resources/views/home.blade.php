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

                            <button type="button" class="btn btn-success btn-circle btn-sm">Green</button>
                            <button type="button" class="btn btn-danger btn-circle btn-sm">Red</button>
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


            .btn-circle.btn-sm {
                width: 30px;
                height: 30px;
                padding: 6px 0px;
                border-radius: 15px;
                font-size: 8px;
                text-align: center;
            }
            .btn-circle.btn-md {
                width: 50px;
                height: 50px;
                padding: 7px 10px;
                border-radius: 25px;
                font-size: 10px;
                text-align: center;
            }
            .btn-circle.btn-xl {
                width: 70px;
                height: 70px;
                padding: 10px 16px;
                border-radius: 35px;
                font-size: 12px;
                text-align: center;
            }

        </style>
@endsection
