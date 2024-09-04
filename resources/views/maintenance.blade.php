<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maintenance</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/sass/style.css'])
</head>
<body class="element-6">
    <nav class="navbar navbar-expand-lg sticky-top border-bottom border-dark">
        <div class="container-fluid">
          <a href="/"><img src="/storage/logo-cloudgamingxgeforcenow_pink.png" width="400px"></a>
            <form class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link text-light" href="/maintenance"><strong>Plans</strong></a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="/maintenance"><strong>Games</strong></a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="/maintenance"><strong>Devices</strong></a></li>
                    <li class="nav-item"><a class="nav-link text-light border-end" href="/maintenance"><strong>Redeem Gift Card</strong></a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ route('login') }}"><strong>Login</strong></a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="{{ route('register') }}"><strong>Register</strong></a></li>
                    <li class="nav-item"><a class="nav-link text-light border border-dark" style="border-radius:20px; background-color:rgba(34, 254, 1, 0.633);" href="/maintenance"><strong>Get Started</strong></a></li>
                </ul>
            </form>
        </div>
    </nav>
    <div class="text-center text-light">
        <br><br><br><br>
        <h1>PAGE UNDER MAINTENANCE!</h1>
        <h1>MORE EXCITING FEATURE COMING SOON!</h1>
        <br><br><br><br><br><br><br><br>
    </div>
    <footer class="element-5">
        <div class="container text-light">
            <div class="row">
                <div class="col">
                    <img src="/storage/logo-cloudgaming_pink.png" width="200px"><br><br>
                    <a href="/maintenance"><img src="/storage/icons8-facebook-24.png"></a>&nbsp;&nbsp;&nbsp;
                    <a href="/maintenance"><img src="/storage/icons8-instagram-48.png" width="35px;"></a>&nbsp;&nbsp;&nbsp;
                    <a href="/maintenance"><img src="/storage/icons8-twitter-32.png" width="35px;"></a>&nbsp;&nbsp;&nbsp;
                    <a href="/maintenance"><img src="/storage/icons8-tiktok-50.png" width="35px;"></a>
                </div>
                <div class="col"></div>
                <div class="col">
                    <p><b>Company</b></p>
                    <p><a href="/maintenance" class="text-light">About Us</a></p>
                    <p><a href="/maintenance" class="text-light">Yes 5G Gaming Terms & Conditions</a></p>
                    <p><a href="/maintenance" class="text-light">Nvidia Terms & Conditions</a></p>
                    <p><a href="/maintenance" class="text-light">Privacy Policy</a></p>
                </div>
                <div class="col">
                    <p><b>Support</b></p>FAQ</a></p>
                    <p><a href="{{ route('register') }}" class="text-light">Sign Up</a></p>
                    <p><a href="/maintenance" class="text-light">Contact Us</a></p>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="container text-light foot">
            <div class="row">
                <p>
                    Powered by YTL, YTL Communications Sdn Bhd (Reg No. 200701035605 & 793634-V)<br>
                    18th Floor, Menara YTL, 205 Jalan Bukit Bintang, 55100 Kuala Lumpur, Malaysia.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
