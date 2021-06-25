@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @foreach($resultado as $user)
                <div class="row">
                    <div class="col-md-6">
                        <div class="card-1">
                            <div class="user" style="background-image: url('{{\Illuminate\Support\Facades\Storage::url($user->fotos)}}')">

                            </div>
                            <div class="info">
                                <div class="name">
                                    {{$user["nombre"]}}
                                    {{$user["amigo_id"]}}
                                </div>
                                <div class="cargo">
                                    {{$user["apellido"]}}
                                </div>
                                <div class="numero">
                                    {{$user["edad"]}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
<style>
    @media (min-width: 501px) {
        .card-1 .info>.name{
            font-size: 35px;
        }
    }
    @media (max-width: 500px) {
        .card-1 .info>.name{
            font-size: 25px;
        }
    }

    .card-1{
        border: solid black 1px;
        height: 125px;
        position: relative;
        margin-bottom: 15px;
    }
    .card-1 .user{
        position: absolute;
        left: 0;
        top: 0;
        background-color: #147896;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        width: 25%;
        height: 100%;
    }
    .card-1 img{
        height: 146px;
        width: 146px;
    }

    .card-1 .info{
        position: absolute;
        right: 0;
        top: 0;
        width: 75%;
        height: 100%;
        padding: 10px
    }

    .card-1 .info>.name{
        margin-bottom: 2px;
        color: #333333;
        font-family: 'OpenSans-Bold';
    }
</style>
@endsection
