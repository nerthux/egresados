<div class="users view large-9 medium-8 columns content">

    <?php if (!empty($user)): ?>

    <div class="middle-box text-center animated fadeInDown">
        <h1>:D</h1>
        <h3 class="font-bold">Tu cuenta ha sido activada exitosamente</h3>

        <div class="error-desc">
            Ahora puedes ingresar a tu cuenta con el usuario y contraseña que elegiste durant el registro. <br/>
            <a href="/users/login" class="btn btn-primary m-t">Iniciar Sesión</a>
        </div>
    </div>

    <?php else: ?>

    <div class="middle-box text-center animated fadeInDown">
        <h1>Oops</h1>
        <h3 class="font-bold">No deberias estar aqui.</h3>

        <div class="error-desc">
            Seguramente llegaste aqui por error, aqui no hay nada que ver.<br/>
            Si eres usuario de la comunidad puedes ingresar en: <br/><a href="/users/login" class="btn btn-primary m-t">Iniciar Sesión</a>
        </div>
    </div>


    <?php endif; ?>

</div>
