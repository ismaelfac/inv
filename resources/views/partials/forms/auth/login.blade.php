<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="login-account p-30 box-shadow">
        <p>Si tiene una cuenta con nosotros, por favor inicie sesión.</p>
        <input id="email" type="email" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        <input id="password" type="password" placeholder="Digita tu clave" class="form-control" name="password" required>
         @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
        <p><small><a class="btn btn-link" href="{{ url('/password/reset') }}">Olvidaste tu contraseña?</a></small></p>
        <button class="submit-btn-1" type="submit">login</button>
        <button class="submit-btn-1" href="{{ route('password.request') }}">No recuerdo mi Password?</button>
    </div>
</form>