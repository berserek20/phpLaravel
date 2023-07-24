<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashoard</title>
    <style>
            *{
                font-family: Arial, Helvetica, sans-serif;
            }
            body{
                background-image: linear-gradient(white, blue);

            }

            #container{
                height: 100vh;
                width: 100vw;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                color: white;
            }
            button{
                height: 50px;
                width: 100px;
                border-radius: 10%;
                background-color: white;
                color: black;
                cursor: pointer;
                font-size: 20px;
                box-shadow: 20px;
            }
    </style>

</head>
<body>
    <h1>Dashoard</h1>
    <div id="container">
        <h2>Welcome,     {!!Auth::user()->name!!}</h2>

        <div id="logout">
            <form action="{{url('/')}}/logout"   method="post">
                @csrf
                <button onclick="Submit">Logout</button>
            </form>
        </div>
    </div>
</body>
</html>
