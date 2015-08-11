<?php
//lay duong dan goc
$doc_root=$_SERVER['DOCUMENT_ROOT'];
//lay duong dan tuong doi
$uri=$_SERVER['REQUEST_URI'];
$dir=explode('/', $uri);
$app_path='/'.$dir[1].'/';
$include_path=$doc_root.$app_path;
set_include_path($include_path);


?>