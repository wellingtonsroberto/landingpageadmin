<?php
 
require_once 'config/init.php';
 
if (!isLoggedIn())
{
    header('Location: login.php');
}