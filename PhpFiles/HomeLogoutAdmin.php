<?php
session_start();
    include("connections/connections.php");
    include("functions/functions.php");

    $user_data = check_login($con);

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style1.css">
</head>

<body>
    <header>
        <div class="collapse" id="navbarToggleExternalContent">
            <nav class="navbar navbar-expand-md bg-light">
                <div class="container-fluid p-4">

                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link active" href="test.html">Acasa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Stiri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Detalii echipa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sponsori</a>
                        </li>
                    </ul>
                    <button class="btn log" type="button"><a class="nav-link login-anchor"
                            href="Home.php">Logout</a></button>
                            Hello, <?php echo $user_data['user_name']; ?>
                </div>
            </nav>
        </div>
        <nav class="navbar">
            <div class="container-fluid">
                <a href="test.html"><img src="img/CSM-SV.png" alt="CSM" class="logo"></a>

                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <h1 class="menu-text">Meniu</h1>
                    <div class="bars">
                        <span class="toggler-icon top-bar"></span>
                        <span class="toggler-icon middle-bar"></span>
                        <span class="toggler-icon bottom-bar"></span>
                    </div>
                </button>
            </div>
        </nav>
    </header>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"
                class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"
                class=""></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active img1">
                <div class="section">
                    <h2>Club</h2>
                </div>
            </div>
            <div class="carousel-item img2">
                <div class="section s-2">
                    <h2>Sportiv</h2>
                </div>
            </div>
            <div class="carousel-item img3">
                <div class="section s-3">
                    <h2>Municipal</h2>
                </div>
            </div>
            <div class="carousel-item img4">
                <div class="section s-4">
                    <h2>Suceava</h2>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="about">
        <div class="about-line"></div>
        <h3 class="about-text">About CSM</h3>
        <div class="about-all">
            <div class="reflection"></div>
            <div class="about-content">
                <h2>Lorem ipsum dolor sit amet.</h2>
                <div class="line"></div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum dolor itaque consectetur? Iure
                    neque
                    earum
                    dicta cumque quasi commodi aliquid culpa fugit incidunt qui, at nobis sapiente quia, id quis!</p>
                <button class="btn about-btn" type="button"> <a href="#" class="nav-link view">View more!</a></button>
            </div>
        </div>


    </div>

    <section class="performanta">

        <div class="img-v">
            <img src="img/voley-woman.png" alt="voley-player" class="player">
        </div>

        <div class="rezultate">
            <div class="box">
                <div class="titlu">
                    <img src="img/csm2.png" alt="sigla">
                    <div class="linie"></div>
                    <p class="descriere">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non, et.</p>
                </div>
                <div class="stats">
                    <div class="lost">
                        <img src="img/lose.png" alt="">
                        <p class="number">1</p>
                    </div>
                    <div class="win">
                        <img src="img/win.png" alt="">
                        <p class="number">10</p>
                    </div>
                    <div class="draw">
                        <img src="img/scoreboard-tied.png" alt="">
                        <p class="number">2</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="NextGame">
        <div class="Game">
            <h1 class="utlimul">Ultimul</h1>
            <div class="line1"></div>
            <h1 class="meci">Meci</h1>
            <div class="line2"></div>
            <div class="RezGame">
                <img src="img/CSM-SV.png" alt="logo1" class="echipa1">
                <div class="between">
                    <div class="up">
                        <p class="rez1">3</p>
                        <p class="versus">vs</p>
                        <p class="rez2">1</p>
                    </div>
                    <div class="down">
                        <div class="date-time">
                            <p class="date">29 mai 2025</p>
                            <div class="date-line"></div>
                            <p class="time">18 : 00</p>
                        </div>
                        <p class="location">Stadionul Areni</p>
                        <p class="city">Suceava</p>
                    </div>
                </div>
                <img src="img/CSM-SV.png" alt="logo2" class="echipa2">
            </div>
        </div>

        <div class="Title">
            <h1 class="ultimul">Ultimul</h1>
            <div class="line1"></div>
            <h1 class="meci">Meci</h1>
            <div class="line2"></div>
            <div class="RezGame1">
                <img src="img/CSM-SV.png" alt="logo1" class="echipa1">
                <div class="between">
                    <div class="up">
                        <p class="rez1">3</p>
                        <p class="versus">vs</p>
                        <p class="rez2">1</p>
                    </div>
                    <div class="down">
                        <div class="date-time">
                            <p class="date">29 mai 2025</p>
                            <div class="date-line"></div>
                            <p class="time">18 : 00</p>
                        </div>
                        <p class="location">Stadionul Areni</p>
                        <p class="city">Suceava</p>
                    </div>
                </div>
                <img src="/img/CSM-SV2.png" alt="logo2" class="echipa2">
            </div>
        </div>

    </section>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>

</html>