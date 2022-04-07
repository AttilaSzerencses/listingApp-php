<!DOCTYPE html>
<html lang="hu">
<head>
    <link rel="stylesheet" href="view/css/style.css" />
</head>
</html>
<?php

    session_unset();
    require_once 'controller/pageController/pageController.php';
    $controller = new pageController();
    $controller->mvcHandler();

?>

