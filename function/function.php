<?php 
function generatePassword() {
    $i = 0 ;
    $randomPassword = '';
    $chars ="abcdefghijlmnopqrstuvwxyzABCDEFGHIJLMNOPQRSTUVWXYZ0123456789_?*+&%!#@";
    $lenChars=strlen($chars);
   
    if(!empty($_GET["getNumber"])){
      $number = $_GET['getNumber'];
       while ($i < $number) {
              $number_random=rand(0, $lenChars -1);
              $randomPassword .= $chars[$number_random];
              $i++;
    }
   } 
  
    
  return $randomPassword;  
 };
?>