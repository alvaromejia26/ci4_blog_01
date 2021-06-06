<section class="hero is-info">
    <div class="hero-body">
        <div class="container">
            <p class="title">
            Bienvenidos a mi Blog
            </p>
            <p class="subtitle">
            Lista de entradas
            </p>
        </div>
    </div>
    <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
        <ul>
          <li class="<?=service("request")->uri->getPath() == '/' ? 'is-active' : '';?>">
            <a href="<?=base_url(route_to('home'))?>">Inicio</a>
          </li>
          <li class="<?=service("request")->uri->getPath() == 'auth/registro' ? 'is-active' : '';?>">
            <a href="<?=base_url(route_to('register'))?>">Registro</a>
          </li>
          <li>
            <a>Ingreso</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</section>