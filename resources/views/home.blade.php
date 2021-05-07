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

                        <div class="card-body">
                            <form method="POST" action="/eliminar-usuario">
                                @csrf
                                    <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button id="eliminar" type="submit" class="btn btn-primary" >
                                            {{ __('Eliminar Cuenta') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
