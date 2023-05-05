<?php

  $i = 0 ;
  $randomPassword = '';
  $number = $_GET['getNumber'];
  $chars ="abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ0123456789_?*+&%!#@";
  $lenChars=strlen($chars);
 
  if(!empty($_GET["getNumber"])){
     while ($i < $number) {
            $number_random=rand(0, $lenChars -1);
            $randomPassword=$chars[$number_random];
            $i++;
  }
 } 


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body class="bg-primary">
    <header class="d-flex flex-column gap-2 justify-content-center align-items-center pt-5">
       <h1 class="text-white">Cerca il Tuo Hotel</h1>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <input type="number"  class="form-control" min="8" max="32" name="getNumber">
        <button type="submit">Cerca</button>
      </form>
    </header> 
    <main class="d-flex align-items-center justify-content-center" >
        <div class="container">
            
           <h1><?php echo $randomPassword ?></h1>
    
    </main>
    
</body>
</html>