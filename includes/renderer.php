<?php
  $file_display = array('jpg', 'jpeg', 'png', 'gif');

  if ( file_exists( $dir ) == false ) {
    echo 'Directory \'', $dir, '\' not found!';
  } else {
    $dir_contents = scandir( $dir );
    shuffle($dir_contents); // randomize the display order

    foreach ($dir_contents as $file) {
      $explode = explode('.', $file);
      $file_type = strtolower(end($explode));
      if ( ($file !== '.') && ($file !== '..') && (in_array( $file_type, $file_display)) ) {
        echo '
        <div class="item">
          <a href="#',$file,'">
            <img class="lazyload" src="img/loader.svg" data-src="', $www_root, '/', $file,'" alt="', $file, '" width="auto">
          </a>
        </div>
        <a href="#_" class="lightbox lazyload" id="',$file,'"><img class="lazyload" src="img/loader.svg" data-src="', $www_root, '/_fullsize/', $file, '"></a>'
        ;
        //break;
      }
    }
  }
?>
