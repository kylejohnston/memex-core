<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MEMEX</title>
  <?php include('includes/head.php'); ?>
</head>
<body class="">
  <header>
    <?php include('includes/header-nav.php'); ?>
  </header>
  <div class="content">
    <article class="col-2">
      <div class="column">
        <p>The term <i>MEMEX</i> comes from <a href="https://en.wikipedia.org/wiki/Vannevar_Bush">Vanner Bush’s</a> 1945 <i>The Atlantic Monthly</i> article <a href="https://www.theatlantic.com/magazine/archive/1945/07/as-we-may-think/303881/">“As We May Think.”</a> The MEMEX is described as “a device in which an individual stores all their books, records, and communications, and which is mechanized so that it may be consulted with exceeding speed and flexibility” and an “enlarged intimate supplement to memory.”</p>
      </div>
      <div class="column shim"></div>
    </article>
    <article class="col-3">
      <?php
        $www_root = 'img';
        $dir = 'img';
        include('includes/renderer.php');
      ?>
    </article>
  </div>

  <footer>
    <?php include('includes/footer.php'); ?>
  </footer>
  <?php include('includes/foot.php'); ?>
</body>
</html>
