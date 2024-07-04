<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            cursor: pointer;
            padding: 0;
            box-sizing: border-box;
        }

        h1{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: calc(2rem + 3vw);
            text-shadow: 0px 0px 10px black;
            color: rgb(40, 40, 40);
            text-transform:capitalize;
        }
        h1:hover{
            text-shadow: 0px 0px 10px black;
            color: rgb(25, 25, 25);
            cursor: none;
        }

        body{
            background-image: linear-gradient(rgb(0,0,0) 0%, rgb(47, 46, 46) 100%);
            background-repeat: no-repeat;
            height: 100vh;
        }
    </style>

    <h1>hello world</h1>
    
</body>
</html>
