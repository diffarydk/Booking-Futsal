<DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widht-device-widht, initial-scale=1.0">
    <title>Selamat datang</title>
    <style>
        .body{
            margin: 0;
            padding: 0;
            color: red;
        }
        .menu{
            list-style-type: none;
            overflow: hidden;
            background-color: green;
            padding: 0;
            margin: 0;
        }
        .menu-list{
            float: left;
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
        .jumbotron{
            padding: 30px;
        }
        .container{
            margin: 0 auto;
            padding: 30px;
            border-radius: 10px;
        }
        .jumbotron .container{
            max-width: 100%;
            background-color: black;
        }
        .jumbotron h1{
            text-align: left;
            color: white;
            font-family: 'raleway', helvetica, arial, sans-serif;
            font-weight: 600;
            font-size: 40px;
            text-transform: uppercase;
        }
        .jumbotron p{
            text-align: left;
            color: white;
            font-family: 'raleway', helvetica, arial, sans-serif;
            font-weight: 600;
            font-size: 20px;
            text-transform: uppercase;            
        }
    </style>
</head>

<body>
    <ul class="menu">
        <li class="menu-list"><a href="./form/pendaftar.php">Daftar</a></li>
        <li class="menu-list"><a href="./logout.php">Log out</a></li>
    </ul>
    <div class="jumbotron">
        <div class="container">
        <h1>Selamat datang di Jala Futsal</h1>
        <p>Silakan klik tombol daftar di atas ini</p>
    <br><br>
        </div>
    </div>

    </body>
</html>