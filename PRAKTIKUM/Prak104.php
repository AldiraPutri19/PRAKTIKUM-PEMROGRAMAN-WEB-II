<?php
$ListSamsung = ['Samsung Galaxy S22', 'Samsung Galaxy S22+', 'Samsung Galaxy A03', 'Samsung Galaxy Xcover5']
?>

<!DOCTYPE html>
<html long="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta nama="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum - no 4</title>

    <style>
        .samsung{
            font-weight: bold;
        }
    </style>
</head>
<body>
<table border="1">
        <tr>
            <td class="samsung"> Daftar Smartphone Samsung </td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung[0]; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung[1]; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung[2]; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung[3]; ?></td>
        </tr>
</body>