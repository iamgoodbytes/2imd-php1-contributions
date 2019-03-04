<?php
    $url = $_SERVER['SCRIPT_NAME'];
    $path = parse_url($url, PHP_URL_PATH);
    $active = basename($path);
?>

<style type="text/css">
    .active {
        color: #0099CC !important;
   }
</style>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">Navbar</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link <?php if($active=='index.php'){ ?> active <?php } ?>" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($active=='about.php'){ ?> active <?php } ?>" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($active=='contact.php'){ ?> active <?php } ?>" href="contact.php">Contact</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
