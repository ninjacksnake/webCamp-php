<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la conferencias mas importante de latinoamerica</p>
    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg" alt="Imagen DevWebCamp">
            </picture>
        </div>

        <div <?php aos_animacion(); ?> class="devwebcamp__contenido">
            <p class="devwebcamp__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam expedita accusamus beatae atque porro in impedit sapiente debitis! Dignissimos, sapiente minima! Corporis illo laudantium tempora, esse reprehenderit culpa omnis quaerat necessitatibus atque ipsa commodi!
            </p>
            <p class="devwebcamp__texto">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit aliquam expedita accusamus beatae atque porro in impedit sapiente debitis! Dignissimos, sapiente minima! Corporis illo laudantium tempora, esse reprehenderit culpa omnis quaerat necessitatibus atque ipsa commodi!
            </p>
        </div>
    </div>
</main>