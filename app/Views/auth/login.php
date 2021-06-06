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
  <h1 class="title">Ingresa ahora!</h1>
  <h2 class="subtitle">
    Solo debes ingresar para empezar a publicar.
  </h2>
  <div class="notification is-info">
  <?=session('msg')?>
  </div>
</div>
</section>
<?=$this->endSection()?>