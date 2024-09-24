<?php

$conn = new mysqli("localhost","root","","users");

if($conn){
   # echo "Connected to database";
}else{
    die($conn);
}