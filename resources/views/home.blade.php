@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @php
                    $idsesion = 1;
                    @endphp

                        <div class="card-body">
                            <form method="Post" action="/eliminar-usuario">
                                @csrf
                                @method('delete')
                                        <button id="eliminar" type="submit" class="btn btn-primary" >
                                            {{ __('Eliminar Cuenta') }}
                                        </button>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
