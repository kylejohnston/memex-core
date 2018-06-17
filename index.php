<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>memex</title>
  <?php include('includes/head.php'); ?>
</head>
<body class="home">
  <header>
    <?php include('includes/header-nav.php'); ?>
  </header>
  <article class="home">
      <p>The term <i>memex</i> comes from  <a href="https://en.wikipedia.org/wiki/Vannevar_Bush">Vanner Bush’s</a> 1945 <i>The Atlantic Monthly</i> article “ <a href="https://www.theatlantic.com/magazine/archive/1945/07/as-we-may-think/303881/">As We May Think</a>.” The memex is described as “a device in which an individual stores all his books, records, and communications, and which is mechanized so that it may be consulted with exceeding speed and flexibility” and an “enlarged intimate supplement to memory.”</p>
  </article>
  <article>
  <?php
    $www_root = 'http://memex-core.local/img/';
    $dir = 'img/';
    include('includes/renderer.php');
  ?>
</article>

  <footer>
    <?php include('includes/footer.php'); ?>
  </footer>
  <?php include('includes/foot.php'); ?>
</body>
</html>