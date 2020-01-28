<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="/public/bootstrap.min.css">
    <link rel="stylesheet" href="/public/style.css">

    <title>Jobsite</title>

</head>

<body>

<div class="container">
<div class="header clearfix">
  <nav>
    <ul class="nav nav-pills float-right">
      <li role="presentation" class="active"><a href="index.php">Home</a></li>
      <li role="presentation"><a href="create.php">Create listing</a></li>
    </ul>
  </nav>
  <h3 class="text-muted">Job lister</h3>
</div>

<?php displayMessage(); ?>