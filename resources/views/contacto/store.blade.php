@extends('layouts.app') <!-- Si tienes una plantilla base, asegúrate de extenderla -->

@section('content')
    <div class="container">
        <div class="alert alert-success">
            <h4>Mensaje enviado correctamente</h4>
        </div>
        <a href="{{ route('index') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection@
