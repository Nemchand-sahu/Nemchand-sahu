<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-image: url('cafe1.jfif');
            background-repeat: no-repeat;
            background-size: 100%;
        }
        .a{
            width: 300px;
            height: 380px;
            background-color:black;
            position: absolute;
            opacity: 0.50;
            top: 150px;
            left: 450px;
        }
        .b{
            color: white;
            text-align: center;
            width: 300px;
            height: 350px;
            position: absolute;
            top: 150px;
            left: 450px;
        }
        .y{
            width: 250px;
            height: 40px;
            background:transparent;
            border: none;
            color: white;
            border-bottom-style: solid;
            border-bottom-color: white;
            border-bottom-width: 3px;
        }
        .s{
            background-color: yellow;
            color: black;
            width:100px ;
            height: 30px;
            box-shadow: 5px 5px 7px azure;
        }
        .logo{
            width: 40px;
            height: 40px;
            z-index: 4;
            top: 118px;
            left: 580px;
            position: absolute;
            border-radius: 360px;
        }
    </style>
    <img src="userlogo.jfif" class="logo" alt="userlogo">
    <div class="a">

    </div>
    <div class="b">
        <form action="zonephp.php">
        <h1 class="x">LOGIN NOW</h1>
        user name
        <input class="y" type="text" placeholder="user name" name="t1"><br><br>
        password
        <input class="y" type="password" placeholder="password" name="t2"><br><br>
        <input class="s" type="submit" value="submit">
    </form>
        <h4> OR</h4>
        <a href="zone1.php"><input class="s" type="button" value="register" ></a>
    </div>

</body>
</html>