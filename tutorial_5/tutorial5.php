<?php

$handle = opendir("C:\Users\Dell\Desktop\PHP_tutorial1");

while(($name = readdir($handle)) !== FALSE) {
    if($name !=="." && $name !==".."){
        echo $name ."<br>";
    }
}

?>