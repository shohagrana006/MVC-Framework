<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo env('APP_NAME')?></title>
    <link rel="stylesheet" href="<?php  asset('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php  asset('css/style.css') ?>">
</head>
<body>

<div class="menu" >
    <nav class="navbar navbar-expand-lg bg-secondary">
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto"> 
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('/');?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo url('users') ?>">User</a>
                </li>     
            </ul>
        </div>
    </nav>
</div>
