@extends('layouts.settingspage')

@section('title', 'Settings Page')

@section('main-content')
<div style="background:#ffffff;" class="col-12 border kc-nav-box">
        <div class="row">
            <nav class="navbar col-12 navbar-expand-lg navbar-light  border-bottom kc-nav-box">
                <a class="navbar-brand" href="#">
                    <i class="fa fa-chevron-left class=" mr-3"></i>
                    DASHBOARD</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="row  collapse navbar-collapse mx-0 px-0 v-nav-index" id="navbarSupportedContent">
                    <form class="form-inline  search  col-lg-4 col-sm-12">
                        <input class="form-control mr-sm-2 col-12 " type="search" placeholder="Search"
                            aria-label="Search">
                    </form>
                    <ul class="navbar-nav ml-0 kc-unlist-item">
                        <li class="nav-item active border-right">
                            <a class="nav-link mt-2 mr-3" href="#">
                                <img src="https://lancer-app.000webhostapp.com/images/svg/help.svg" height="25"
                                    width="auto">
                            </a>
                        </li>
                        <li class="nav-item border-right">
                            <a class="nav-link mt-2 mx-3" href="#">
                                <img src="https://lancer-app.000webhostapp.com/images/svg/alarm-clock.svg" height="25"
                                    width="auto">
                            </a>
                        </li>
                        <li class="nav-item border-right">
                            <a class="nav-link mt-2 mx-3" href="#">
                                <img src="https://lancer-app.000webhostapp.com/images/svg/notification.svg" height="25"
                                    width="auto">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">
                                <div class="kc-a-u d-flex align-items-center justify-content-center">
                                    <h3 style="color:black;" class="text-center mt-2">AU</h3>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="d-lg-none" style="width:100%">
                        <div class="d-flex flex-column align-items-center	">
                            <a href="settings-profile.html" class="nav-option py-3 active-nav">Profile Settings</a>
                            <a href="settings-email.html" class="nav-option py-3">Email Notifications</a>
                            <a href="" class="nav-option py-3">Subscription</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row mt-5 no-gutters">
            <!-- <h3 class="form_title">Profile Setting</h3> -->
            <div class="col-md-4 d-none d-md-block">
                <div class="container">
                    <div class="side-nav">
                        <div class="logo-con">
                            <p class="logo text-center py-2">Lan<span>c</span>ers</p>
                        </div>
                        <div class="d-flex flex-column align-items-center">
                            <div class="d-flex flex-column">
                                <a href="" class="nav-option active-nav py-3">Profile Settings</a>
                                <a href="" class="nav-option  py-3">Email Notifications</a>
                                <a href="" class="nav-option py-3">Subscription</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js "></script>

        @endsection

		@section('styles')
		<style>
        body {
            font-family: 'Roboto', sans-serif;
            font-weight: 200;
            font-size: 14px;
        }
        h1 {
            font-family: 'Open Sans', sans-serif;
            font-weight: Bold;
            font-size: 24px;
        }
        h3 {
            font-family: 'Open Sans', sans-serif;
            font-weight: bold;
            font-size: 18px;
        }
        .side-nav {
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            padding-bottom: 200px;
        }
        .logo-con {
            background-color: #000000;
        }
        .logo {
            font-family: "Pacifico", cursive;
            color: #ffffff;
            font-size: 36px;
        }
        .logo span {
            color: #0abab5;
        }
        .nav-option {
            font-family: Open Sans;
            font-style: normal;
            font-weight: bold;
            font-size: 18px;
            color: #4f4f4f;
            text-align: left;
        }
        .active-nav {
            color: #0abab5;
        }
        a:hover {
            text-decoration: none;
            color: #0abab5;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .navbar-brand i {
            padding-right: 15px;
        }
        .search {
            margin-left: 300px;
            margin-right: 200px;
        }
        .kc-nav-box {
            height: 80px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        .kc-a-u {
            height: 50px;
            width: 50px;
            border: 1px solid black;
            border-radius: 50%;
        }
        @media only screen and (max-width: 1360px) {
            .search {
                margin-left: 100px;
                margin-right: 100px;
            }
        }
        @media only screen and (max-width: 1024px) {
            .kc-a-u {
                height: 50px;
                width: 50px;
                border: 1px solid black;
                border-radius: 50%;
            }
            .search {
                margin-left: 0px;
                margin-right: 0px;
            }
        }
        @media only screen and (max-width: 999px) {
            .v-nav-index {
                z-index: 5;
                border: 1px solid #c4c4c4;
                background-color: #ffffff;
            }
            form {
                height: 100%;
                min-height: 100%;
            }
            .kc-unlist-item {
                justify-content: center;
            }
        }
        @media only screen and (max-width: 768px) {
            .kc-unlist-item {
                flex-direction: row;
                width: 90%;
                margin: 0 5% !important;
            }
        }
        @media only screen and (max-width: 768px) {
            .kc-a-u {
                height: 50px;
                width: 50px;
                border: 1px solid black;
                border-radius: 50%;
                margin-left: 2vh;
            }
        }
        @media only screen and (max-width: 414px) {
            .kc-a-u {
                height: 50px;
                width: 50px;
                border: 1px solid black;
                border-radius: 50%;
                margin-left: 2vh;
            }
        }
        @media only screen and (max-width: 375px) {
            .kc-unlist-item {
                flex-direction: row;
            }
        }
        @media only screen and (max-width: 375px) {
            .kc-a-u {
                height: 50px;
                width: 50px;
                border: 1px solid black;
                border-radius: 50%;
                margin-left: 2vh;
            }
        }
        @media only screen and (max-width: 360px) {
            .kc-unlist-item {
                flex-direction: row;
            }
        }
        @media only screen and (max-width: 360px) {
            .kc-a-u {
                height: 50px;
                width: 50px;
                border: 1px solid black;
                border-radius: 50%;
                margin-left: 2vh;
            }
        }
        @media only screen and (max-width: 320px) {
            .kc-a-u {
                height: 50px;
                width: 50px;
                border: 1px solid black;
                border-radius: 50%;
                margin-left: 2vh;
            }
        }
    </style>
@endsection