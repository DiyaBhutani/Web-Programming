<?php
setcookie("username","Diya Bhutani",time()+30*24*60*60);
if(isset($_COOKIE["username"])){
   echo "Hi " . $_COOKIE["username"];
}else{
  echo " Welcome Guest!";
}
print_r($_COOKIE);

echo "<br>","Program by Diya Bhutani(2220100243)";
?>