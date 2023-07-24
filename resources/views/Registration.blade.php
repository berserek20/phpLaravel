<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <style>
         *{
                font-family: Arial, Helvetica, sans-serif;
            }

        #container{
            height: 100vh;
            width: 100vw;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        input{
            border:none;
            border-bottom: 2px solid blue;
            margin-left:20px;

        }
        span{
            color: red;
            margin-left:20px;

        }
        form{
            border: 2px solid black;
            height: 400px;
            width: 400px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .box1{
            display: flex;
            flex-direction: row;
            margin:30px;
        }
        .inputbox{
            display: flex;
            flex-direction: column;
            margin: 20px;
        }

        button{
                height: 50px;
                width: 100px;
                border-radius: 10%;
                background-color: rgba(10, 38, 248, 0.703);
                color: white;
                cursor: pointer;
            }
    </style>
</head>
<body>
    <div id="container">
           <h2>Register</h2>

        <form action={{url('register')}}  method='post'>
            @csrf
            <div class="inputbox">
                <div class="box">

                    <label for="name">name</label>
                    <input type="text" placeholder="username" name="name"   value={{old('name')}}>
                </div>
                <span   class="text-error">
                    @error('name')
                        {{$message}}

                    @enderror
                </span>
            </div>

            <div class="inputbox">
                <div class="box">

                    <label for="email">email</label>
                    <input type="text" placeholder="email" name="email" value={{old('email')}}>
                </div>
                <span   class="text-error">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </div>

            <div class="inputbox">
                <div class="box">

                    <label for="password">password</label>
                    <input type="text" placeholder="password" name="password">
                </div>
                <span   class="text-error">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
            </div>

            <div class="inputbox">
                <div class="box">
                    <label for="confirm-password">confirm password</label>
                    <input type="text" placeholder="confirm password" name="confirm-password">
                </div>
                <span   class="text-error">
                    @error('confirm-password')
                        {{$message}}
                    @enderror
                </span>
            </div>

            <button onclick="Submit">Register</button>
        </form>
        <a href="http://127.0.0.1:8000/login">Login</a>
    </div>
</body>
</html>
