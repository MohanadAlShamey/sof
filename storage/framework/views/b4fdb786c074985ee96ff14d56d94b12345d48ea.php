<?php
$lang = session('lang') ?? 'ar';

?>
    <!DOCTYPE html>
<html lang="<?php echo e($lang); ?>" dir="<?php echo e($lang=='ar'?'rtl':'ltr'); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <?php if($lang=='ar'): ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('theme1/assets/bootstrap/css/bootstrap.min.css')); ?>">
    <?php endif; ?>

    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Cairo:200,300,400,500,600,700,800,900&amp;subset=arabic,latin-ext&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i">
    <link rel="stylesheet" href="<?php echo e(asset('theme1/assets/fonts/fontawesome-all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme1/assets/fonts/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme1/assets/fonts/ionicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme1/assets/fonts/fontawesome5-overrides.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme1/assets/css/--mp---Testimonials-Slider-Testimonials-Slider.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme1/assets/css/Animation-Cards.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme1/assets/css/best-carousel-slide.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme1/assets/css/figloo-carousal.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme1/assets/css/Footer-Dark-Multi-Column-icons.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="<?php echo e(asset('theme1/assets/css/styles.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('theme1/assets/css/Ultimate-Testimonial-Slider.css')); ?>">
    <?php if($lang=='ar'): ?>
        <style>
            @import  url('https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@600&display=swap');
        </style>
        <style>
            @font-face {
                font-face-name: 'cairo';
                src: '<?php echo e(asset('public/assets/fonts/cairo.ttf')); ?>',

            }

            * {
                font-family: 'Noto Kufi Arabic', sans-serif;
                font-size: 14px !important;
            }

            body {
                min-height: 100vh;
                font-family: 'Noto Kufi Arabic', sans-serif;
            }


        </style>


    <?php else: ?>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@200&family=Oswald:wght@200&display=swap"
              rel="stylesheet">

        <style>

            * {
                font-size: 14px !important;
                /*font-family: 'Oswald', sans-serif;*/
                font-family: 'cairo', sans-serif;
            }

            body {
                min-height: 100vh;
                /*font-family: 'Oswald', sans-serif;*/
                font-family: 'cairo', sans-serif;
            }
        </style>
    <?php endif; ?>
</head>

<body>
<section class="top-hero py-1">
    <div class="container">
        <div class="row d-xl-flex">
            <div class="col-sm-12 col-md-12 col-lg-3 text-center d-flex d-xl-flex flex-row justify-content-center pt-2">
                <a class="text-dark" href="tel: <?php echo e($setting->phone); ?>">
                    <p class="d-xl-flex align-items-xl-center">&nbsp;<?php echo e(__('lang.phone')); ?> :<svg xmlns="http://www.w3.org/2000/svg"
                                                                          viewBox="0 0 512 512" width="1em" height="1em"
                                                                          fill="currentColor" class="mx-2">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z"></path>
                        </svg>
                       <?php echo e($setting->phone); ?>

                    </p>
                </a></div>
            <div class="col-sm-12 col-md-12 col-lg-3 text-center d-flex d-xl-flex flex-row justify-content-center pt-2">
                <a class="text-dark mx-5" href="#">
                    <p class="d-xl-flex align-items-xl-center">&nbsp;<svg xmlns="http://www.w3.org/2000/svg"
                                                                          viewBox="-64 0 512 512" width="1em"
                                                                          height="1em" fill="currentColor" class="mx-2">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path>
                        </svg>
                        <?php echo e(__('lang.address')); ?> : <?php echo e($setting->address->$lang); ?><br></p>
                </a></div>
            <div class="col-sm-12 col-md-12 col-lg-3 text-center d-flex d-xl-flex flex-row justify-content-center pt-2">
                <a class="text-dark" href="mailto: <?php echo e($setting->email); ?>">
                    <p class="d-xl-flex align-items-xl-center"><?php echo e(__('lang.email')); ?> :
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em"
                             fill="currentColor" class="mx2">
                            <!--! Font Awesome Free 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                            <path
                                d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z"></path>
                        </svg>&nbsp;<?php echo e($setting->email); ?><br></p>
                </a></div>
            <div class="col-sm-12 col-md-12 col-lg-3 text-center d-flex d-xl-flex flex-row justify-content-center">
                <div class="pt-2"><a class="link-top px-2" href="#"><i class="fab fa-facebook-f"></i></a><a
                        class="link-top px-2" href="#"><i class="fab fa-instagram"></i></a><a class="link-top px-2"
                                                                                              href="#"><i
                            class="fab fa-google-plus-g"></i></a><a class="link-top px-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a></div>
                <div class="d-flex flex-row justify-content-center align-items-center m-1">
                    <a class="mx-1  text-center link-top <?php if(app()->getLocale()=='ar'): ?> text-success <?php endif; ?>" href="<?php echo e(route('setLang',['lang'=>'ar'])); ?>"><!--<img width="30" src="<?php echo e(asset('public/assets/img/ksa.png')); ?>" alt=""
                                                                                     class="img-fluid">-->AR</a>
                    <a class="mx-1 text-center link-top <?php if(app()->getLocale()=='en'): ?> text-success <?php endif; ?>" href="<?php echo e(route('setLang',['lang'=>'en'])); ?>"><!--<img width="30" src="<?php echo e(asset('public/assets/img/usa.png')); ?>" alt=""
                                                                                        class="img-fluid">-->EN</a>
                    <a class="mx-1  text-center link-top <?php if(app()->getLocale()=='tr'): ?> text-success <?php endif; ?>" href="<?php echo e(route('setLang',['lang'=>'tr'])); ?>"><!--<img width="30" src="<?php echo e(asset('public/assets/img/turk.webp')); ?>" alt=""
                                                                                        class="img-fluid">-->TR</a>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="py-2">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-xl">
            <div class="container">
                <div
                    class="d-xl-flex align-items-center align-content-center justify-content-xl-center px-1 mx-2 border-right">
                    <a class="navbar-brand" href="#" style="background-image: url('<?php echo e(asset('public/assets/img/logo.png')); ?>')" ></a></div>
                <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item px-3"><a class="nav-link nav-link" href="<?php echo e(route('home')); ?>"><?php echo e(__('lang.home')); ?></a></li>
                        <li class="nav-item dropdown px-3"><a class="dropdown-toggle nav-link" aria-expanded="false"
                                                              data-toggle="dropdown" href="#">Our work</a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">__itemOne </a><a
                                    class="dropdown-item" href="#">__itemTwo </a><a class="dropdown-item" href="#">__ItemThree </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown px-3"><a class="dropdown-toggle nav-link" aria-expanded="false"
                                                              data-toggle="dropdown" href="#">Offices</a>
                            <div class="dropdown-menu"><a class="dropdown-item" href="#">__itemOne </a><a
                                    class="dropdown-item" href="#">__itemTwo </a><a class="dropdown-item" href="#">__ItemThree </a>
                            </div>
                        </li>
                        <li class="nav-item px-3"><a class="nav-link" href="#">Archives</a></li>
                        <li class="nav-item px-3"><a class="nav-link" href="#">News</a></li>
                        <li class="nav-item px-3"><a class="nav-link" href="#">About Us</a></li>
                        <li class="nav-item"><a class="nav-link text-uppercase px-4 donate" href="<?php echo e(route('payment')); ?>"><?php echo e(__('lang.donate')); ?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>
<?php echo $__env->yieldContent('content'); ?>

<section class="pt-5">
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center text-uppercase" data-aos="fade-up" data-aos-duration="400">Featured Causes<br>
                </h2>
                <div class="d-flex flex-row justify-content-center align-items-center" data-aos="fade-up"
                     data-aos-duration="600">
                    <div class="divider"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em"
                         fill="currentColor" class="mx-2">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M16 319.1C16 245.9 118.3 89.43 166.9 19.3C179.2 1.585 204.8 1.585 217.1 19.3C265.7 89.43 368 245.9 368 319.1C368 417.2 289.2 496 192 496C94.8 496 16 417.2 16 319.1zM112 319.1C112 311.2 104.8 303.1 96 303.1C87.16 303.1 80 311.2 80 319.1C80 381.9 130.1 432 192 432C200.8 432 208 424.8 208 416C208 407.2 200.8 400 192 400C147.8 400 112 364.2 112 319.1z"></path>
                    </svg>
                    <div class="divider"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="carousel slide" data-ride="carousel" id="carousel-4">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <section class="card-section-imagia" style="color: white;background: rgba(0,0,0,0);">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div data-aos="fade-up" data-aos-duration="900" class="card-container-imagia">
                                    <div class="card-imagia">
                                        <div class="flex-column front-imagia">
                                            <div class="cover-imagia cover-gradient"></div>
                                            <div class="content-imagia">
                                                <h3 class="text-left name-imagia text-uppercase text-dark my-2">Omama
                                                    Sariya Alrefaie<br></h3>
                                                <p class="text-left subtitle-imagia my-4">The good is in my nation until
                                                    the day of judgment <br>Sufraa Alkhayr blessed your efforts.<br></p>
                                                <div class="progres-bar my-2">
                                                    <div class="progres"></div>
                                                </div>
                                                <p class="text-left subtitle-imagia mt-3">100 , 2000 , 15200<span
                                                        class="mx-3 text-danger">75%</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div data-aos="fade-up" data-aos-duration="900" class="card-container-imagia">
                                    <div class="card-imagia">
                                        <div class="flex-column front-imagia">
                                            <div class="cover-imagia"></div>
                                            <div class="content-imagia">
                                                <h3 class="text-left name-imagia text-uppercase text-dark my-2">Omama
                                                    Sariya Alrefaie<br></h3>
                                                <p class="text-left subtitle-imagia my-4">The good is in my nation until
                                                    the day of judgment <br>Sufraa Alkhayr blessed your efforts.<br></p>
                                                <div class="progres-bar my-2">
                                                    <div class="progres"></div>
                                                </div>
                                                <p class="text-left subtitle-imagia mt-3">100 , 2000 , 15200<span
                                                        class="mx-3 text-danger">50%</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div data-aos="fade-up" data-aos-duration="900" class="card-container-imagia">
                                    <div class="card-imagia">
                                        <div class="flex-column front-imagia">
                                            <div class="cover-imagia cover-gradient"></div>
                                            <div class="content-imagia">
                                                <h3 class="text-left name-imagia text-uppercase text-dark my-2">Omama
                                                    Sariya Alrefaie<br></h3>
                                                <p class="text-left subtitle-imagia my-4">The good is in my nation until
                                                    the day of judgment <br>Sufraa Alkhayr blessed your efforts.<br></p>
                                                <div class="progres-bar my-2">
                                                    <div class="progres-1"></div>
                                                </div>
                                                <p class="text-left subtitle-imagia my-3">100 , 2000 , 15200<span
                                                        class="mx-3 text-danger">20%</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="carousel-item">
                <section class="card-section-imagia" style="color: white;background: rgba(0,0,0,0);">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div data-aos="fade-up" data-aos-duration="900" class="card-container-imagia">
                                    <div class="card-imagia">
                                        <div class="flex-column front-imagia">
                                            <div class="cover-imagia cover-gradient"></div>
                                            <div class="content-imagia">
                                                <h3 class="text-left name-imagia text-uppercase text-dark my-2">Omama
                                                    Sariya Alrefaie<br></h3>
                                                <p class="text-left subtitle-imagia my-4">The good is in my nation until
                                                    the day of judgment <br>Sufraa Alkhayr blessed your efforts.<br></p>
                                                <div class="progres-bar my-2">
                                                    <div class="progres"></div>
                                                </div>
                                                <p class="text-left subtitle-imagia mt-3">100 , 2000 , 15200<span
                                                        class="mx-3 text-danger">75%</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div data-aos="fade-up" data-aos-duration="900" class="card-container-imagia">
                                    <div class="card-imagia">
                                        <div class="flex-column front-imagia">
                                            <div class="cover-imagia"></div>
                                            <div class="content-imagia">
                                                <h3 class="text-left name-imagia text-uppercase text-dark my-2">Omama
                                                    Sariya Alrefaie<br></h3>
                                                <p class="text-left subtitle-imagia my-4">The good is in my nation until
                                                    the day of judgment <br>Sufraa Alkhayr blessed your efforts.<br></p>
                                                <div class="progres-bar my-2">
                                                    <div class="progres"></div>
                                                </div>
                                                <p class="text-left subtitle-imagia mt-3">100 , 2000 , 15200<span
                                                        class="mx-3 text-danger">50%</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div data-aos="fade-up" data-aos-duration="900" class="card-container-imagia">
                                    <div class="card-imagia">
                                        <div class="flex-column front-imagia">
                                            <div class="cover-imagia cover-gradient"></div>
                                            <div class="content-imagia">
                                                <h3 class="text-left name-imagia text-uppercase text-dark my-2">Omama
                                                    Sariya Alrefaie<br></h3>
                                                <p class="text-left subtitle-imagia my-4">The good is in my nation until
                                                    the day of judgment <br>Sufraa Alkhayr blessed your efforts.<br></p>
                                                <div class="progres-bar my-2">
                                                    <div class="progres-1"></div>
                                                </div>
                                                <p class="text-left subtitle-imagia my-3">100 , 2000 , 15200<span
                                                        class="mx-3 text-danger">20%</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-4" role="button" data-slide="prev"><span
                    class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a
                class="carousel-control-next" href="#carousel-4" role="button" data-slide="next"><span
                    class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-4" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-4" data-slide-to="1"></li>
        </ol>
    </div>
</section>
<section class="slide-mid">
    <div class="container-fluid">
        <div class="row">
            <div class="col p-0">
                <div class="carousel slide" data-ride="carousel" id="carousel-3">
                    <div class="carousel-inner">
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/222467.jpg"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/222467.jpg"></div>
                        <div class="carousel-item active"><img class="w-100 d-block" src="assets/img/222467.jpg"></div>
                    </div>
                    <div><a class="carousel-control-prev" href="#carousel-3" role="button" data-slide="prev"><i
                                class="fa fa-chevron-left"></i><span class="sr-only">Previous</span></a><a
                            class="carousel-control-next" href="#carousel-3" role="button" data-slide="next"><i
                                class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a></div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-3" data-slide-to="0"></li>
                        <li data-target="#carousel-3" data-slide-to="1"></li>
                        <li data-target="#carousel-3" data-slide-to="2" class="active"></li>
                    </ol>
                </div>
            </div>
            <div class="col">
                <div class="pl-5">
                    <h5 class="text-white text-uppercase">Sponsor This Entire Project<br></h5>
                    <h2 class="text-white text-uppercase my-3">Give Education To 100 Children<br></h2>
                    <div class="divider my-3"></div>
                    <p class="p-descreption my-2 text-uppercase">Integer sit amet augue iaculis, ultricies justo nec,
                        comm taciti sociosqu ad litora torquent<br></p>
                    <p class="p-descreption mt-4">Nunc ullamcorper sollicitudin arcu, ut fermentum magna ultricies quis.
                        Proin aliquet, est ut pellentesque malesuada, <br>purus enim egestas nisl, eget mollis justo
                        lorem facilisis orci. Sed in tristique nulla.<br></p>
                </div>
                <div class="p-5">
                    <div class="d-flex flex-row justify-content-start align-items-center"><a
                            class="btn-learn px-4 py-2 text-uppercase" href="#">lern more</a><span
                            class="text-white mx-3">or</span>
                        <div class="pl-3">
                            <p class="text-white">Email Us At<br></p><a class="text-uppercase text-success" href="#">INFO@SUFARAAALKARE.COM<br></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="Featured-news py-5">
    <div class="container border-bottom">
        <div class="row">
            <div class="col">
                <div class="border-right">
                    <div class="d-flex flex-row justify-content-between Featured-coontaint p-3 mb-4">
                        <div>
                            <h3 class="text-uppercase font-weight-bold">Featured News<br></h3>
                            <div class="divider my-3"></div>
                        </div>
                        <div class="d-flex flex-row justify-content-center align-items-center costomize-control">
                            <button class="carousel-control-prev" type="button" data-target="#carouselExampleSlidesOnly"
                                    data-slide="prev">
                                <div class="text-center div-next p-1" data-slide="prev"><span class="icon-next"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                            height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z"></path>
                                            </svg></span></div>
                            </button>


                            <button class="carousel-control-next" type="button" data-target="#carouselExampleSlidesOnly"
                                    data-slide="next">
                                <div class="text-center div-next p-1"><span class="icon-next"><svg
                                            xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                            height="1em" fill="currentColor">
                                                <!--! Font Awesome Free 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                                <path
                                                    d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path>
                                            </svg></span></div>
                            </button>


                        </div>
                    </div>
                    <!--Carousel Customize-->
                    <div class="d-flex flex-row carousel-test">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="assets/img/222467.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="col-md-6">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim iusto
                                                maiores nesciunt?</p>
                                        </div>
                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="assets/img/222467.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="col-md-6">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim iusto
                                                maiores nesciunt?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="assets/img/222467.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="col-md-6">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim iusto
                                                maiores nesciunt?</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Carousel Customize-->
                <div class="d-flex flex-row justify-content-between align-items-center py-4 px-2">
                    <h6 class="text-uppercase font-weight-bold">Featured News<br></h6>
                    <div class="divider-gray"></div>
                </div>
                <div class="d-flex flex-row align-items-center my-3">
                    <div><img src="assets/img/1.jpg" width="150px"></div>
                    <div class="pl-2">
                        <h6 class="text-uppercase font-weight-bold">Pizza Treat Given to Children</h6>
                        <p>May 7, 2018<br></p>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center my-3">
                    <div><img src="assets/img/1.jpg" width="150px"></div>
                    <div class="pl-2">
                        <h6 class="text-uppercase font-weight-bold">Pizza Treat Given to Children</h6>
                        <p>May 7, 2018<br></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="border-right">
                    <div class="d-flex flex-row justify-content-between Featured-coontaint p-3 mb-4">
                        <div>
                            <h3 class="text-uppercase font-weight-bold">Upcoming Event<br></h3>
                            <div class="divider my-3"></div>
                        </div>
                        <div>
                            <div class="text-center div-face p-1"><a class="btn-face text-uppercase p-1" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-96 0 512 512" width="1em"
                                         height="1em" fill="currentColor" class="mx-2">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path
                                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
                                    </svg>
                                    Face booke page</a></div>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div><img src="assets/img/4.jpg" width="500px"></div>
                    </div>
                </div>
                <div class="d-flex flex-column py-4 px-2">
                    <h6 class="text-uppercase font-weight-bold">Organizing Music Event To Get Good Donation<br></h6>
                    <div class="d-flex flex-row justify-content-start align-items-center">
                        <p class="p2-descreption mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-32 0 512 512" width="1em" height="1em"
                                 fill="currentColor" class="mx-2">
                                <!--! Font Awesome Free 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                <path
                                    d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"></path>
                            </svg>
                            Admin<br></p>
                        <p class="p2-descreption mx-2"><i class="far fa-calendar-alt mx-2"></i>May 7, 2018 at 2:00
                            PM<br></p>
                        <p class="p2-descreption mx-2"><i class="fas fa-map-marker-alt mx-2"></i>Montreal, QC.<br></p>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center my-3">
                    <div></div>
                    <div class="pl-2">
                        <p>Donec varius ultrices purus. Nullam sit amet sapien tortor. Aenean tincidunt inte rdum felis,
                            vel placerat purus porta nec.<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="border-right">
                    <div class="d-flex flex-row justify-content-between Featured-coontaint p-3 mb-4">
                        <div>
                            <h3 class="text-uppercase font-weight-bold">Our Staff<br></h3>
                            <div class="divider my-3"></div>
                        </div>
                        <div class="d-flex flex-row justify-content-center align-items-center">
                            <div class="text-center div-next p-1"><span class="icon-next"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M192 448c-8.188 0-16.38-3.125-22.62-9.375l-160-160c-12.5-12.5-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l137.4 137.4c12.5 12.5 12.5 32.75 0 45.25C208.4 444.9 200.2 448 192 448z"></path>
                                        </svg></span></div>
                            <div class="text-center div-next p-1"><span class="icon-next"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="-128 0 512 512" width="1em"
                                        height="1em" fill="currentColor">
                                            <!--! Font Awesome Free 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                            <path
                                                d="M64 448c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L178.8 256L41.38 118.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160c12.5 12.5 12.5 32.75 0 45.25l-160 160C80.38 444.9 72.19 448 64 448z"></path>
                                        </svg></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex flex-row justify-content-between">
                <div class="d-flex flex-row justify-content-center align-items-center"><img
                        src="assets/img/staff-image-1.jpg"></div>
                <div
                    class="text-center d-flex flex-column justify-content-between align-items-center align-content-center div-desc p-3">
                    <h6 class="text-uppercase font-weight-bold">John Martin<br></h6>
                    <p class="pt-1">Donec varius ultrices purus. ullam sit amet sapien tortor. Aenean it inteum felis,
                        vel placerat nec.<br></p>
                    <div class="divider"></div>
                    <div class="text-center pt-4"><a href="#"><i class="fab fa-twitter mx-2"></i></a><a href="#"><i
                                class="fab fa-facebook-f mx-2"></i></a><a href="#"><i
                                class="fab fa-linkedin-in mx-2"></i></a></div>
                </div>
            </div>
            <div class="col d-flex flex-row justify-content-between">
                <div class="d-flex flex-row justify-content-center align-items-center"><img
                        src="assets/img/staff-image-2.jpg"></div>
                <div
                    class="text-center d-flex flex-column justify-content-between align-items-center align-content-center div-desc p-3">
                    <h6 class="text-uppercase font-weight-bold">John Martin<br></h6>
                    <p class="pt-1">Donec varius ultrices purus. ullam sit amet sapien tortor. Aenean it inteum felis,
                        vel placerat nec.<br></p>
                    <div class="divider"></div>
                    <div class="text-center pt-4"><a href="#"><i class="fab fa-twitter mx-2"></i></a><a href="#"><i
                                class="fab fa-facebook-f mx-2"></i></a><a href="#"><i
                                class="fab fa-linkedin-in mx-2"></i></a></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex flex-row justify-content-between">
                <div
                    class="text-center d-flex flex-column justify-content-between align-items-center align-content-center div-desc p-3">
                    <h6 class="text-uppercase font-weight-bold">John Martin<br></h6>
                    <p class="pt-1">Donec varius ultrices purus. ullam sit amet sapien tortor. Aenean it inteum felis,
                        vel placerat nec.<br></p>
                    <div class="divider"></div>
                    <div class="text-center pt-4"><a href="#"><i class="fab fa-twitter mx-2"></i></a><a href="#"><i
                                class="fab fa-facebook-f mx-2"></i></a><a href="#"><i
                                class="fab fa-linkedin-in mx-2"></i></a></div>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center"><img
                        src="assets/img/staff-image-3.jpg"></div>
            </div>
            <div class="col d-flex flex-row justify-content-between">
                <div
                    class="text-center d-flex flex-column justify-content-between align-items-center align-content-center div-desc p-3">
                    <h6 class="text-uppercase font-weight-bold">John Martin<br></h6>
                    <p class="pt-1">Donec varius ultrices purus. ullam sit amet sapien tortor. Aenean it inteum felis,
                        vel placerat nec.<br></p>
                    <div class="divider"></div>
                    <div class="text-center pt-4"><a href="#"><i class="fab fa-twitter mx-2"></i></a><a href="#"><i
                                class="fab fa-facebook-f mx-2"></i></a><a href="#"><i
                                class="fab fa-linkedin-in mx-2"></i></a></div>
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center"><img
                        src="assets/img/staff-image-4.jpg"></div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container mt-2">
        <div class="row">
            <div class="col-12">
                <h4 class="text-center text-uppercase font-weight-bold" data-aos="fade-up" data-aos-duration="400">What
                    Kids are Saying About Us<br></h4>
                <div class="d-flex flex-row justify-content-center align-items-center" data-aos="fade-up"
                     data-aos-duration="600">
                    <div class="divider"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em"
                         fill="currentColor" class="mx-2">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome  - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path
                            d="M16 319.1C16 245.9 118.3 89.43 166.9 19.3C179.2 1.585 204.8 1.585 217.1 19.3C265.7 89.43 368 245.9 368 319.1C368 417.2 289.2 496 192 496C94.8 496 16 417.2 16 319.1zM112 319.1C112 311.2 104.8 303.1 96 303.1C87.16 303.1 80 311.2 80 319.1C80 381.9 130.1 432 192 432C200.8 432 208 424.8 208 416C208 407.2 200.8 400 192 400C147.8 400 112 364.2 112 319.1z"></path>
                    </svg>
                    <div class="divider"></div>
                </div>
                <p class="text-center text-uppercase p-kid pt-4" data-aos="fade-up" data-aos-duration="400"
                   data-aos-delay="100">Our prime purpose in this life is to help people. <br>And if you can't help them
                    at least don't hurt them.<br></p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="carousel slide" data-ride="carousel" data-interval="10000" id="carousel-t">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="col-9 text-center mx-auto testimonial-content">
                    <p class="text-center"><em>"Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi
                            gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum
                            reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae.&nbsp;Lorem
                            ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te
                            eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te
                            convenire facilisis. Eu vel noster scaevola molestiae."</em><br></p>
                    <p class="signature">John D.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-9 text-center mx-auto testimonial-content">
                    <p class="text-center"><em>"Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi
                            gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum
                            reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae.&nbsp;Lorem
                            ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te
                            eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te
                            convenire facilisis. Eu vel noster scaevola molestiae."</em><br></p>
                    <p class="signature">John D.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-9 text-center mx-auto testimonial-content">
                    <p class="text-center"><em>"Lorem ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi
                            gubergren cotidieque te eam. Sed ceteros salutatus definiebas eu, ut modo argumentum
                            reprimique quo. Per te convenire facilisis. Eu vel noster scaevola molestiae.&nbsp;Lorem
                            ipsum dolor sit amet, nec cu omnium ponderum instructior, eligendi gubergren cotidieque te
                            eam. Sed ceteros salutatus definiebas eu, ut modo argumentum reprimique quo. Per te
                            convenire facilisis. Eu vel noster scaevola molestiae."</em><br></p>
                    <p class="signature">John D.</p>
                </div>
            </div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-t" role="button" data-slide="prev"><i
                    class="icon ion-android-arrow-dropleft-circle d-flex d-lg-flex justify-content-center align-items-center"></i><span
                    class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-t" role="button"
                                                          data-slide="next"><i
                    class="icon ion-android-arrow-dropright-circle d-flex d-lg-flex justify-content-center align-items-center"></i><span
                    class="sr-only">Next</span></a></div>
        <ol class="carousel-indicators">
            <li data-target="#carousel-t" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-t" data-slide-to="1"></li>
            <li data-target="#carousel-t" data-slide-to="2"></li>
        </ol>
    </div>
</section>
<section class="pt-5">
    <footer class="text-white bg-dark">
        <div class="container py-4 py-lg-5">
            <div class="row justify-content-center">
                <div class="col-sm-4 col-md-3 text-center text-lg-left d-flex flex-column item">
                    <h3 class="font-weight-bold" style="font-size: 1rem;">Services</h3>
                    <ul class="list-unstyled">
                        <li><a class="text-white" href="#">Web design</a></li>
                        <li><a class="text-white" href="#">Development</a></li>
                        <li><a class="text-white" href="#">Hosting</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-left d-flex flex-column item">
                    <h3 class="font-weight-bold" style="font-size: 1rem;">About</h3>
                    <ul class="list-unstyled">
                        <li><a class="text-white" href="#">Company</a></li>
                        <li><a class="text-white" href="#">Team</a></li>
                        <li><a class="text-white" href="#">Legacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4 col-md-3 text-center text-lg-left d-flex flex-column item">
                    <h3 class="font-weight-bold" style="font-size: 1rem;">Careers</h3>
                    <ul class="list-unstyled">
                        <li><a class="text-white" href="#">Job openings</a></li>
                        <li><a class="text-white" href="#">Employee success</a></li>
                        <li><a class="text-white" href="#">Benefits</a></li>
                    </ul>
                </div>
                <div
                    class="col-lg-3 text-center text-lg-left d-flex flex-column align-items-center order-first align-items-lg-start order-lg-last item social">
                    <div class="font-weight-bold d-flex align-items-center mb-2"><a href="#"><img
                                src="assets/img/sufara--logo.svg" width="50%"></a></div>
                    <p class="text-white-50 copyright">Sem eleifend donec molestie, integer quisque orci aliquam.</p>
                </div>
            </div>
            <hr>
            <div class="d-flex justify-content-between pt-3" style="background: var(--bs-gray-100);">
                <p class="mb-0">Copyright ?? 2022 sufraaalkhayr</p>
                <ul class="list-inline text-white-50 mb-0">
                    <li class="list-inline-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                             viewBox="0 0 16 16" class="bi bi-facebook">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                        </svg>
                    </li>
                    <li class="list-inline-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                             viewBox="0 0 16 16" class="bi bi-twitter">
                            <path
                                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                        </svg>
                    </li>
                    <li class="list-inline-item">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                             viewBox="0 0 16 16" class="bi bi-instagram">
                            <path
                                d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
                        </svg>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</section>
<script src="<?php echo e(asset('theme1/assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme1/assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('theme1/ssets/js/bs-init.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="<?php echo e(asset('theme1/ssets/js/--mp---Testimonials-Slider.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
<script src="https://use.fontawesome.com/1744f3f671.js"></script>
</body>

</html>
<?php /**PATH E:\www\sof\resources\views/theme1/layouts/master.blade.php ENDPATH**/ ?>