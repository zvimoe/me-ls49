<?php
require_once 'calc.php';
require_once 'calcplus.php';
   $func=$_POST['minus'];
   if($func=='minus'){
       $calc=new Calcplus;
      echo $calc->minus($_POST['a'],$_POST['b']);
   }
   else if($func=='multi'){
       $calc=new Calcplus;
      echo $calc->multi($_POST['a'],$_POST['b']);
   }
      else if($func=='abs'){
       $calc=new Calcplus;
      echo $calc->abs($_POST['a']);
   }
      else if($func=='plus'){
       $calc=new Calcplus;
      echo $calc->plus($_POST['a'],$_POST['b']);
   }
      else if($func=='divide'){
       $calc=new Calcplus;
      echo $calc->divide($_POST['a'],$_POST['b']);
   }