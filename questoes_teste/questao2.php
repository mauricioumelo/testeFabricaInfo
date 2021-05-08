<?php
  $array = array();

  for ($x = 1; $x <= 6; $x++)
  {
      array_push($array, rand(10, 20));
  }

  var_dump($array);

  function somaArray($arrayprasomar){
      $res;
      foreach($arrayprasomar as $valor){
          $res += $valor;
      }
      echo "Soma: ".$res;
  }

  somaArray($array);