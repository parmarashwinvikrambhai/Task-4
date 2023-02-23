<?php


//s$no=123456789;
if (isset($_POST['submit'])) {
    $no=$_POST['num'];
    $var=(string)$no;
    $len=strrev($var);
    $re=(int)$len;
    echo $re."<br><br>";
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($re);$i++)  
 {  
  $rem=$re%10;  
   $sum = $sum + $rem;  
   $re=$re/10;
  }  
 echo "Sum :".$sum;  

 
}
    
?>