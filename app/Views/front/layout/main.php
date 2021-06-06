<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <title><?=$this->renderSection('title')?>&nbsp;-&nbsp;My Blog!</title>
    <?=$this->renderSection('css')?>
  </head>
  <body>
  <?=$this->include('front/layout/header')?>
  <?=$this->renderSection('content')?>
  <?=$this->include('front/layout/footer')?>
  <?=$this->renderSection('js')?>
  </body>
</html>