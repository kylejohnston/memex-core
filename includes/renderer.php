<?php
  $file_display = array('jpg', 'jpeg', 'png', 'gif');

  if ( file_exists( $dir ) == false ) {
    echo 'Directory \'', $dir, '\' not found!';
  } else {
    $dir_contents = scandir( $dir );

    foreach ($dir_contents as $file) {
      $file_type = strtolower(end(explode('.', $file)));
      if ( ($file !== '.') && ($file !== '..') && (in_array( $file_type, $file_display)) ) {
        echo '
        <div class="item">
          <a href="#',$file,'">
            <img class="lazyload" src="img/loader.svg" data-src="', $www_root, '/', $file,'" alt="', $file, '" width="auto">
          </a>
        </div>
        <a href="#_" class="lightbox" id="',$file,'"><img class="lazyload" src="img/loader.svg" data-src="', $www_root, '/fullsize/', $file, '"></a>'
        ;
        //break;
      }
    }
  }
?>