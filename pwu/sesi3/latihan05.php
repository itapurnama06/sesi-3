<?php
  $age = array("peter"=>"35","ben"=>"37","joe"=>"43");
   header('Content-Type: application/json; charset=utf-8');
    echo json_encode($age);
    

