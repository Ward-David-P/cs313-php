<?php
session_start();

if(isset($_POST["Harness"]))
{
    $_SESSION["items"]["Harness"] += 1;
}

if(isset($_POST["ChalkBag"]))
{
    $_SESSION["items"]["ChalkBag"] += 1;
}

if(isset($_POST["ClimbingShoes"]))
{
    $_SESSION["items"]["ClimbingShoes"] += 1;
}

if(isset($_POST["Chalk"]))
{
    $_SESSION["items"]["Chalk"] += 1;
}

if(isset($_POST["Brush"]))
{
    $_SESSION["items"]["Brush"] += 1;
}

if(isset($_POST["Gri-Gri"]))
{
    $_SESSION["items"]["Gri-Gri"] += 1;
}