<?php
$ListSamsung = ['S22'=>'Samsung Galaxy S22', 'S22P'=>'Samsung Galaxy S22+', 'SA03'=>'Samsung Galaxy A03', 'SX5'=>'Samsung Galaxy Xcover5']
?>

<!DOCTYPE html>
<html long="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nama="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum - no 5</title>

    <style>
        .samsung{
            font-weight: 800;
            background-color: red;
            padding: 20px;
        }
    </style>
</head>
<body>
<table border="1">
        <tr>
            <td class="samsung"> Daftar Smartphone Samsung </td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung['S22']; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung['S22P']; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung['SA03']; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung['SX5']; ?></td>
        </tr>
</body>