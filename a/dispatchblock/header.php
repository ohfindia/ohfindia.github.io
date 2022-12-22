<?php
session_start();
?>
<html>
    <head>
        <title>Home | Dispatch Block</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https:////cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="stylesheet" href="./assets/css/styles.css" type="text/css">

        
    </head>
    <body>
        <div class="body-wrapper">
            <!-- ======= Top Social ======= -->
            <section class="d-flex align-items-center" id="topbar">
                <div class="container d-flex justify-content-between">
                    <div class="contact-info d-flex align-items-center">
                        <i class="fa fa-envelope d-flex align-items-center"><a
                                href="mailto:contact@example.com">contact@example.com</a></i>
                        <i class="fa fa-phone d-flex align-items-center ms-4"><a href="tel:+155895548855">+1 5589 55488 55</a></i>
                    </div>
                    <div class="social-links d-none d-md-flex align-items-center">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></i></a>
                    </div>
                </div>
            </section>
            
            <!-- ======= Navbar ======= -->
            <header id="header" class="d-flex align-items-center">
                <div class="container d-flex align-items-center justify-content-between">
                    <h1 class="logo"><a href="/">Dispatch Block<span>.</span></a></h1>
            
                    <nav id="navbar" class="navbar">
                        <ul>
                            <li class="d-lg-none"><div class="d-flex align-items-center justify-content-between border-bottom mobile-nav-name">
                                Dispatch Block
                                <button type="button" id="mob-nav-close" class="btn-close" aria-label="Close"></button>
                            </div></li>
                            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                            <li><a class="nav-link scrollto" href="#team">Team</a></li>
                            <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
                            <li><a class="nav-link scrollto" href="#technology">Technology Stack</a></li>
                            <li><a class="nav-link scrollto" href="#learn-more">Contact Us</a></li>
                        </ul>
                        <i class="fa fa-list mobile-nav-toggle"></i>
                    </nav>
                </div>
            </header>