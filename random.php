<?php 
 $characters = 'abcdefghijklmnopqrstuvwxyz0123456789';
 $random_string_length = 8;
 $string = '';
 for ($i = 0; $i < $random_string_length; $i++) {
      $string .= $characters[rand(0, strlen($characters) - 1)];
 }
 echo  $string;
?>