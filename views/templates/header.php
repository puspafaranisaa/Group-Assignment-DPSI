<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Halaman <?= $data['judul']; ?></title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>/about">Restoran Ayam Goreng</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/bahanmentah">Bahan Mentah</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>/bahanjadi">Bahan Jadi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="<?= BASEURL; ?>/about">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>