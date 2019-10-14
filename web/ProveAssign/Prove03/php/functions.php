<?php
session_start();

function addToSession($product)
{
    $_SESSION[$product] = $product;
}