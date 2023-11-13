<!DOCTYPE html>
<html>

<head>
    <title>Abuzaid News</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="img/wave.png">
    <div class="container">
        <div class="img">
            <img src="img/bg.svg">
        </div>
        <div class="login-content">
<form action="{{ route('login.post') }}" method="POST">
    @csrf
    <img src="img/avatar.svg">
    <h2 class="title">Welcome</h2>
    <div class="input-div one">
        <div class="i">
            <i class="fas fa-user"></i>
        </div>
        <div class="div">
            <h5>Email Address</h5>
            <input type="text" class="input" name="email" required autofocus>
        </div>
    </div>
    @if (session('error'))
    <span style="font-size:13px; color:red;">
        {{ session('error') }}
    </span>
    @endif
    <div class="input-div pass">
        <div class="i">
            <i class="fas fa-lock"></i>
        </div>
        <div class="div">
            <h5>Password</h5>
            <input type="password" class="input" name="password" id="passwordInput" required>
            <span class="password-toggle" id="togglePassword">
                <i class="fa fa-eye" aria-hidden="true"></i>
            </span>

        </div>
    </div>
    @if (session('error'))
    <span style="font-size:13px; color:red;">
        {{ session('error') }}
    </span>
    @endif
    @if (Route::has('register'))
    <a style="font-size: 18px; color: #333;
    text-transform: uppercase;" href="{{ route('register') }}">Register
        here</a>
    @endif
    {{-- <a href="#">Forgot Password?</a> --}}
    <button type="submit" class="btn">Login</button>
</form>
</div>
</div>

<script type="text/javascript" src="js/main.js"></script>


</body>

</html>

