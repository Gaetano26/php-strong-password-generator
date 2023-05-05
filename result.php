<?php
session_start();
include __DIR__ . '/function/function.php' ;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-primary">
    <div class="text-center">
        <h1 class="mt-5">La tua password è</h1>
        <?php if (!empty($_SESSION['password'])) { ?>
             <p><?php echo generatePassword() ?></p>
        <?php } else {
            header('Location: ./index.php');
        } ?>
    </div>


</body>

</html>