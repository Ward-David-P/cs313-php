<?php
session_start();

$items_array = array(
    "Harness" => 0,
    "Chalk Bag" => 0,
    "Climbing Shoes" => 0,
    "Chalk" => 0,
    "Brush" => 0,
    "Gri-Gri" => 0
);

if(isset($_POST["Harness"]))
{
    $items_array["Harness"] += 1;
}

if(isset($_POST["Chalk Bag"]))
{
    $items_array["Chalk Bag"] += 1;
}

if(isset($_POST["Climbing Shoes"]))
{
    $items_array["Climbing Shoes"] += 1;
}

if(isset($_POST["Chalk"]))
{
    $items_array["Chalk"] += 1;
}

if(isset($_POST["Brush"]))
{
    $items_array["Brush"] += 1;
}

if(isset($_POST["Gri-Gri"]))
{
    $items_array["Gri-Gri"] += 1;
}

$_SESSION['items'] = $items_array;