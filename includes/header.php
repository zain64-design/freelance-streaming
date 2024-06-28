<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="">
    <link href="css/custom.css" rel="stylesheet" type="text/css">
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-xl">
            <div class="container-fluid px-4">
                <a class="navbar-brand" href="index.php">
                    <div class="topimg">
                        <img src="images/fav.png" class="img-fluid" alt="img">
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8 col-xxl-8 px-3">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 col-xxl-8 px-3">
                                <div class="formlist">
                                    <form>
                                        <div class="formlist">
                                            <input type="text"
                                                placeholder="Look for a stream, category, creator or keyword">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                            <button>Discover <img src="images/star.png"
                                                    class="img-fluid discover_img"></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4 px-3">
                                <div class="startstreamingbtn mt-2 mt-sm-2 mt-md-0 mt-lg-0 mt-xl-0 mt-xxl-0">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3"><span
                                            class="streamingicon"><i class="fa-solid fa-video"></i></span> Start
                                        Streaming</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4 col-xxl-4 px-3">
                        <div class="websiteprofile">
                            <ul>
                                <li class="dropdown"><a href="#" class="" id="dropdownMenuButton1"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-gear"></i>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">Register</a></li>
                                        <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal1">Login</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">
                                        <i class="fa-sharp fa-regular fa-comments"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/profile.png" class="imgfluid" alt="profileimg">
                                    </a>
                                </li>
                                <li>
                                    <p>Good to see you back</p>
                                    <h6>MDX Agency</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>