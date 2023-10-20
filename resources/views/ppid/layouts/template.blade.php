<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PPID </title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <!-- Add the slick-theme.css if you want default styling -->
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div id="page-container">
            <div id="content-wrap">
                <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="/">
                            <img class="" src="image/Logo.jpg" alt="Bootstrap" width="258">
                        </a>
                        <div class="collapse navbar-collapse ml-auto" id="navbarNav">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item mx-1">
                                    <a class="nav-link" href="/profil">Profil dan Regulasi</a>
                                </li>
                                <li class="nav-item mx-1">
                                    <a class="nav-link" href="/prosedur">Prosedur Permintaan Informasi</a>
                                </li>
                                <li class="nav-item mx-1">
                                    <a class="nav-link" href="/faq">FAQ</a>
                                </li>
                            </ul>
                        </div>
                        <div class="search-box">
                            <form action="/search" method="GET">
                                <input type="text" class="form-control" placeholder="Cari..." name="search" value="{{ request('search') }}">
                            </form>
                        </div>
                        <a href="#" class="button" id="submit-btn" type="submit" name="submit" onclick="window.open('https://sso.kemenkeu.go.id/','_blank')">Login</a>
                    </div>
                </nav>

                @yield('container')

            </div>

            <footer class="footer">
                <div class="container mt-3 mb-0">
                    <div class="row tautan">
                        <div class="col-4">
                            <div class="wrapper-col-1">
                                <label><b>Direktorat Jenderal Kekayaan Negara<br>Kementerian Keuangan</b></label><br>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16">
                                    <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z"/>
                                </svg> 2017-2022 DJKN
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="wrapper-col-2">
                                Gedung Syafrudin Prawiranegara II<br>
                                Jalan Lapangan Banteng Timur Nomor 2-4,<br>
                                Jakarta Pusat, DKI Jakarta, 10710<br>
                                Call Center 150991 / (021) 150991
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="wrapper-col-3">
                                <label>Temukan Kami :</label>
                                <div class="wrapper-icon">
                                    <a href="https://id-id.facebook.com/DitjenKekayaanNegara" target="_blank"><img src="image/WHITE ICON MEDSOS-02-FB.png"></a>
                                    <a href="https://twitter.com/ditjenkn" target="_blank"><img src="image/WHITE ICON MEDSOS-03-TW.png"></a>
                                    <a href="https://www.instagram.com/ditjenkn/" target="_blank"><img src="image/WHITE ICON MEDSOS-01-IG.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="https://code.jquery.com/jquery-migrate-3.4.1.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>
         <!-- JQuery Slick -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <!-- Slick JS -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/3.11.174/pdf.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/main.js"></script>
        <script type="text/javascript" src="js/pdfThumbnails.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $(".regular").slick({
                    // dots: true,
                    infinite: false,
                    slidesToShow: 4,
                    slidesToScroll: 4,
                    variableWidth: true,
                    focusOnSelect: true
                });

                //$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                //$('.regular').slick('setPosition');
                //})
            })
        </script>
    </body>
</html>

