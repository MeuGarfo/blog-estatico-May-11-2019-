<?php
require 'inc/slug.php';
$dir=glob('posts/*.txt');
$slug=@$_GET['slug'];
$title=slug($slug,false);
$pathAndSlug="posts/$slug.txt";

if(in_array($pathAndSlug,$dir)){
    $filename=__DIR__."/$pathAndSlug";
    $plainText=file_get_contents($filename);
    htmlDoPost($title,$plainText);
}else{
    require __DIR__.'/404.php';
}

function htmlDoPost($title,$plainText){
    $arr=explode(PHP_EOL,$plainText);
    $data=$arr[0];
    unset($arr[0]);
    $str=implode(PHP_EOL,$arr);
    $str=trim($str);
    $content=nl2br($str);
    templateDoPost($title,$data,$content);
}

function templateDoPost($title,$data,$content){
    require __DIR__.'/view/template.php';
}
