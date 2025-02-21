<header class="header">
    <div class="header__contenedor">
        <nav class="header__navegacion">

        <?php if (is_auth()) {?>
 
            <a href="<?php echo is_admin() ? '/admin/dashboard' : '/finalizar-registro' ?>" class="header__enlace">Administrar</a>
            <form method="POST" action="/logout" class="header__form">
                <input type="submit" value="Cerrar Sesion" class="header__submit">
            </form>


            <?php } else { ?>
            <a href="/registro" class="header__enlace">Registro</a>
            <a href="/login" class="header__enlace">Inicia Sesion</a>
            <?php } ?>
        </nav>

        <div class="header__contenido">
            <a href="/">
                <h1 class="header__logo">
                    &#60;DevWebCamp />
                </h1>
            </a>

            <p class="header__texto">Noviembre 13-14  -  2024</p>
            <p class="header__texto header__texto--modalidad">En Linea - Presencial</p>

            <a href="/registro" class="header__boton">Compar Pase</a>
        </div>
    </div>
</header>
<div class="barra">
    <div class="barra__contenido">
        <a class="barra__logo" href="/">
            <h1 class="barra__logo">
            &#60;DevWebCamp/>
            </h1>
          
        </a>
        <div class="navegacion">
            <a href="/devwebcamp" class="navegacion__enlace <?php echo pagina_actual('/devwebcamp') ? 'navegacion__enlace--actual' : ''; ?>">Evento</a>
            <a href="/paquetes" class="navegacion__enlace <?php echo pagina_actual('/paquetes') ? 'navegacion__enlace--actual' : ''; ?>">Paquetes</a>
            <a href="/workshops-conferencias" class="navegacion__enlace <?php echo pagina_actual('/workshops-conferencias') ? 'navegacion__enlace--actual' : ''; ?>">Workshops / Conferencias</a>
            <a href="/registro" class="navegacion__enlace <?php echo pagina_actual('/registro') ? 'navegacion__enlace--actual' : ''; ?>">Comprar Pase</a>
        </div>
    </div>
</div>