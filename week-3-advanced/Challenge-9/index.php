<?php

$dir = "./img/";


if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
        if(is_dir($file)){
                continue;
        }
        echo $file ." | ".number_format((filesize('./img/'.$file) / 1024 / 1024), 1)." MB <br>";
        
    }
    closedir($dh);
  }
}

?>