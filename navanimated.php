<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/-Fixed-Navbar-start-with-transparency-background-BS4--transparency-menu.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<script>
    window.onscroll = function() {
        var navbar = document.getElementById("transmenu");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.classList.remove("scrolled");
            navbar.classList.remove("transparency");

        } else {
            navbar.classList.add("scrolled");
            navbar.classList.add("transparency");
        }
    };
</script>

    <div>
        <header>
        <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white transparency border-bottom border-light transparent-nav" id="transmenu">
                <div class="container"><a class="navbar-brand logo" href="index.php">
                            <img src="images/me.png" alt="Logo" width="100" height="50"></a><a class="navbar-brand text-success" href="index.php">&nbsp;EMPHATY COMPANY LTD</a><button data-bs-toggle="collapse" class="navbar-toggler collapsed" data-bs-target="#navcol-1"><span></span><span></span><span></span></button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="sectors.php" role="button" id="sectorsDropdown">Sectors</a></li>


                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>


    <!-- <div class="carousel slide" data-bs-ride="carousel" id="carousel-1">
        <div class="carousel-inner">
            <div class="carousel-item active">
<style>
    .carousel-hero {
        background-image: url('images/energy.jpeg');
    }
</style>
                <div class="bg-light border rounded border-light hero-nature carousel-hero jumbotron py-5 px-4">

                    <h1 class="hero-title">Energy</h1>
                    <p class="hero-subtitle">In the Energy sector, the company will be involved in Solar Installation.</p>
                    <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Learn more</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="bg-light border rounded border-light hero-photography carousel-hero jumbotron py-5 px-4">
                    <h1 class="hero-title">Telecommunication</h1>
                    <p class="hero-subtitle">In Telecommunication, the company will be involved in installation and alignment of Telcom and VSAT equipment. In the Health Care sector, Empathy Group Limited will be involved in providing healthcare services.</p>
                    <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Learn more</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="bg-light border rounded border-light hero-technology carousel-hero jumbotron py-5 px-4">
                    <h1 class="hero-title">Agri and Aquaculture</h1>
                    <p class="hero-subtitle">In the Agri and Aquaculture sector, Empathy Group Limited will be involved in the cultivation of crops and fish farming</p>
                    <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">Learn more</a></p>
                </div>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon"></span><span class="visually-hidden">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
        </ol>
    </div> -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/-Fixed-Navbar-start-with-transparency-background-BS4--transparency-menu.js"></script>
</body>

</html>