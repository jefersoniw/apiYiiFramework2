<?php


$this->title = 'My Yii Application';
?>
<div class="site-index">

  <div class="body-content">

    <h1>Feed de Noticias via REST API</h1>

    <?php foreach ($data as $item) : ?>

      <p>ID: <?= $item['id'] ?></p>
      <p>Titulo: <?= $item['title'] ?></p>
      <p>Cabeça: <?= $item['cabeca'] ?></p>
      <p>Corpo: <?= $item['corpo'] ?></p>
      <p>Status: <?= $item['status'] ?></p>
      <hr>

    <?php endforeach; ?>
  </div>
</div>