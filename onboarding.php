<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/fakeLoader.js"></script>
    <link rel="stylesheet" href="css/fakeLoader.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="fakeLoader"></div>
    <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="background: #000000;">
        <div class="container">
            <a class="navbar-brand" href="#">MyTeknisi</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Login">Masuk/Daftar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#AboutUs">Profil Tim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="home"" class=" jumbotron text-center" style="background-color: #18181b; color:white;">
        <img src="img/logo.png" alt="" style="height:200px; weight:200px;">
        <h1 class="display-4">MY TEKNISI</h1>
        <p class="lead">Website penyedia layanan konsultasi masalah software pc anda.</p>
    </div>
    <svg style="margin-top: -35px;" width="100%" height="100%" id="svg" viewBox="0 0 1440 400"
        xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150">
        <path
            d="M 0,400 C 0,400 0,133 0,133 C 104.71428571428572,116.71428571428572 209.42857142857144,100.42857142857143 333,101 C 456.57142857142856,101.57142857142857 599,119 709,128 C 819,137 896.5714285714284,137.57142857142858 1013,137 C 1129.4285714285716,136.42857142857142 1284.7142857142858,134.71428571428572 1440,133 C 1440,133 1440,400 1440,400 Z"
            stroke="none" stroke-width="0" fill="#18181b" fill-opacity="0.53"
            class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 200)"></path>
        <path
            d="M 0,400 C 0,400 0,266 0,266 C 156.28571428571428,245.89285714285714 312.57142857142856,225.78571428571428 425,230 C 537.4285714285714,234.21428571428572 606,262.75 717,274 C 828,285.25 981.4285714285716,279.2142857142857 1109,275 C 1236.5714285714284,270.7857142857143 1338.2857142857142,268.3928571428571 1440,266 C 1440,266 1440,400 1440,400 Z"
            stroke="none" stroke-width="0" fill="#18181b" fill-opacity="1"
            class="transition-all duration-300 ease-in-out delay-150 path-1" transform="rotate(-180 720 200)"></path>
    </svg>

    <h1 id="Login" class="text-center" style="padding-top: 75px;">Masuk atau daftar sebagai</h1>
    <div class="container">
        <div class="row" style="padding: 24px; margin-left: 22%;">
            <div class="card" style="width: 18rem; ">
                <div class="card-body">
                    <h5 class="card-title">Pegawai</h5>
                    <p class="card-text">Masuk atau Daftar sebagai Pegawai</p>
                    <a href="loginpega.php" class="card-link">Masuk</a>
                    <a href="dafpega.php" class="card-link">Daftar</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;margin-left: 12px;">
                <div class="card-body">
                    <h5 class="card-title">Pengguna</h5>
                    <p class="card-text">Masuk atau Daftar sebagai Pengguna</p>
                    <a href="login.php" class="card-link">Masuk</a>
                    <a href="register.php" class="card-link">Daftar</a>
                </div>
            </div>
        </div>
    </div>

    <h1 id="AboutUs" class="text-center" style="padding-top: 75px;">Profil Tim</h1>
    <div class="container">
        <div class="row" style="padding: 24px; margin-left: 22%;">
            <div class="card" style="width: 18rem;">
                <img src="img/gede.jpg" class="card-img-top" alt=""
                    style="border-radius: 100%; height: 185px; width: 185px;padding:12px; margin-left:50px">
                <div class="card-body">
                    <h5 class="card-title text-center">I GEDE KRISNA</h5>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>-->
                    <a href="https://www.instagram.com/gedekrisna_13/" class="btn btn-primary">Instagram</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;margin-left: 12px;">
                <img src="img/idx.jpg" class="card-img-top" alt=""
                    style="border-radius: 100%; height: 185px; width: 185px;padding:12px; margin-left:50px">
                <div class="card-body">
                    <h5 class="card-title text-center">DHARMA NALA</h5>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>-->
                    <a href="https://www.instagram.com/ib_dhrmnl/" class="btn btn-primary">Instagram</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;margin-top:12px;">
                <img src="img/david.jpg" class="card-img-top" alt=""
                    style="border-radius: 100%; height: 185px; width: 185px;padding:12px; margin-left:50px">
                <div class="card-body">
                    <h5 class="card-title text-center">ULAAN DAVID </h5>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>-->
                    <a href="https://www.instagram.com/davidulaan/" class="btn btn-primary">Instagram</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;margin-left: 12px;margin-top:12px;">
                <img src="img/tina.jpg" class="card-img-top" alt=""
                    style="border-radius: 100%; height: 185px; width: 185px;padding:12px; margin-left:50px">
                <div class="card-body">
                    <h5 class="card-title text-center">CHRISTINA SANDRA</h5>
                    <!--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>-->
                    <a href="https://instagram.com/christnasandra?igshid=YmMyMTA2M2Y="
                        class="btn btn-primary">Instagram</a>
                </div>
            </div>
        </div>
    </div>
    </div>

    <section>
        <svg width="100%" height="100%" id="svg" viewBox="0 0 1440 400" xmlns="http://www.w3.org/2000/svg"
            class="transition duration-300 ease-in-out delay-150">
            <path
                d="M 0,400 C 0,400 0,200 0,200 C 158.14285714285717,202.25 316.28571428571433,204.5 425,197 C 533.7142857142857,189.5 593,172.25 710,185 C 827,197.75 1001.7142857142858,240.5 1133,248 C 1264.2857142857142,255.5 1352.142857142857,227.75 1440,200 C 1440,200 1440,400 1440,400 Z"
                stroke="none" stroke-width="0" fill="#18181b" fill-opacity="1" class=""></path>
        </svg>
        <div class="container1" id="contact" style="background:#18181b; margin-top:-24px;">
            <form id="contact-form" action="https://formspree.io/f/xdojdqkb" method="post">
                <h1 class="text-center">Contact Us</h1>
                <p class="text-center">Thank you for visiting our website. Let we know if you have
                    anything to say</p>
                <div class="form-group">
                    <label for="full-name">Full Name</label>
                    <input type="text" class="form-control" id="full-name" name="full-name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" type="text" class="form-control" id="message"></textarea>
                </div>
                <button type="submit" style="background:red;"
                    class="mt-4 w-full text-white bg-red-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-600 rounded text-lg">
                    Send my message
                </button>
                <div class="loader ease-linear mt-5 rounded-full border-4 border-t-4 border-gray-200 h-6 w-6 mx-auto">
                </div>
            </form>
        </div>
    </section>
</body>

</html>