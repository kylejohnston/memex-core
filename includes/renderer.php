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
          <a href="#',$file,'"><img class="b-lazy" src="//memex.local/img/loading.jpg" data-src="', $www_root, '/', $file, '" alt="', $file, '" alt="', $file, '" height="auto"></a>
        </div>
        <a href="#_" class="lightbox" id="',$file,'"><img src="', $www_root, '/', $file, '"></a>'
        ;
        //break;
      }
    }
  }
?>