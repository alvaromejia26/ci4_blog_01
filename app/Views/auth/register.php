<?=$this->extend('front/layout/main')?>
<?=$this->section('title')?>
Registro
<?=$this->endSection()?>
<?=$this->section('css')?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?=$this->endSection()?>
<?=$this->section('content')?>
<section class="section">
<div class="container">
  <h1 class="title">Regístrate ahora!</h1>
  <h2 class="subtitle">
    Solo debes ingresar algunos datos para empezar a publicar.
  </h2>
  <form action="<?=base_url('auth/store')?>" method="post">
    <div class="field">
      <label class="label">Nombres</label>
      <div class="control">
        <input name="name" value="<?=old('name')?>" class="input" type="text" placeholder="Text input">
      </div>
      <p class="help is-danger"><?=session('errors.name')?></p>
    </div>
    <div class="field">
      <label class="label">Apellidos</label>
      <div class="control">
        <input name="surname" value="<?=old('surname')?>" class="input" type="text" placeholder="Text input">
      </div>
      <p class="help is-danger"><?=session('errors.surname')?></p>
    </div>

  <div class="field">
    <label class="label">Email</label>
    <div class="control has-icons-left has-icons-right">
      <input name="email" value="<?=old('email')?>" class="input" type="email" placeholder="Email input" value="hello@">
      <span class="icon is-small is-left">
        <i class="fas fa-envelope"></i>
      </span>
      <span class="icon is-small is-right">
        <i class="fas fa-exclamation-triangle"></i>
      </span>
    </div>
    <p class="help is-danger"><?=session('errors.email')?></p>
  </div>

  <div class="field">
    <label class="label">Elije tu país</label>
    <div class="control">
      <div class="select">
        <select name="id_country">
          <option disabled selected>Elije un país</option>
          <?php foreach ($countries as $v) : ?>
            <option value="<?= $v->id_country ?>" <?php if($v->id_country == old('id_country')): ?>selected <?php endif;?>><?= $v->name ?></option>
          <?php endforeach ?>
        </select>
      </div>
    </div>
    <p class="help is-danger"><?=session('errors.id_country')?></p>
  </div>

  <div class="field">
      <label class="label">Contraseña</label>
      <div class="control">
        <input name="password" class="input" type="password" placeholder="Ingrese su contraseña">
      </div>
      <p class="help is-danger"><?=session('errors.password')?></p>
    </div>

  <div class="field">
      <label class="label">Confirmación de contraseña</label>
      <div class="control">
        <input name="c-password" class="input" type="password" placeholder="Ingrese su contraseña">
      </div>
    </div>

  <div class="field is-grouped">
    <div class="control">
      <button class="button is-info">Registrarse</button>
    </div>
  </div>
  </form>
</div>
</section>
<?=$this->endSection()?>