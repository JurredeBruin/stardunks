<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
  <link rel="stylesheet" href="assets/style.css" type="text/css">
  </head>
  <body>


<div class="searchbar" >
<form action="index.php?op=search" method="POST" class="search">
<input id="search" type="text" name="search" >
<button id="submit" type="submit" value="search"><i class="fas fa-search"></i></button></form>
</div>
<div class="creatinghead"><a class="btncreate" href="?op=create">Create New Product</a></div>
<div class="return"><button><a class="homebtn" href="?">return</a></button></div>
<?php
