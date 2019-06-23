@extends('layout')

@section('content')
<div class="forms">
    <div class="form login">
        <h2>Iniciar Sesión</h2>
        <form method="POST" action="{{ route('login') }}">
            <label for="email">Correo</label>
            <input type="email" name="email" placeholder="example@mail.com">
            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="password">
            <input type="submit" value="Aceptar">
        </form>
    </div>
    <div class="form register">
        <h2>Registrarse</h2>
        <form>
            <label for="email">Correo</label>
            <input type="email" name="email" placeholder="example@mail.com">
            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="password">
            <label for="password_confirmation">Repita Contraseña</label>
            <input type="password" name="password_confirmation" placeholder="password">
            <input type="submit" value="Aceptar">
        </form>
    </div>
</div>
@endsection