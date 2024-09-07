<!DOCTYPE html>

<html lang="uk" class="bg-<?= $bgclass ?>" data-class="bg-<?= $bgclass ?>">

<head>

    <meta charset="utf-8">
    <meta name="viewport"
        content="width=device-width,initial-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover">
    <title><?= config('IBTCHUB_TITLE') ?></title>
    <meta name="description" content="<?= config('IBTCHUB_DESCRIPTION') ?>">
    <meta name="keywords" content="<?= config('IBTCHUB_KEYWORDS') ?>">
    <link rel="icon" href="/assets/favicon.ico" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" href="/assets/libs/jqvmap/dist/jqvmap.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/css/site.min.css">
    <link rel="stylesheet" href="/assets/css/loader-gg.css">
    <link rel="stylesheet" href="/assets/css/fa.css">
    <link rel="stylesheet" href="/assets/css/styles.css">

    <?php
    if (cookie('background') == "light") { ?>
        <link rel="stylesheet" href="/assets/css/modal.css">
    <?php } ?>

</head>