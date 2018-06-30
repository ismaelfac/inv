<form class="form-horizontal" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }} 
    <div class="login-account p-30 box-shadow">
        <div class="row">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Nombres Completos" required autofocus>
            <input id="email" type="email" placeholder="Ingresa tu email" class="form-control" name="email" value="{{ old('email') }}" required>
            <input id="password" type="password" placeholder="Digita tu clave debe tener minimo 6 digitos" class="form-control" name="password" required>
            <input id="password-confirm" type="password" placeholder="repite tu clave" class="form-control" name="password_confirmation" required>
            <div class="checkbox">
                <label class="mr-10"> 
                    <small>
                        <input type="checkbox" name="signup">Suscríbete a nuestro boletín!
                    </small>
                </label>
                <label> 
                    <small>
                        <input type="checkbox" name="signup">Recibe ofertas especiales de nuestros socios!
                    </small>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <button class="submit-btn-1 mt-20" type="submit" value="register">Registrarme</button>
            </div>
            <div class="col-sm-6 col-xs-12">
                <button class="submit-btn-1 mt-20 f-right" type="reset">Limpiar</button>
            </div>
        </div>
    </div>
</form>