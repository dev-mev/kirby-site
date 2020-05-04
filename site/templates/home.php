<?php if (!$kirby->user()) go('/login') ?>
<?php snippet('header') ?>

<?php if($file = $page->file('cda-interview-guide.jpg')): ?>
<img src="<?= $file->url() ?>" alt="">
<?php endif ?>

<h1 class="banner-image-text">CDA Interview Guide</h1>

<div class="inner">
  <span class="headline">
    <?= $page->headline()->kt() ?>
  </span>

  <?= $page->text()->kt() ?>
</div>

<?php snippet('footer') ?>