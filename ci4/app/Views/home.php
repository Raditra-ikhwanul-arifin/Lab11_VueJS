<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>
<div class="main-content-area"> <h1><?= $title; ?></h1>
    <hr>
    <p><?= $content; ?></p>
</div> <?= $this->endSection() ?>