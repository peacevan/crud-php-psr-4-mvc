<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <title><?= $data['title']; //json_decode($data,true)['title']; ?></title>
	<link rel="stylesheet" href="<?= BASEURL ?>assets/css/bootstrap.min.css">
        
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Crud-Produto</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Produto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cadastro de Produto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">vender</a>
      </li>
    </ul>
  </div>
</nav>