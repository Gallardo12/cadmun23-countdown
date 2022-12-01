<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CADMUN 2023</title>

    <link rel="shortcut icon" href="assets/img/cadmun-logo.png" />

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />

    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
            min-height: 100vh;
            background-image: url("assets/img/collage-cadmuns.jpg");
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .gg {
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0,
                    0,
                    0,
                    0.6);
            /* Black w/opacity/see-through */
            color: white;
            padding: 20px;
            border: 3px solid #f1f1f1;
        }

        /* Medium devices (landscape tablets, 768px and up) */
        @media only screen and (min-width: 768px) {
            .heading1 {
                font-size: 85px;
                font-weight: bolder;
                text-align: center;
            }

            .heading2 {
                font-size: 30px;
                font-weight: bolder;
                text-align: center;
            }

            .heading3 {
                font-size: 50px;
                font-weight: bolder;
                text-align: center;
            }

            .heading4 {
                font-size: 20px;
                font-weight: bolder;
                text-align: center;
            }
        }

        .heading {
            font-weight: bolder;
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <!--div class="navbar-fixed">
                <nav class="grey darken-4">
                    <a href="#Main" class="brand-logo center"
                        ><p>
                            <img height="40px" src="CADMUN LOGO 2023.png" />
                            CADMUN 2023
                        </p></a
                    >
                </nav>
            </div-->
    </header>

    <main class="valign-wrapper">
        <div class="container">
            <div class="gg valign-wrapper">
                <div class="row">
                    <div class="col m4 s12">
                        <img class="responsive-img" src="assets/img/cadmun-logo-2023.png" alt="CADMUN Logo" />
                    </div>
                    <div class="col m8 s12">
                        <div class="col s12">
                            <h1 class="white-text heading heading1">CADMUN 2023</h1>
                        </div>
                        <div class="col s12">
                            <h2 class="white-text heading heading2">Coming Soon</h2>
                        </div>
                        <div class="col s12">
                            <div class="countdown heading heading3"></div>
                        </div>
                        <div class="col s12">
                            <div class="heading heading4">
                                <p>D:H:M:S</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer grey darken-4">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text"><b>Contact Us</b></h5>
                    <p class="grey-text text-lighten-4">
                        Address: <br />
                        Av. Tec Milenio #201, El Nayar, 34194, Victoria de
                        Durango, Durango, Mexico <br /><br />
                        Telephone: <br />
                        Valentina Ruiz - +52 618 145 1965 <br />
                        Sofia Cortez - +52 618 259 2349 <br />
                        Daniela Rivas - +55 313 8864
                    </p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text"><b>Emails</b></h5>
                    <ul>
                        <li class="grey-text text-lighten-3">
                            <p>
                                <a href="mailto:cadmun@cadurango.mx">cadmun@cadurango.mx</a>
                            </p>
                        </li>
                        <li class="grey-text text-lighten-3">
                            <p>
                                <a href="mailto:drivas@cadurango.mx">drivas@cadurango.mx</a>
                            </p>
                        </li>

                        <li class="grey-text text-lighten-3">
                            <p>
                                <a
                                    href="mailto:valentina.ruiz.g.student@cadurango.mx">valentina.ruiz.g.student@cadurango.mx</a>
                            </p>
                        </li>
                        <li class="grey-text text-lighten-3">
                            <p>
                                <a
                                    href="mailto:sofia.cortez.r.student@cadurango.mx">sofia.cortez.r.student@cadurango.mx</a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2023 Copyright Text
                <a class="grey-text text-lighten-4 right" target="_blank" href="cadurango.mx">American School of
                    Durango</a>
            </div>
        </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="assets/js/main2.js"></script>
    <script>
        M.AutoInit();
    </script>
</body>

</html>
