<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    *{
        margin: 0;
        padding:0
    }
    nav{
        width: 100%;
        height:70px;
        background: black;
        display:flex;
        align-items:center;
        justify-content:center
        /* text-align: center */
    }
    ul li{
        display: inline-block;
        margin-top: auto

    }
     li a{
        color:white;
        margin:10px;
        cursor: pointer;
        text-decoration:none;
    }
</style>
<body>
    <nav>
        <ul>
            <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('piza')}}">Pizza</a></li>
        </ul>
    </nav>
</body>
</html>