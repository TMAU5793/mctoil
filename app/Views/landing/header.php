<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?= (isset($metatitle)?$metatitle : 'MCT Oil'); ?></title>
   <link rel='shortcut icon' type='image/x-icon' href="<?= base_url('assets/images/favicon.png'); ?>">
   <meta name="description" content="<?= (isset($metadesc)?$metadesc : 'MCT Oil'); ?>">
   <meta property="og:url"                content="<?= current_url(); ?>">
   <meta property="og:title"              content="<?= (isset($metatitle)?$metatitle : 'MCT Oil'); ?>">
   <meta property="og:description"        content="<?= (isset($metadesc)?$metadesc : 'MCT Oil'); ?>">
   <meta property="og:image"              content="<?= (isset($share_img)?base_url($share_img) : base_url('assets/images/share-img.jpg')); ?>">

   <!-- Bootstrap 5 -->
   <link rel="stylesheet" href="<?= base_url('assets/bootstrap-5/css/bootstrap.min.css'); ?>">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css'); ?>">
   <!-- Font Family -->
   <link rel="stylesheet" href="<?= base_url('assets/fonts/DBAdman/font.css'); ?>">
   <!-- MCT Oil Style -->
   <link rel="stylesheet" href="<?= base_url('assets/styles/css/mct-style.css'); ?>">
</head>
<body>