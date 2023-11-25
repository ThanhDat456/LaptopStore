<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logo</title>
</head>

<body>
    <style>
        body {
            margin-top: 200px;
        }

        #wrapper {
            width: 202px;
            height: 38px;
            display: flex;
            justify-content: space-evenly;
            margin: 0px auto;
            background: #000;
            position:relative;
        }

        img {
            border-radius: 50%;
        }

        span {
            display: grid;
            place-content: center;
            font-size: 18px;
            font-weight: 600;
            color: #fff;
        }

        p {
            position: absolute;
            color: #fff;
            font-size: 10px;
            top: 16px;
            right: 13px;
        }
    </style>
    <div id="wrapper">
        <img src="public/images/laptop.jpg" alt="">
        <span>LaptopStore</span>
        <p>.com</p>
    </div>
</body>

</html>