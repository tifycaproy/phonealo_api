<?php

if (isset($_SERVER["HTTP_CLIENT_IP"]))
       {
           $dip = $_SERVER["HTTP_CLIENT_IP"];
       }
       elseif (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
       {
           $dip = $_SERVER["HTTP_X_FORWARDED_FOR"];
       }
       elseif (isset($_SERVER["HTTP_X_FORWARDED"]))
       {
           $dip = $_SERVER["HTTP_X_FORWARDED"];
       }
       elseif (isset($_SERVER["HTTP_FORWARDED_FOR"]))
       {
           $dip = $_SERVER["HTTP_FORWARDED_FOR"];
       }
       elseif (isset($_SERVER["HTTP_FORWARDED"]))
       {
           $dip = $_SERVER["HTTP_FORWARDED"];
       }
       else
       {
           $dip = $_SERVER["REMOTE_ADDR"];
      }

$key = "9dcde915a1a065fbaf14165f00fcc0461b8d0a6b43889614e8acdb8343e2cf15"; $ip = $dip;

$url = "http://api.ipinfodb.com/v3/ip-city/?key=$key&ip=$ip&format=xml";

// carga el archivo xml

$xml = simplexml_load_file($url); // imprime el nombre del primer elemento

echo $xml->getName() .  "";  // crea un bucle para imprimir el nombre y los datos del elemento para cada nodo

foreach ($xml->children() as $child)

{

 echo $child->getName() . ": " . $child . "<br>"; 

} 



?>
