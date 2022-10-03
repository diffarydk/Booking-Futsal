<?php
    include "../../koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Lapangan</title>
</head>
<style>    
    body{
        margin: 0;
        padding: 0;
        background-color: #501f3a;
        text-decoration: none;
    }
    .table{
        font-family: arial, helvetica, sans-serif; 
        border-collapse: collapse;
        font-size: 17pt;
        border: 1px solid #cccccc;
    }
    td {
        padding: 6px;
        height: 25px;
        color: white;
    }
    td a {
        color: white;
    }
    th {
        padding: 3px;
        background-color: steelblue;
        color: white;
        height: 50px;
        width: 150px;
    }
    .form{
        padding: 20px;
        border-radius: 5px;

    }
    
    .menu{
            list-style-type: none;
            overflow: hidden;
            background-color: #728fce;
            padding: 0;
            margin: 0;
        }
    .menu-list{
            float: left;
            font-size: 13px;
            background-color: #728fce;
        } 
    .menu-list a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 24px;
        }
    .menu-list a:hover{
            background-color: black;
        }
        .judul{
            width: 100;
            padding: 1px 20px;
            background-color: #123c69;
            color: white;
            text-align: center;
        }
    </style>
<body>
<ul class="menu">
        <li class="menu-list"><a href="../welcome.php">Home</a></li>
        <li class="menu-list"><a href="../../logout.php">Logout</a></li>
    </ul>
    <div class="judul"><h1>Table lapangan</h1></div>
    <form class= "form">

    <table class="table" border="1" align="center">
<tr>
            <th style="text-align:center">Jenis Lapangan</th>
            <th style="text-align:center">Type Lapangan</th>
            <th style="text-align:center">Action</th>
        </tr>
    <?php
    $query = mysqli_query($koneksi, "SELECT * FROM data_lapangan");
    while ($data=mysqli_fetch_array($query)){?>
        <tr>
            <td style="text-align:center"><?php echo $data['jenis_lapangan'] ?></td>
            <td style="text-align:center"><?php echo $data['type_lapangan'] ?></td>
            <td style="text-align:center">
                <a href="edit.php?id=<?php echo $data['id_lapangan']?>">Edit</a>&emsp;
                <a class="delete" href="delete.php?id=<?php echo $data['id_lapangan']?>">Delete</a>
            </td> 
        </tr>
    <?php }
    ?>

</table> </td>
</tr>
</table> </body>
</html>