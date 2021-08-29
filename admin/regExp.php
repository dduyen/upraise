<?php
 $reg = '/^([a-z]+) /';
 if(isset($_POST['btnInsert'])){
   if(preg_match($reg,$_POST['fullname'] )  ||  preg_match($reg,$_POST['email']) ||   preg_match($reg,$_POST['pass_word'])) {
   }
   else{
     $output = " <p style='color:red;' class='message'>Vui lòng nhập đúng</p>";
   }
 }

?>