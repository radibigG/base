<!DOCTYPE html>
<html lang="en">
<head><base href="">
    <title> AVRION RISK </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/css/landing.css" rel="stylesheet" type="text/css" />
</head>
<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" data-bs-offset="200" class="bg-white position-relative">
    <div class="d-flex flex-column flex-root">
        <div class="mb-0" id="home">
            @include('landing/components/header')
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="py-10 py-lg-20">
                            <h1 class="text-black fw-bold mb-5">
                                Sign Into Your <br> Account
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 150px;">
                    <div class="col">
                        <input type="text" class="form-control form-control-solid mb-5" placeholder="E-mail" style="height: 55px;"/>
                        <input type="text" class="form-control form-control-solid mb-5" placeholder="Password" style="height: 55px;"/>
                        <div class="row">
                            <div class="col">
                                <div class="form-check form-check-custom form-check-solid mb-10">
                                    <input class="form-check-input" type="checkbox" value="" id="rememberMe"/>
                                    <label class="form-check-label" for="rememberMe"> Remember me </label>
                                </div>
                            </div>
                            <div class="col">
                                <a href="/forgotten_password" class="text-black float-end"> Forgot password? </a>
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-lg-4 me-auto">
                            <button type="button" class="btn btn-dark btn-lg"> Login </button>
                        </div>
                        <div class="row mt-15">
                            <div class="d-flex justify-content-center align-items-center">
                                <a href="/register" class="text-black text-center" style="font-size: 17px; font-weight: 500;"> Create new account </a>
                            </div>
                        </div>
                    </div>
                    <div class="col d-none d-sm-block">
                        <div class="d-flex justify-content-end">
                            <img src="/images/AVRION_RISK_LOGIN.svg" width="250" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="landing-dark-bg">
            <div class="container">
                <div class="row py-10 py-lg-20">
                    <div class="col-lg-6 pe-lg-16 mb-10 mb-lg-0">
                        <img alt="Logo" src="/images/AVRION_RISK_logo.png" class="logo-default h-25px h-lg-30px" />
                        <p class="mt-5" style="line-height: 20px!important;"> AVRION Risk is part of the AVRIONE Group of companies engaged in financial technology for digital services. </p>
                    </div>
                    <div class="col-lg-6 ps-lg-16">
                        <div class="d-flex justify-content-end">
                            <ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                                <li class="menu-item">
                                    <a href="#" target="_blank" class="menu-link px-2"> Portfolio </a>
                                </li>
                                <li class="menu-item mx-5">
                                    <a href="#" target="_blank" class="menu-link px-2"> About </a>
                                </li>
                                <li class="menu-item mx-5">
                                    <a href="#" target="_blank" class="menu-link px-2"> About </a>
                                </li>
                                <li class="menu-item mx-5">
                                    <a href="#" target="_blank" class="menu-link px-2"> Contact </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <ul class="footer-socials menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                        <li class="menu-item mx-5">
                            <a href="#" target="_blank" class="menu-link px-2"> Twitter </a>
                        </li>
                        <li class="menu-item mx-5">
                            <a href="#" target="_blank" class="menu-link px-2"> LinkedIn </a>
                        </li>
                        <li class="menu-item mx-5">
                            <a href="#" target="_blank" class="menu-link px-2"> Youtube </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container">
                <div class="landing-dark-separator mt-5"></div>
                <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                    <div class="d-flex align-items-center order-2 order-md-1">
                        <span class="mx-5 fs-6 fw-bold text-black pt-1"> Copyright © 2022 AVRION. All rights reserved </span>
                    </div>
                    <ul class="menu menu-gray-600 menu-hover-primary fw-bold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                        <li class="menu-item">
                            <a href="" target="_blank" class="menu-link px-2"> Privacy Policy </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <span class="svg-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                    <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
                </svg>
            </span>
        </div>
    </div>
    <script>var hostUrl = "assets/";</script>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
    <script src="assets/plugins/custom/typedjs/typedjs.bundle.js"></script>
    <script src="assets/js/custom/landing.js"></script>
    <script src="assets/js/custom/pages/pricing/general.js"></script>
</body>
</html>
