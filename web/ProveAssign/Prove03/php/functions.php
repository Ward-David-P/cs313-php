<?php
session_start();

function addToSession($product)
{
    $_SESSION['cartItems'] = array();
    array_push($_SESSION['cartItems'], $product);
}