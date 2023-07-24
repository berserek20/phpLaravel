<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
        </style>

        <style>
            *{
                font-family: Arial, Helvetica, sans-serif;
            }
            body{

            }
            #container {
                    height: 100vh;
                    width: 100vw;
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    justify-content: center;
                    font-size: 50px;

            }
            #box1 {
                    height: 100vh;
                    width: 50%;
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    justify-content: right;
                    background-image: linear-gradient(white, blue);

                    /* background-color: blue; */
                    color: white;

            }
            #box2 {
                    height: 100vh;
                    width: 50%;
                    display: flex;
                    flex-direction: row;
                    align-items: center;
                    justify-content: left;


            }

            #logo{
                float: left;
                width: 30%;

            }
            #credentials{
                float: right;
                width: 30%;

                display: flex;
                flex-direction: row;
            }

            nav ul li{
                list-style: none;
                margin:20px;
            }
            nav ul li a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <nav>
            <ul    id='logo'>
                <li>LOGO</li>
            </ul>
            <ul id='credentials'>
                <li>      <a href="http://127.0.0.1:8000/login">Sign In</a> </li>
                <li>    <a href="http://127.0.0.1:8000/register">Register</a> </li>
            </ul>
        </nav>
        <div id="container">
            <div id="box1">
                <b>WEL</b>

                {{-- <p>To</p> --}}
            </div>
            <div id="box2">
                <b>COME</b>
                {{-- <p>The World</p> --}}
            </div>
        </div>

    </body>
</html>
