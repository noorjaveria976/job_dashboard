<html lang="en" class="ltr" dir="ltr">

<head>
    <meta http-equiv="origin-trial" content="A7vZI3v+Gz7JfuRolKNM4Aff6zaGuT7X0mf3wtoZTnKv6497cVMnhy03KDqX7kBz/q/iidW7srW31oQbBt4VhgoAAACUeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGUuY29tOjQ0MyIsImZlYXR1cmUiOiJEaXNhYmxlVGhpcmRQYXJ0eVN0b3JhZ2VQYXJ0aXRpb25pbmczIiwiZXhwaXJ5IjoxNzU3OTgwODAwLCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
    <!-- <style type="text/css">
        .swal-icon--error {
            border-color: #f27474;
            -webkit-animation: animateErrorIcon .5s;
            animation: animateErrorIcon .5s
        }

        .swal-icon--error__x-mark {
            position: relative;
            display: block;
            -webkit-animation: animateXMark .5s;
            animation: animateXMark .5s
        }

        .swal-icon--error__line {
            position: absolute;
            height: 5px;
            width: 47px;
            background-color: #f27474;
            display: block;
            top: 37px;
            border-radius: 2px
        }

        .swal-icon--error__line--left {
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            left: 17px
        }

        .swal-icon--error__line--right {
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            right: 16px
        }

        @-webkit-keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @keyframes animateErrorIcon {
            0% {
                -webkit-transform: rotateX(100deg);
                transform: rotateX(100deg);
                opacity: 0
            }

            to {
                -webkit-transform: rotateX(0deg);
                transform: rotateX(0deg);
                opacity: 1
            }
        }

        @-webkit-keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        @keyframes animateXMark {
            0% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            50% {
                -webkit-transform: scale(.4);
                transform: scale(.4);
                margin-top: 26px;
                opacity: 0
            }

            80% {
                -webkit-transform: scale(1.15);
                transform: scale(1.15);
                margin-top: -6px
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1);
                margin-top: 0;
                opacity: 1
            }
        }

        .swal-icon--warning {
            border-color: #f8bb86;
            -webkit-animation: pulseWarning .75s infinite alternate;
            animation: pulseWarning .75s infinite alternate
        }

        .swal-icon--warning__body {
            width: 5px;
            height: 47px;
            top: 10px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--warning__body,
        .swal-icon--warning__dot {
            position: absolute;
            left: 50%;
            background-color: #f8bb86
        }

        .swal-icon--warning__dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -4px;
            bottom: -11px
        }

        @-webkit-keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }

            to {
                border-color: #f8bb86
            }
        }

        @keyframes pulseWarning {
            0% {
                border-color: #f8d486
            }

            to {
                border-color: #f8bb86
            }
        }

        .swal-icon--success {
            border-color: #a5dc86
        }

        .swal-icon--success:after,
        .swal-icon--success:before {
            content: "";
            border-radius: 50%;
            position: absolute;
            width: 60px;
            height: 120px;
            background: #fff;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg)
        }

        .swal-icon--success:before {
            border-radius: 120px 0 0 120px;
            top: -7px;
            left: -33px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 60px 60px;
            transform-origin: 60px 60px
        }

        .swal-icon--success:after {
            border-radius: 0 120px 120px 0;
            top: -11px;
            left: 30px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-transform-origin: 0 60px;
            transform-origin: 0 60px;
            -webkit-animation: rotatePlaceholder 4.25s ease-in;
            animation: rotatePlaceholder 4.25s ease-in
        }

        .swal-icon--success__ring {
            width: 80px;
            height: 80px;
            border: 4px solid hsla(98, 55%, 69%, .2);
            border-radius: 50%;
            box-sizing: content-box;
            position: absolute;
            left: -4px;
            top: -4px;
            z-index: 2
        }

        .swal-icon--success__hide-corners {
            width: 5px;
            height: 90px;
            background-color: #fff;
            padding: 1px;
            position: absolute;
            left: 28px;
            top: 8px;
            z-index: 1;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg)
        }

        .swal-icon--success__line {
            height: 5px;
            background-color: #a5dc86;
            display: block;
            border-radius: 2px;
            position: absolute;
            z-index: 2
        }

        .swal-icon--success__line--tip {
            width: 25px;
            left: 14px;
            top: 46px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
            -webkit-animation: animateSuccessTip .75s;
            animation: animateSuccessTip .75s
        }

        .swal-icon--success__line--long {
            width: 47px;
            right: 8px;
            top: 38px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
            -webkit-animation: animateSuccessLong .75s;
            animation: animateSuccessLong .75s
        }

        @-webkit-keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @keyframes rotatePlaceholder {
            0% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            5% {
                -webkit-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            12% {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }

            to {
                -webkit-transform: rotate(-405deg);
                transform: rotate(-405deg)
            }
        }

        @-webkit-keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }

            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @keyframes animateSuccessTip {
            0% {
                width: 0;
                left: 1px;
                top: 19px
            }

            54% {
                width: 0;
                left: 1px;
                top: 19px
            }

            70% {
                width: 50px;
                left: -8px;
                top: 37px
            }

            84% {
                width: 17px;
                left: 21px;
                top: 48px
            }

            to {
                width: 25px;
                left: 14px;
                top: 45px
            }
        }

        @-webkit-keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px
            }

            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        @keyframes animateSuccessLong {
            0% {
                width: 0;
                right: 46px;
                top: 54px
            }

            65% {
                width: 0;
                right: 46px;
                top: 54px
            }

            84% {
                width: 55px;
                right: 0;
                top: 35px
            }

            to {
                width: 47px;
                right: 8px;
                top: 38px
            }
        }

        .swal-icon--info {
            border-color: #c9dae1
        }

        .swal-icon--info:before {
            width: 5px;
            height: 29px;
            bottom: 17px;
            border-radius: 2px;
            margin-left: -2px
        }

        .swal-icon--info:after,
        .swal-icon--info:before {
            content: "";
            position: absolute;
            left: 50%;
            background-color: #c9dae1
        }

        .swal-icon--info:after {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            margin-left: -3px;
            top: 19px
        }

        .swal-icon {
            width: 80px;
            height: 80px;
            border-width: 4px;
            border-style: solid;
            border-radius: 50%;
            padding: 0;
            position: relative;
            box-sizing: content-box;
            margin: 20px auto
        }

        .swal-icon:first-child {
            margin-top: 32px
        }

        .swal-icon--custom {
            width: auto;
            height: auto;
            max-width: 100%;
            border: none;
            border-radius: 0
        }

        .swal-icon img {
            max-width: 100%;
            max-height: 100%
        }

        .swal-title {
            color: rgba(0, 0, 0, .65);
            font-weight: 600;
            text-transform: none;
            position: relative;
            display: block;
            padding: 13px 16px;
            font-size: 27px;
            line-height: normal;
            text-align: center;
            margin-bottom: 0
        }

        .swal-title:first-child {
            margin-top: 26px
        }

        .swal-title:not(:first-child) {
            padding-bottom: 0
        }

        .swal-title:not(:last-child) {
            margin-bottom: 13px
        }

        .swal-text {
            font-size: 16px;
            position: relative;
            float: none;
            line-height: normal;
            vertical-align: top;
            text-align: left;
            display: inline-block;
            margin: 0;
            padding: 0 10px;
            font-weight: 400;
            color: rgba(0, 0, 0, .64);
            max-width: calc(100% - 20px);
            overflow-wrap: break-word;
            box-sizing: border-box
        }

        .swal-text:first-child {
            margin-top: 45px
        }

        .swal-text:last-child {
            margin-bottom: 45px
        }

        .swal-footer {
            text-align: right;
            padding-top: 13px;
            margin-top: 13px;
            padding: 13px 16px;
            border-radius: inherit;
            border-top-left-radius: 0;
            border-top-right-radius: 0
        }

        .swal-button-container {
            margin: 5px;
            display: inline-block;
            position: relative
        }

        .swal-button {
            background-color: #7cd1f9;
            color: #fff;
            border: none;
            box-shadow: none;
            border-radius: 5px;
            font-weight: 600;
            font-size: 14px;
            padding: 10px 24px;
            margin: 0;
            cursor: pointer
        }

        .swal-button:not([disabled]):hover {
            background-color: #78cbf2
        }

        .swal-button:active {
            background-color: #70bce0
        }

        .swal-button:focus {
            outline: none;
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(43, 114, 165, .29)
        }

        .swal-button[disabled] {
            opacity: .5;
            cursor: default
        }

        .swal-button::-moz-focus-inner {
            border: 0
        }

        .swal-button--cancel {
            color: #555;
            background-color: #efefef
        }

        .swal-button--cancel:not([disabled]):hover {
            background-color: #e8e8e8
        }

        .swal-button--cancel:active {
            background-color: #d7d7d7
        }

        .swal-button--cancel:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(116, 136, 150, .29)
        }

        .swal-button--danger {
            background-color: #e64942
        }

        .swal-button--danger:not([disabled]):hover {
            background-color: #df4740
        }

        .swal-button--danger:active {
            background-color: #cf423b
        }

        .swal-button--danger:focus {
            box-shadow: 0 0 0 1px #fff, 0 0 0 3px rgba(165, 43, 43, .29)
        }

        .swal-content {
            padding: 0 20px;
            margin-top: 20px;
            font-size: medium
        }

        .swal-content:last-child {
            margin-bottom: 20px
        }

        .swal-content__input,
        .swal-content__textarea {
            -webkit-appearance: none;
            background-color: #fff;
            border: none;
            font-size: 14px;
            display: block;
            box-sizing: border-box;
            width: 100%;
            border: 1px solid rgba(0, 0, 0, .14);
            padding: 10px 13px;
            border-radius: 2px;
            transition: border-color .2s
        }

        .swal-content__input:focus,
        .swal-content__textarea:focus {
            outline: none;
            border-color: #6db8ff
        }

        .swal-content__textarea {
            resize: vertical
        }

        .swal-button--loading {
            color: transparent
        }

        .swal-button--loading~.swal-button__loader {
            opacity: 1
        }

        .swal-button__loader {
            position: absolute;
            height: auto;
            width: 43px;
            z-index: 2;
            left: 50%;
            top: 50%;
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            text-align: center;
            pointer-events: none;
            opacity: 0
        }

        .swal-button__loader div {
            display: inline-block;
            float: none;
            vertical-align: baseline;
            width: 9px;
            height: 9px;
            padding: 0;
            border: none;
            margin: 2px;
            opacity: .4;
            border-radius: 7px;
            background-color: hsla(0, 0%, 100%, .9);
            transition: background .2s;
            -webkit-animation: swal-loading-anim 1s infinite;
            animation: swal-loading-anim 1s infinite
        }

        .swal-button__loader div:nth-child(3n+2) {
            -webkit-animation-delay: .15s;
            animation-delay: .15s
        }

        .swal-button__loader div:nth-child(3n+3) {
            -webkit-animation-delay: .3s;
            animation-delay: .3s
        }

        @-webkit-keyframes swal-loading-anim {
            0% {
                opacity: .4
            }

            20% {
                opacity: .4
            }

            50% {
                opacity: 1
            }

            to {
                opacity: .4
            }
        }

        @keyframes swal-loading-anim {
            0% {
                opacity: .4
            }

            20% {
                opacity: .4
            }

            50% {
                opacity: 1
            }

            to {
                opacity: .4
            }
        }

        .swal-overlay {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            text-align: center;
            font-size: 0;
            overflow-y: auto;
            background-color: rgba(0, 0, 0, .4);
            z-index: 10000;
            pointer-events: none;
            opacity: 0;
            transition: opacity .3s
        }

        .swal-overlay:before {
            content: " ";
            display: inline-block;
            vertical-align: middle;
            height: 100%
        }

        .swal-overlay--show-modal {
            opacity: 1;
            pointer-events: auto
        }

        .swal-overlay--show-modal .swal-modal {
            opacity: 1;
            pointer-events: auto;
            box-sizing: border-box;
            -webkit-animation: showSweetAlert .3s;
            animation: showSweetAlert .3s;
            will-change: transform
        }

        .swal-modal {
            width: 478px;
            opacity: 0;
            pointer-events: none;
            background-color: #fff;
            text-align: center;
            border-radius: 5px;
            position: static;
            margin: 20px auto;
            display: inline-block;
            vertical-align: middle;
            -webkit-transform: scale(1);
            transform: scale(1);
            -webkit-transform-origin: 50% 50%;
            transform-origin: 50% 50%;
            z-index: 10001;
            transition: opacity .2s, -webkit-transform .3s;
            transition: transform .3s, opacity .2s;
            transition: transform .3s, opacity .2s, -webkit-transform .3s
        }

        @media (max-width:500px) {
            .swal-modal {
                width: calc(100% - 20px)
            }
        }

        @-webkit-keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }

        @keyframes showSweetAlert {
            0% {
                -webkit-transform: scale(1);
                transform: scale(1)
            }

            1% {
                -webkit-transform: scale(.5);
                transform: scale(.5)
            }

            45% {
                -webkit-transform: scale(1.05);
                transform: scale(1.05)
            }

            80% {
                -webkit-transform: scale(.95);
                transform: scale(.95)
            }

            to {
                -webkit-transform: scale(1);
                transform: scale(1)
            }
        }
    </style> -->

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jobs In United States of America</title>

    <meta name="Description" content="Find best Jobs in United States of America, jobs listings and job opportunities on Jobs Portal. Browse more than 100K jobs in United States of America and apply for free! Jobs Portal is USA's leading job website where more than 52K top companies are posting jobs">

    <meta name="Keywords" content="Jobs in USA, Jobs uae, Jobs, Careers, Recruitment, Employment, Hiring, Banking, CVs, Career, Finance, IT, Marketing, Online Jobs, Opportunity,usa, Resume, Work, naukri, rizq, Rozi">

    <meta name="robots" content="ALL, FOLLOW,INDEX">
    <meta name="author" content="JobPortal.PK">

    <!-- Fav Icon -->
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
    <!-- <link rel="shortcut icon" href="https://www.sharjeelanjum.com/demos/jobsportal-update/favicon.ico"> -->

    <!-- Owl carousel -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <!-- <link href="https://www.sharjeelanjum.com/demos/jobsportal-update/css/owl.carousel.css" rel="stylesheet"> -->
    <!-- <link href="https://www.sharjeelanjum.com/demos/jobsportal-update/css/jquery-ui.min.css" rel="stylesheet"> -->

    <!-- Slider -->
    <!-- <link href="https://www.sharjeelanjum.com/demos/jobsportal-update/js/revolution-slider/css/settings.css" rel="stylesheet"> -->

    <!-- Bootstrap -->
    <!-- bootstrap css cdn link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link href="https://www.sharjeelanjum.com/demos/jobsportal-update/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    <!-- <link href="https://www.sharjeelanjum.com/demos/jobsportal-update/css/all.min.css" rel="stylesheet"> -->

    <!-- Custom Style -->
    <link href="assets/css/main.css" rel="stylesheet">
    <!-- <link href="https://www.sharjeelanjum.com/demos/jobsportal-update/css/main.css" rel="stylesheet"> -->


    <!-- <link href="https://www.sharjeelanjum.com/demos/jobsportal-update/admin_assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"> -->

    <!-- <link href="https://www.sharjeelanjum.com/demos/jobsportal-update/admin_assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css"> -->

    <!-- <link href="https://www.sharjeelanjum.com/demos/jobsportal-update/admin_assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css"> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

          <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/html5shiv.min.js"></script>

          <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/respond.min.js"></script>

        <![endif]-->










</head>



<body>

    <!-- Header start -->
    <div class="header" id="siteheader">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 col-md-12 col-12"> <a href="#" class="d-flex align-item-center"><img src="./assets/img/logo-dark.png" alt="JOBS PORTAL" class=" w-75"></a>
                    <div class="navbar-header navbar-light">
                        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nav-main" aria-controls="nav-main" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i></button>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-10 col-md-12 col-12">

                    <!-- Nav start -->
                    <nav class="navbar navbar-expand-lg navbar-light">

                        <div class="navbar-collapse collapse" id="nav-main">
                            <button class="close-toggler" type="button" data-toggle="offcanvas"> <span><i class="fas fa-times-circle" aria-hidden="true"></i></span> </button>

                            <ul class="navbar-nav">
                                <li class="nav-item active"><a href="#" class="nav-link">Home</a> </li>
                                <li class="nav-item ">
                                    <a href="" class="nav-link">Search Talent</a>
                                </li>
                                <li class="nav-item ">
                                    <a href="" class="nav-link">Companies</a>
                                </li>
                                <li class="nav-item "><a href="" class="nav-link">Blog</a> </li>
                                <li class="nav-item "><a href="" class="nav-link">Contact Us</a> </li>
                                <li class="nav-item "><a href="login.php" class="nav-link">Login </a> </li>
                                <li class="nav-item register"><a href="auth-register.html" class="nav-link register">Register</a> </li>
                                <li class="nav-item dropdown userbtn"><a href=""><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/multimedia-design-1614272292-782.jpg" alt="Multimedia Design" title="Multimedia Design"></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a> </li>
                                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> Company Profile</a></li>
                                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-desktop" aria-hidden="true"></i> Post Job</a></li>
                                        <li class="nav-item"><a href="" class="nav-link"><i class="fa fa-envelope" aria-hidden="true"></i> Company Messages</a></li>
                                        <li class="nav-item"><a href="logout.php" onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a> </li>
                                        <form id="logout-form-header1" action="logout" method="POST" style="display: none;">
                                            <input type="hidden" name="_token" value="dWQSThWOrTMy01T95xVXyfir5JdgLkzNqN6fLUtu" autocomplete="off">
                                        </form>
                                    </ul>
                                </li>


                                <!-- <li class="dropdown userbtn"><a href="/jobsportal-update"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/images/lang.png" alt="Change Language" class="userimg"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:;" onclick="event.preventDefault(); document.getElementById('locale-form-ar').submit();" class="nav-link">عربى</a>
                                            <form id="locale-form-ar" action="/set-locale" method="POST" style="display: none;">
                                                <input type="hidden" name="_token" value="dWQSThWOrTMy01T95xVXyfir5JdgLkzNqN6fLUtu" autocomplete="off">
                                                <input type="hidden" name="locale" value="ar">
                                                <input type="hidden" name="return_url" value="">
                                                <input type="hidden" name="is_rtl" value="1">
                                            </form>
                                        </li>
                                        <li><a href="javascript:;" onclick="event.preventDefault(); document.getElementById('locale-form-en').submit();" class="nav-link">English</a>
                                            <form id="locale-form-en" action="/set-locale" method="POST" style="display: none;">
                                                <input type="hidden" name="_token" value="dWQSThWOrTMy01T95xVXyfir5JdgLkzNqN6fLUtu" autocomplete="off">
                                                <input type="hidden" name="locale" value="en">
                                                <input type="hidden" name="return_url" value="/jobsportal-update">
                                                <input type="hidden" name="is_rtl" value="0">
                                            </form>
                                        </li>
                                        <li><a href="javascript:;" onclick="event.preventDefault(); document.getElementById('locale-form-hi').submit();" class="nav-link">Hindi</a>
                                            <form id="locale-form-hi" action="/set-locale" method="POST" style="display: none;">
                                                <input type="hidden" name="_token" value="dWQSThWOrTMy01T95xVXyfir5JdgLkzNqN6fLUtu" autocomplete="off">
                                                <input type="hidden" name="locale" value="hi">
                                                <input type="hidden" name="return_url" value="/jobsportal-update">
                                                <input type="hidden" name="is_rtl" value="0">
                                            </form>
                                        </li>
                                        <li><a href="javascript:;" onclick="event.preventDefault(); document.getElementById('locale-form-es').submit();" class="nav-link">Español</a>
                                            <form id="locale-form-es" action="/set-locale" method="POST" style="display: none;">
                                                <input type="hidden" name="_token" value="dWQSThWOrTMy01T95xVXyfir5JdgLkzNqN6fLUtu" autocomplete="off">
                                                <input type="hidden" name="locale" value="es">
                                                <input type="hidden" name="return_url" value="/jobsportal-update">
                                                <input type="hidden" name="is_rtl" value="0">
                                            </form>
                                        </li>
                                        <li><a href="javascript:;" onclick="event.preventDefault(); document.getElementById('locale-form-ur').submit();" class="nav-link">اردو</a>
                                            <form id="locale-form-ur" action="/jobsportal-update/set-locale" method="POST" style="display: none;">
                                                <input type="hidden" name="_token" value="dWQSThWOrTMy01T95xVXyfir5JdgLkzNqN6fLUtu" autocomplete="off">
                                                <input type="hidden" name="locale" value="ur">
                                                <input type="hidden" name="return_url" value="/jobsportal-update">
                                                <input type="hidden" name="is_rtl" value="1">
                                            </form>
                                        </li>
                                        <li><a href="javascript:;" onclick="event.preventDefault(); document.getElementById('locale-form-fr').submit();" class="nav-link">Français</a>
                                            <form id="locale-form-fr" action="/jobsportal-update/set-locale" method="POST" style="display: none;">
                                                <input type="hidden" name="_token" value="dWQSThWOrTMy01T95xVXyfir5JdgLkzNqN6fLUtu" autocomplete="off">
                                                <input type="hidden" name="locale" value="fr">
                                                <input type="hidden" name="return_url" value="/jobsportal-update">
                                                <input type="hidden" name="is_rtl" value="0">
                                            </form>
                                        </li>
                                        <li><a href="javascript:;" onclick="event.preventDefault(); document.getElementById('locale-form-NLD').submit();" class="nav-link">Nederlands</a>
                                            <form id="locale-form-NLD" action="/jobsportal-update/set-locale" method="POST" style="display: none;">
                                                <input type="hidden" name="_token" value="dWQSThWOrTMy01T95xVXyfir5JdgLkzNqN6fLUtu" autocomplete="off">
                                                <input type="hidden" name="locale" value="NLD">
                                                <input type="hidden" name="return_url" value="/jobsportal-update">
                                                <input type="hidden" name="is_rtl" value="0">
                                            </form>
                                        </li>
                                        <li><a href="javascript:;" onclick="event.preventDefault(); document.getElementById('locale-form-DE').submit();" class="nav-link">Deutsch</a>
                                            <form id="locale-form-DE" action="/jobsportal-update/set-locale" method="POST" style="display: none;">
                                                <input type="hidden" name="_token" value="dWQSThWOrTMy01T95xVXyfir5JdgLkzNqN6fLUtu" autocomplete="off">
                                                <input type="hidden" name="locale" value="DE">
                                                <input type="hidden" name="return_url" value="/jobsportal-update">
                                                <input type="hidden" name="is_rtl" value="0">
                                            </form>
                                        </li>
                                    </ul>
                                </li> -->
                            </ul>

                            <!-- Nav collapes end -->

                        </div>
                        <div class="clearfix"></div>
                    </nav>

                    <!-- Nav end -->

                </div>
            </div>

            <!-- row end -->

        </div>

        <!-- Header container end -->

    </div>










    <!-- Login -->
    <div class="modal fade mypremodal" id="headlogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <div class="preuserinfo">
                        <h3>Login as</h3>
                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/login" class="btn btn-yellow mt-3">Job Seeker</a>
                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company-login" class="btn btn-dark mt-3">Company</a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Register -->
    <div class="modal fade mypremodal" id="headregister" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <div class="preuserinfo p-2 pb-4">
                        <h3>Register as a</h3>
                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/register" class="btn btn-yellow mt-3">Job Seeker</a>
                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company-register" class="btn btn-dark mt-3">Company</a>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade mypremodal" id="preresume" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <div class="preuserinfo">
                        <h3>Login or register to create your Resume/CV</h3>
                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/login" class="btn btn-yellow mt-3">Login</a>
                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/register" class="btn btn-dark mt-3">Register</a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade mypremodal" id="prejobpost" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <div class="preuserinfo ps-0 pe-0">
                        <h3>Welcome to Employer Portal</h3>
                        <p>Earn our user's trust. Get your account approved to start posting jobs</p>





                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="mobilenav">
        <ul>
            <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update">
                    <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -960 960 960" width="36px" fill="#5f6368">
                        <path d="M240-200h120v-240h240v240h120v-360L480-740 240-560v360Zm-80 80v-480l320-240 320 240v480H520v-240h-80v240H160Zm320-350Z"></path>
                    </svg>
                    <span>Home</span>
                </a></li>


            <li>
                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job-seekers">
                    <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -960 960 960" width="36px" fill="#5f6368">
                        <path d="M160-120q-33 0-56.5-23.5T80-200v-440q0-33 23.5-56.5T160-720h160v-80q0-33 23.5-56.5T400-880h160q33 0 56.5 23.5T640-800v80h160q33 0 56.5 23.5T880-640v440q0 33-23.5 56.5T800-120H160Zm0-80h640v-440H160v440Zm240-520h160v-80H400v80ZM160-200v-440 440Z"></path>
                    </svg>
                    <span>Talent</span>
                </a>
            </li>








            <li>
                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company-messages">
                    <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -960 960 960" width="36px" fill="#5f6368">
                        <path d="M880-80 720-240H320q-33 0-56.5-23.5T240-320v-40h440q33 0 56.5-23.5T760-440v-280h40q33 0 56.5 23.5T880-640v560ZM160-473l47-47h393v-280H160v327ZM80-280v-520q0-33 23.5-56.5T160-880h440q33 0 56.5 23.5T680-800v280q0 33-23.5 56.5T600-440H240L80-280Zm80-240v-280 280Z"></path>
                    </svg>
                    <span>Messages</span>
                </a>
            </li>
            <li>
                <a href="javascript:void();" class="openmbnav">
                    <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 -960 960 960" width="36px" fill="#5f6368">
                        <path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"></path>
                    </svg>
                    <span>Dashboard</span>
                </a>
            </li>





        </ul>
    </div>









    <ul class="usernavdash" id="usermbnav">
        <li class="nav-item"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company-home" class="nav-link"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a> </li>
        <li class="nav-item"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company-profile" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i> Company Profile</a></li>
        <li class="nav-item"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/post-job" class="nav-link"><i class="fa fa-desktop" aria-hidden="true"></i> Post Job</a></li>

        <li class="nav-item"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/posted-jobs" class="nav-link"><i class="fab fa-black-tie"></i> Manage Jobs</a></li>

        <li class="nav-item"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company-packages" class="nav-link"><i class="fas fa-search" aria-hidden="true"></i> CV Search Packages</a></li>

        <li class="nav-item"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/list-payment-history" class="nav-link"><i class="fas fa-file-invoice"></i> Payment History</a></li>

        <li class="nav-item"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/unloced-seekers" class="nav-link"><i class="fas fa-user" aria-hidden="true"></i> Unlocked Users</a></li>
        <li class="nav-item"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company-followers" class="nav-link"><i class="fas fa-users" aria-hidden="true"></i> Company Followers</a></li>


        <li class="nav-item"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/logout" onclick="event.preventDefault(); document.getElementById('logout-form-header1').submit();" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a> </li>
        <form id="logout-form-header1" action="https://www.sharjeelanjum.com/demos/jobsportal-update/company/logout" method="POST" style="display: none;">
            <input type="hidden" name="_token" value="dWQSThWOrTMy01T95xVXyfir5JdgLkzNqN6fLUtu" autocomplete="off">
        </form>
    </ul>



    <!-- Header end -->
    <!-- Search start -->
    <div class="searchwrap">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">

                    <div class="srjobseeker">
                        <div class="bxsrctxt">
                            <h1>Find Top Skilled Candidates.</h1>
                            <p>Simply enter your resume criteria to instantly search from millions of live, top quality resumes</p>


                        </div>
                        <div class="searchbarbt">
                            <form action="https://www.sharjeelanjum.com/demos/jobsportal-update/job-seekers" method="get">
                                <div class="searchbar">

                                    <h3>Resume Search for Employers</h3>

                                    <div class="srchbox">




                                        <div class="input-group mt-3">
                                            <input type="text" name="search" id="empsearch" value="" class="form-control" placeholder="Search Candidate" autocomplete="off">
                                            <input id="country_id" name="country_id[]" type="hidden" value="231">


                                            <span id="state_dd"><select id="state_id" class="form-control" name="state_id[]">
                                                    <option value="">Select State</option>
                                                    <option value="3919">Alabama</option>
                                                    <option value="3920">Alaska</option>
                                                    <option value="3921">Arizona</option>
                                                    <option value="3922">Arkansas</option>
                                                    <option value="3923">Byram</option>
                                                    <option value="3924">California</option>
                                                    <option value="3925">Cokato</option>
                                                    <option value="3926">Colorado</option>
                                                    <option value="3927">Connecticut</option>
                                                    <option value="3928">Delaware</option>
                                                    <option value="3929">District of Columbia</option>
                                                    <option value="3930">Florida</option>
                                                    <option value="3931">Georgia</option>
                                                    <option value="3932">Hawaii</option>
                                                    <option value="3933">Idaho</option>
                                                    <option value="3934">Illinois</option>
                                                    <option value="3935">Indiana</option>
                                                    <option value="3936">Iowa</option>
                                                    <option value="3937">Kansas</option>
                                                    <option value="3938">Kentucky</option>
                                                    <option value="3939">Louisiana</option>
                                                    <option value="3940">Lowa</option>
                                                    <option value="3941">Maine</option>
                                                    <option value="3942">Maryland</option>
                                                    <option value="3943">Massachusetts</option>
                                                    <option value="3944">Medfield</option>
                                                    <option value="3945">Michigan</option>
                                                    <option value="3946">Minnesota</option>
                                                    <option value="3947">Mississippi</option>
                                                    <option value="3948">Missouri</option>
                                                    <option value="3949">Montana</option>
                                                    <option value="3950">Nebraska</option>
                                                    <option value="3951">Nevada</option>
                                                    <option value="3952">New Hampshire</option>
                                                    <option value="3953">New Jersey</option>
                                                    <option value="3954">New Jersy</option>
                                                    <option value="3955">New Mexico</option>
                                                    <option value="3956">New York</option>
                                                    <option value="3957">North Carolina</option>
                                                    <option value="3958">North Dakota</option>
                                                    <option value="3959">Ohio</option>
                                                    <option value="3960">Oklahoma</option>
                                                    <option value="3961">Ontario</option>
                                                    <option value="3962">Oregon</option>
                                                    <option value="3963">Pennsylvania</option>
                                                    <option value="3964">Ramey</option>
                                                    <option value="3965">Rhode Island</option>
                                                    <option value="3966">South Carolina</option>
                                                    <option value="3967">South Dakota</option>
                                                    <option value="3968">Sublimity</option>
                                                    <option value="3969">Tennessee</option>
                                                    <option value="3970">Texas</option>
                                                    <option value="3971">Trimble</option>
                                                    <option value="3972">Utah</option>
                                                    <option value="3973">Vermont</option>
                                                    <option value="3974">Virginia</option>
                                                    <option value="3975">Washington</option>
                                                    <option value="3976">West Virginia</option>
                                                    <option value="3977">Wisconsin</option>
                                                    <option value="3978">Wyoming</option>
                                                </select></span>

                                            <span id="city_dd">
                                                <select class="form-control" id="city_id" name="city_id[]">
                                                    <option value="" selected="selected">Select City</option>
                                                </select>
                                            </span>

                                            <button type="submit" class="btn"><i class="fas fa-search"></i></button>


                                        </div>





                                    </div>



                                </div>
                            </form>

                        </div>




                    </div>

                </div>
                <div class="col-lg-6">

                    <div class="homesearchimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/images/search-bg_1741804553.jpg"></div>




                </div>
            </div>

        </div>
    </div>















    <!-- Search End -->

    <div class="infodatawrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/my-profile" class="userloginbox">

                        <h3>Search your desired Job</h3>
                        <p>Discover a career you are passionate about</p>
                        <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/images/search-job-icon.png" alt="Search your desired Job">

                    </a>


                </div>
                <div class="col-md-6"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/register" class="userloginbox">


                        <h3>Post a Job Today</h3>
                        <p>Discover the ideal candidate for your team</p>
                        <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/images/postjob.png" alt="Post a Job Today">

                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Top Employers start -->
    <div class="section topemployers">
        <!-- custome design -->
        <!-- <div class="container">
           
            <div class="titleTop">
                <h2>Top Companies are Hiring</h2>
            </div>
           
            <div class="row p-5">
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="empint">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/multimedia-design-9" title="Multimedia Design">
                                    <div class="emptbox">
                                        <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/multimedia-design-1614272292-782.jpg" alt="Multimedia Design" title="Multimedia Design"></div>
                                        <div class="text-info-right">
                                            <h4>Multimedia Design</h4>
                                            <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                        </div>

                                    </div>
                                    <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 4 Open Jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="empint">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/media-wave-6" title="Media Wave">
                                    <div class="emptbox">
                                        <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/media-wave-1536851777-515.jpg" alt="Media Wave" title="Media Wave"></div>
                                        <div class="text-info-right">
                                            <h4>Media Wave</h4>
                                            <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                        </div>

                                    </div>
                                    <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 1 Open Jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="empint">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/multimedia-design-9" title="Multimedia Design">
                                    <div class="emptbox">
                                        <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/power-color-1536854682-955.jpg" alt="Power Color" title="Power Color"></div>
                                        <div class="text-info-right">
                                            <h4>Power Color</h4>
                                            <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                        </div>

                                    </div>
                                    <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 4 Open Jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="empint">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/pharma-tech-inc-15" title="Pharma Tech Inc.">
                                    <div class="emptbox">
                                        <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/pharma-tech-inc-1536858973-298.jpg" alt="Pharma Tech Inc." title="Pharma Tech Inc."></div>
                                        <div class="text-info-right">
                                            <h4>Pharma Tech Inc.</h4>
                                            <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                        </div>

                                    </div>
                                    <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 1 Open Jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
               
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="empint">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/mayan-design-studios-14" title="Mayan Design Studios">
                                    <div class="emptbox">
                                        <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/admin_assets/no-image.png" alt="Mayan Design Studios" title="Mayan Design Studios"></div>
                                        <div class="text-info-right">
                                            <h4>Mayan Design Studios</h4>
                                            <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                        </div>

                                    </div>
                                    <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 1 Open Jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="empint">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/power-wave-5" title="Power Wave">
                                    <div class="emptbox">
                                        <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/power-wave-1536854843-603.jpg" alt="Power Wave" title="Power Wave"></div>
                                        <div class="text-info-right">
                                            <h4>Power Wave</h4>
                                            <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                        </div>

                                    </div>
                                    <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 1 Open Jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="empint">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/connect-people-7" title="Connect People">
                                    <div class="emptbox">
                                        <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/connect-people-1536859166-614.jpg" alt="Connect People" title="Connect People"></div>
                                        <div class="text-info-right">
                                            <h4>Connect People</h4>
                                            <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                        </div>

                                    </div>
                                    <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 1 Open Jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="empint">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/pharma-tech-inc-15" title="Pharma Tech Inc.">
                                    <div class="emptbox">
                                        <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/pharma-tech-inc-1536858973-298.jpg" alt="Pharma Tech Inc." title="Pharma Tech Inc."></div>
                                        <div class="text-info-right">
                                            <h4>Pharma Tech Inc.</h4>
                                            <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                        </div>

                                    </div>
                                    <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 1 Open Jobs</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="viewallbtn"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/featured-companies">View All Featured Companies</a></div>

        </div> -->
        <!-- template design -->
        <div class="container">
            <!-- title start -->
            <div class="titleTop">
                <h2>Top Companies are Hiring</h2>
            </div>
            <!-- title end -->

            <ul class="employerList owl-carousel owl-theme owl-loaded owl-drag" data-group-item="2">
                <!--employer-->







                <div class="owl-stage-outer">
                    <div class="owl-stage" style="left: 0px; width: 1011px;">
                        <div class="owl-item active" style="width: 237.6px; margin-right: 15px;">
                            <div class="item-1">
                                <li class="item-child" data-number="9">
                                    <div class="empint">
                                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/multimedia-design-9" title="Multimedia Design">
                                            <div class="emptbox">
                                                <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/multimedia-design-1614272292-782.jpg" alt="Multimedia Design" title="Multimedia Design"></div>
                                                <div class="text-info-right">
                                                    <h4>Multimedia Design</h4>
                                                    <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                                </div>

                                            </div>
                                            <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 4 Open Jobs</div>
                                        </a>
                                    </div>
                                </li>
                                <li class="item-child" data-number="1">
                                    <div class="empint">
                                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/power-color-1" title="Power Color">
                                            <div class="emptbox">
                                                <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/power-color-1536854682-955.jpg" alt="Power Color" title="Power Color"></div>
                                                <div class="text-info-right">
                                                    <h4>Power Color</h4>
                                                    <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                                </div>

                                            </div>
                                            <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 1 Open Jobs</div>
                                        </a>
                                    </div>
                                </li>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 237.6px; margin-right: 15px;">
                            <div class="item-2">
                                <li class="item-child" data-number="6">
                                    <div class="empint">
                                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/media-wave-6" title="Media Wave">
                                            <div class="emptbox">
                                                <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/media-wave-1536851777-515.jpg" alt="Media Wave" title="Media Wave"></div>
                                                <div class="text-info-right">
                                                    <h4>Media Wave</h4>
                                                    <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                                </div>

                                            </div>
                                            <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 1 Open Jobs</div>
                                        </a>
                                    </div>
                                </li>
                                <li class="item-child" data-number="15">
                                    <div class="empint">
                                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/pharma-tech-inc-15" title="Pharma Tech Inc.">
                                            <div class="emptbox">
                                                <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/pharma-tech-inc-1536858973-298.jpg" alt="Pharma Tech Inc." title="Pharma Tech Inc."></div>
                                                <div class="text-info-right">
                                                    <h4>Pharma Tech Inc.</h4>
                                                    <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                                </div>

                                            </div>
                                            <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 1 Open Jobs</div>
                                        </a>
                                    </div>
                                </li>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 237.6px; margin-right: 15px;">
                            <div class="item-3">
                                <li class="item-child" data-number="14">
                                    <div class="empint">
                                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/mayan-design-studios-14" title="Mayan Design Studios">
                                            <div class="emptbox">
                                                <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/admin_assets/no-image.png" alt="Mayan Design Studios" title="Mayan Design Studios"></div>
                                                <div class="text-info-right">
                                                    <h4>Mayan Design Studios</h4>
                                                    <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                                </div>

                                            </div>
                                            <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 1 Open Jobs</div>
                                        </a>
                                    </div>
                                </li>
                                <li class="item-child" data-number="5">
                                    <div class="empint">
                                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/power-wave-5" title="Power Wave">
                                            <div class="emptbox">
                                                <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/power-wave-1536854843-603.jpg" alt="Power Wave" title="Power Wave"></div>
                                                <div class="text-info-right">
                                                    <h4>Power Wave</h4>
                                                    <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                                </div>

                                            </div>
                                            <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 1 Open Jobs</div>
                                        </a>
                                    </div>
                                </li>
                            </div>
                        </div>
                        <div class="owl-item active" style="width: 237.6px; margin-right: 15px;">
                            <div class="item-4">
                                <li class="item-child" data-number="7">
                                    <div class="empint">
                                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/connect-people-7" title="Connect People">
                                            <div class="emptbox">
                                                <div class="comimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/connect-people-1536859166-614.jpg" alt="Connect People" title="Connect People"></div>
                                                <div class="text-info-right">
                                                    <h4>Connect People</h4>
                                                    <div class="emloc"><i class="fas fa-map-marker-alt"></i> United States of America</div>
                                                </div>

                                            </div>
                                            <div class="cm-info-bottom mt-3"><i class="fas fa-briefcase"></i> 1 Open Jobs</div>
                                        </a>
                                    </div>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item-1"></div>
                <div class="item-2"></div>
                <div class="item-3"></div>
                <div class="item-4"></div>
            </ul>
            <div class="viewallbtn"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/featured-companies">View All Featured Companies</a></div>

        </div>



    </div>


    <!-- Top Employers ends -->


    <!-- industries start -->
    <div class="section greybg">
        <div class="container">

            <div class="titleTop text-center">
                <h3>Popular Fields</h3>
            </div>


            <div class="popularind">

                <ul class="hmindlist">
                    <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?industry_id%5B%5D=10" title="Manufacturing">
                            Manufacturing
                            (4)
                        </a></li>
                    <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?industry_id%5B%5D=1" title="Information Technology">
                            Information Technology
                            (2)
                        </a></li>
                    <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?industry_id%5B%5D=32" title="Fashion">
                            Fashion
                            (1)
                        </a></li>
                    <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?industry_id%5B%5D=28" title="Electronics">
                            Electronics
                            (1)
                        </a></li>
                    <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?industry_id%5B%5D=7" title="Advertising/PR">
                            Advertising/PR
                            (1)
                        </a></li>
                    <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?industry_id%5B%5D=38" title="Health &amp; Fitness">
                            Health &amp; Fitness
                            (1)
                        </a></li>
                </ul>
            </div>



        </div>
    </div><!-- industries ends -->

    <!-- Featured Jobs start -->
    <div class="section featuredjobwrap">
        <div class="container">
            <!-- title start -->
            <div class="titleTop text-center">
                <h3>Featured Jobs</h3>
            </div>
            <!-- title end -->

            <!--Featured Job start-->
            <ul class="featuredlist row">

                <!--Job start-->
                <li class="col-lg-3 col-md-6">
                    <div class="jobint">
                        <div class="d-flex">
                            <div class="fticon"><i class="fas fa-briefcase"></i> Full Time/Permanent</div>
                        </div>

                        <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/full-stack-designer" title="Full Stack Designer">Full Stack Designer</a></h4>
                        <strong><i class="fas fa-map-marker-alt"></i> Barrington</strong>

                        <div class="jobcompany">
                            <div class="ftjobcomp">
                                <span>Mar 07, 2025</span>
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/connect-people-7" title="Connect People">Connect People</a>
                            </div>
                            <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/connect-people-7" class="company-logo" title="Connect People"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/connect-people-1536859166-614.jpg" alt="Connect People" title="Connect People"> </a>
                        </div>
                    </div>
                </li>
                <!--Job end-->
                <!--Job start-->
                <li class="col-lg-3 col-md-6">
                    <div class="jobint">
                        <div class="d-flex">
                            <div class="fticon"><i class="fas fa-briefcase"></i> Contract</div>
                        </div>

                        <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/senior-dot-developer" title="Dot Developer">Dot Developer</a></h4>
                        <strong><i class="fas fa-map-marker-alt"></i> Durant</strong>

                        <div class="jobcompany">
                            <div class="ftjobcomp">
                                <span>Mar 07, 2025</span>
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/power-wave-5" title="Power Wave">Power Wave</a>
                            </div>
                            <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/power-wave-5" class="company-logo" title="Power Wave"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/power-wave-1536854843-603.jpg" alt="Power Wave" title="Power Wave"> </a>
                        </div>
                    </div>
                </li>
                <!--Job end-->
                <!--Job start-->
                <li class="col-lg-3 col-md-6">
                    <div class="jobint">
                        <div class="d-flex">
                            <div class="fticon"><i class="fas fa-briefcase"></i> Full Time/Permanent</div>
                        </div>

                        <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/seo-expert-28" title="SEO Expert">SEO Expert</a></h4>
                        <strong><i class="fas fa-map-marker-alt"></i> Blaine</strong>

                        <div class="jobcompany">
                            <div class="ftjobcomp">
                                <span>Mar 07, 2025</span>
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/mayan-design-studios-14" title="Mayan Design Studios">Mayan Design Studios</a>
                            </div>
                            <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/mayan-design-studios-14" class="company-logo" title="Mayan Design Studios"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/admin_assets/no-image.png" alt="Mayan Design Studios" title="Mayan Design Studios"> </a>
                        </div>
                    </div>
                </li>
                <!--Job end-->
                <!--Job start-->
                <li class="col-lg-3 col-md-6">
                    <div class="jobint">
                        <div class="d-flex">
                            <div class="fticon"><i class="fas fa-briefcase"></i> Contract</div>
                        </div>

                        <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/medicine-supervisor-27" title="Medicine Supervisor">Medicine Supervisor</a></h4>
                        <strong><i class="fas fa-map-marker-alt"></i> El Dorado</strong>

                        <div class="jobcompany">
                            <div class="ftjobcomp">
                                <span>Mar 07, 2025</span>
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/pharma-tech-inc-15" title="Pharma Tech Inc.">Pharma Tech Inc.</a>
                            </div>
                            <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/pharma-tech-inc-15" class="company-logo" title="Pharma Tech Inc."><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/pharma-tech-inc-1536858973-298.jpg" alt="Pharma Tech Inc." title="Pharma Tech Inc."> </a>
                        </div>
                    </div>
                </li>
                <!--Job end-->
                <!--Job start-->
                <li class="col-lg-3 col-md-6">
                    <div class="jobint">
                        <div class="d-flex">
                            <div class="fticon"><i class="fas fa-briefcase"></i> Freelance</div>
                        </div>

                        <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/graphic-designer-26" title="Graphic Designer">Graphic Designer</a></h4>
                        <strong><i class="fas fa-map-marker-alt"></i> Islamabad</strong>

                        <div class="jobcompany">
                            <div class="ftjobcomp">
                                <span>Mar 07, 2025</span>
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/media-wave-6" title="Media Wave">Media Wave</a>
                            </div>
                            <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/media-wave-6" class="company-logo" title="Media Wave"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/media-wave-1536851777-515.jpg" alt="Media Wave" title="Media Wave"> </a>
                        </div>
                    </div>
                </li>
                <!--Job end-->
                <!--Job start-->
                <li class="col-lg-3 col-md-6">
                    <div class="jobint">
                        <div class="d-flex">
                            <div class="fticon"><i class="fas fa-briefcase"></i> Full Time/Permanent</div>
                        </div>

                        <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/uiux-designer-1" title="UI/UX Designer">UI/UX Designer</a></h4>
                        <strong><i class="fas fa-map-marker-alt"></i> Islamabad</strong>

                        <div class="jobcompany">
                            <div class="ftjobcomp">
                                <span>Mar 07, 2025</span>
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/power-color-1" title="Power Color">Power Color</a>
                            </div>
                            <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/power-color-1" class="company-logo" title="Power Color"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/power-color-1536854682-955.jpg" alt="Power Color" title="Power Color"> </a>
                        </div>
                    </div>
                </li>
                <!--Job end-->


            </ul>
            <!--Featured Job end-->

            <!--button start-->
            <div class="viewallbtn"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?is_featured=1">View All Featured Jobs</a></div>
            <!--button end-->

        </div>



    </div><!-- Featured Jobs ends -->

    <!-- Popular Searches start -->
    <div class="section greybg">
        <div class="container">
            <div class="topsearchwrap">
                <div class="titleTop text-center">
                    <h3>Browse Jobs By Categories</h3>
                </div>

                <div class="srchint">
                    <ul class="categorylisting owl-carousel owl-loaded owl-drag">

                        <div class="owl-stage-outer">
                            <div class="owl-stage" style="left: 0px; width: 1444px;">
                                <div class="owl-item active" style="width: 165.429px; margin-right: 15px;">
                                    <li class="item">
                                        <a class="catecard" href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=3" title="Admin">
                                            <div class="iconcircle">
                                                <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/uploads/functional_area/admin_26.png" alt="Admin">
                                            </div>
                                            <div class="catedata">
                                                <h3>Admin</h3>
                                                <div class="badge"><i class="fas fa-briefcase"></i> (2) Jobs</div>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="owl-item active" style="width: 165.429px; margin-right: 15px;">
                                    <li class="item">
                                        <a class="catecard" href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=633" title="Information Technology">
                                            <div class="iconcircle">
                                                <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/uploads/functional_area/software-application_482.png" alt="Information Technology">
                                            </div>
                                            <div class="catedata">
                                                <h3>Information Technology</h3>
                                                <div class="badge"><i class="fas fa-briefcase"></i> (2) Jobs</div>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="owl-item active" style="width: 165.429px; margin-right: 15px;">
                                    <li class="item">
                                        <a class="catecard" href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=69" title="Marketing">
                                            <div class="iconcircle">
                                                <!-- Use your dummy image path or URL here -->
                                                <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/images/no-image.png" alt="Marketing">
                                            </div>
                                            <div class="catedata">
                                                <h3>Marketing</h3>
                                                <div class="badge"><i class="fas fa-briefcase"></i> (1) Jobs</div>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="owl-item active" style="width: 165.429px; margin-right: 15px;">
                                    <li class="item">
                                        <a class="catecard" href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=14" title="Business Management">
                                            <div class="iconcircle">
                                                <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/uploads/functional_area/project-management_803.png" alt="Business Management">
                                            </div>
                                            <div class="catedata">
                                                <h3>Business Management</h3>
                                                <div class="badge"><i class="fas fa-briefcase"></i> (1) Jobs</div>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="owl-item active" style="width: 165.429px; margin-right: 15px;">
                                    <li class="item">
                                        <a class="catecard" href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=23" title="Creative Design">
                                            <div class="iconcircle">
                                                <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/uploads/functional_area/creativity_128.png" alt="Creative Design">
                                            </div>
                                            <div class="catedata">
                                                <h3>Creative Design</h3>
                                                <div class="badge"><i class="fas fa-briefcase"></i> (1) Jobs</div>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="owl-item active" style="width: 165.429px; margin-right: 15px;">
                                    <li class="item">
                                        <a class="catecard" href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=9" title="Advertisment">
                                            <div class="iconcircle">
                                                <!-- Use your dummy image path or URL here -->
                                                <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/images/no-image.png" alt="Advertisment">
                                            </div>
                                            <div class="catedata">
                                                <h3>Advertisment</h3>
                                                <div class="badge"><i class="fas fa-briefcase"></i> (1) Jobs</div>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="owl-item active" style="width: 165.429px; margin-right: 15px;">
                                    <li class="item">
                                        <a class="catecard" href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=40" title="Graphic Design">
                                            <div class="iconcircle">
                                                <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/uploads/functional_area/logo-design_755.png" alt="Graphic Design">
                                            </div>
                                            <div class="catedata">
                                                <h3>Graphic Design</h3>
                                                <div class="badge"><i class="fas fa-briefcase"></i> (1) Jobs</div>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                                <div class="owl-item" style="width: 165.429px; margin-right: 15px;">
                                    <li class="item">
                                        <a class="catecard" href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=74" title="Medicine">
                                            <div class="iconcircle">
                                                <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/uploads/functional_area/drugs_384.png" alt="Medicine">
                                            </div>
                                            <div class="catedata">
                                                <h3>Medicine</h3>
                                                <div class="badge"><i class="fas fa-briefcase"></i> (1) Jobs</div>
                                            </div>
                                        </a>
                                    </li>
                                </div>
                            </div>
                        </div>
                    </ul>
                    <!--Categories end-->

                    <div class="categorylisting-controls">
                        <button class="custom-prev-categorylisting"><i class="fas fa-chevron-left"></i></button>
                        <button class="custom-next-categorylisting"><i class="fas fa-chevron-right"></i></button>
                    </div>


                </div>

                <div class="viewallbtn"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/all-categories">View All Categories</a></div>


            </div>
        </div>





    </div>
    <!-- Popular Searches ends -->

    <!-- Latest Jobs start -->
    <div class="section">
        <div class="container">
            <!-- title start -->
            <div class="titleTop text-center">
                <h3>Latest Jobs</h3>
            </div>
            <!-- title end -->

            <ul class="jobslist newjbox row">
                <!--Job start-->
                <li class="col-lg-4 col-md-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/marketing-specialist-agriculture-agribusiness-97" title="Marketing Specialist – Agriculture &amp; Agribusiness">
                                    <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/multimedia-design-1614272292-782.jpg" alt="Multimedia Design" title="Multimedia Design">
                                </a>
                            </div>
                            <div class="col-md-9 col-9">
                                <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/marketing-specialist-agriculture-agribusiness-97" title="Marketing Specialist – Agriculture &amp; Agribusiness">Marketing Specialist – Agriculture &amp; Agribusiness</a></h4>
                                <div class="company"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/multimedia-design-9" title="Multimedia Design">Multimedia Design</a> - <span>Henderson</span></div>
                                <div class="jobloc">
                                    <label class="fulltime" title="Full Time/Permanent">Full Time/Permanent</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->
                <!--Job start-->
                <li class="col-lg-4 col-md-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/ui-ux-designer-required-35" title="UI UX Designer Required">
                                    <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/multimedia-design-1614272292-782.jpg" alt="Multimedia Design" title="Multimedia Design">
                                </a>
                            </div>
                            <div class="col-md-9 col-9">
                                <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/ui-ux-designer-required-35" title="UI UX Designer Required">UI UX Designer Required</a></h4>
                                <div class="company"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/multimedia-design-9" title="Multimedia Design">Multimedia Design</a> - <span>Fairbanks</span></div>
                                <div class="jobloc">
                                    <label class="fulltime" title="Full Time/Permanent">Full Time/Permanent</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->
                <!--Job start-->
                <li class="col-lg-4 col-md-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/testte-32" title="Graphic Designer Required">
                                    <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/multimedia-design-1614272292-782.jpg" alt="Multimedia Design" title="Multimedia Design">
                                </a>
                            </div>
                            <div class="col-md-9 col-9">
                                <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/testte-32" title="Graphic Designer Required">Graphic Designer Required</a></h4>
                                <div class="company"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/multimedia-design-9" title="Multimedia Design">Multimedia Design</a> - <span>Bessemer</span></div>
                                <div class="jobloc">
                                    <label class="fulltime" title="Contract">Contract</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->
                <!--Job start-->
                <li class="col-lg-4 col-md-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/testte-31" title="Full Stack Developer Required">
                                    <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/multimedia-design-1614272292-782.jpg" alt="Multimedia Design" title="Multimedia Design">
                                </a>
                            </div>
                            <div class="col-md-9 col-9">
                                <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/testte-31" title="Full Stack Developer Required">Full Stack Developer Required</a></h4>
                                <div class="company"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/multimedia-design-9" title="Multimedia Design">Multimedia Design</a> - <span>Bessemer</span></div>
                                <div class="jobloc">
                                    <label class="fulltime" title="Contract">Contract</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->
                <!--Job start-->
                <li class="col-lg-4 col-md-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/full-stack-designer" title="Full Stack Designer">
                                    <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/connect-people-1536859166-614.jpg" alt="Connect People" title="Connect People">
                                </a>
                            </div>
                            <div class="col-md-9 col-9">
                                <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/full-stack-designer" title="Full Stack Designer">Full Stack Designer</a></h4>
                                <div class="company"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/connect-people-7" title="Connect People">Connect People</a> - <span>Barrington</span></div>
                                <div class="jobloc">
                                    <label class="fulltime" title="Full Time/Permanent">Full Time/Permanent</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->
                <!--Job start-->
                <li class="col-lg-4 col-md-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/senior-dot-developer" title="Dot Developer">
                                    <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/power-wave-1536854843-603.jpg" alt="Power Wave" title="Power Wave">
                                </a>
                            </div>
                            <div class="col-md-9 col-9">
                                <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/senior-dot-developer" title="Dot Developer">Dot Developer</a></h4>
                                <div class="company"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/power-wave-5" title="Power Wave">Power Wave</a> - <span>Durant</span></div>
                                <div class="jobloc">
                                    <label class="fulltime" title="Contract">Contract</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->
                <!--Job start-->
                <li class="col-lg-4 col-md-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/seo-expert-28" title="SEO Expert">
                                    <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/admin_assets/no-image.png" alt="Mayan Design Studios" title="Mayan Design Studios">
                                </a>
                            </div>
                            <div class="col-md-9 col-9">
                                <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/seo-expert-28" title="SEO Expert">SEO Expert</a></h4>
                                <div class="company"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/mayan-design-studios-14" title="Mayan Design Studios">Mayan Design Studios</a> - <span>Blaine</span></div>
                                <div class="jobloc">
                                    <label class="fulltime" title="Full Time/Permanent">Full Time/Permanent</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->
                <!--Job start-->
                <li class="col-lg-4 col-md-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/medicine-supervisor-27" title="Medicine Supervisor">
                                    <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/pharma-tech-inc-1536858973-298.jpg" alt="Pharma Tech Inc." title="Pharma Tech Inc.">
                                </a>
                            </div>
                            <div class="col-md-9 col-9">
                                <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/medicine-supervisor-27" title="Medicine Supervisor">Medicine Supervisor</a></h4>
                                <div class="company"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/pharma-tech-inc-15" title="Pharma Tech Inc.">Pharma Tech Inc.</a> - <span>El Dorado</span></div>
                                <div class="jobloc">
                                    <label class="fulltime" title="Contract">Contract</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->
                <!--Job start-->
                <li class="col-lg-4 col-md-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-3">
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/graphic-designer-26" title="Graphic Designer">
                                    <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/company_logos/media-wave-1536851777-515.jpg" alt="Media Wave" title="Media Wave">
                                </a>
                            </div>
                            <div class="col-md-9 col-9">
                                <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job/graphic-designer-26" title="Graphic Designer">Graphic Designer</a></h4>
                                <div class="company"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company/media-wave-6" title="Media Wave">Media Wave</a> - <span>Islamabad</span></div>
                                <div class="jobloc">
                                    <label class="fulltime" title="Freelance">Freelance</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->
            </ul>
            <!--view button-->
            <div class="viewallbtn"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs">View All Latest Jobs</a></div>
            <!--view button end-->
        </div>
    </div><!-- Latest Jobs ends -->

    <!-- Top Cities start -->
    <!-- <div class="section citieswrap">
        <div class="container">
           
            <div class="titleTop text-center">
                <h3>Jobs by Cities</h3>
            </div>
           
            <div class="srchint">
                <ul class="row citiessrchlist">

                    <li class="col-lg-3 col-md-4">
                        <figure class="effect-ruby">

                            <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/city_images/bessemer-1741389506-375.jpg" alt="" title="">

                            <figcaption>
                                <h2>Bessemer</h2>
                                <p>(2) Open Jobs</p>
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?city_id%5B%5D=42603">View Jobs</a>
                            </figcaption>
                        </figure>
                    </li>

                    <li class="col-lg-3 col-md-4">
                        <figure class="effect-ruby">

                            <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/city_images/el-dorado-1741389627-330.jpg" alt="" title="">

                            <figcaption>
                                <h2>El Dorado</h2>
                                <p>(1) Open Jobs</p>
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?city_id%5B%5D=42762">View Jobs</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="col-lg-3 col-md-4">
                        <figure class="effect-ruby">

                            <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/admin_assets/no-image.png" alt="" title="">

                            <figcaption>
                                <h2>Blaine</h2>
                                <p>(1) Open Jobs</p>
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?city_id%5B%5D=46777">View Jobs</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="col-lg-3 col-md-4">
                        <figure class="effect-ruby">

                            <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/city_images/durant-1741389489-2.jpg" alt="" title="">

                            <figcaption>
                                <h2>Durant</h2>
                                <p>(1) Open Jobs</p>
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?city_id%5B%5D=45830">View Jobs</a>
                            </figcaption>
                        </figure>
                    </li>
                    <li class="col-lg-3 col-md-4">
                        <figure class="effect-ruby">

                            <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/city_images/barrington-1741389466-492.jpg" alt="" title="">

                            <figcaption>
                                <h2>Barrington</h2>
                                <p>(1) Open Jobs</p>
                                <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?city_id%5B%5D=47610">View Jobs</a>
                            </figcaption>
                        </figure>
                    </li>



                </ul>
                
            </div>
        </div>
    </div> -->
    <!-- Top Cities Ends -->

    <!-- Premium Seekers start -->
    <div class="section">
        <div class="container position-relative">
            <div class="titleTop mb-4 text-center">
                <h3><i class="fas fa-ribbon"></i> Featured Candidates</h3>
            </div>


            <ul class="userlisting homeseekerlist owl-carousel owl-loaded owl-drag">
                <!-- job start -->






































                <div class="owl-stage-outer">
                    <div class="owl-stage" style="left: 0px; width: 1579px;">
                        <div class="owl-item active" style="width: 300.75px; margin-right: 15px;">
                            <li class="item">
                                <div class="seekerbox">
                                    <div class="ribbon ribbon-top-left"><span><i class="fas fa-star"></i> Featured</span></div>

                                    <div class="ltisusrinf">
                                        <div class="userltimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/user_images/-1741437674-648.jpg" style="max-width=100px; max-height:100px;" alt="Arjun Karanath" title="Arjun Karanath"></div>
                                    </div>

                                    <div class="hmseekerinfo">
                                        <h3>Arjun Karanath</h3>
                                        <div class="hmcate justify-content-center" title="Functional Area">Accountant</div>
                                        <div class="hmcate justify-content-center" title="Career Level"><i class="fas fa-chart-line"></i> Experienced Professional</div>
                                        <div class="hmcate justify-content-center"><i class="fas fa-map-marker-alt"></i> Vapi</div>
                                        <div class="listbtn">


                                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#hireme">View Profile</a>


                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="owl-item active" style="width: 300.75px; margin-right: 15px;">
                            <li class="item">
                                <div class="seekerbox">
                                    <div class="ribbon ribbon-top-left"><span><i class="fas fa-star"></i> Featured</span></div>

                                    <div class="ltisusrinf">
                                        <div class="userltimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/user_images/-1741437768-832.jpg" style="max-width=100px; max-height:100px;" alt="Sophia Jason" title="Sophia Jason"></div>
                                    </div>

                                    <div class="hmseekerinfo">
                                        <h3>Sophia Jason</h3>
                                        <div class="hmcate justify-content-center" title="Functional Area">Accountant</div>
                                        <div class="hmcate justify-content-center" title="Career Level"><i class="fas fa-chart-line"></i> Department Head</div>
                                        <div class="hmcate justify-content-center"><i class="fas fa-map-marker-alt"></i> Albertville</div>
                                        <div class="listbtn">


                                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#hireme">View Profile</a>


                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="owl-item active" style="width: 300.75px; margin-right: 15px;">
                            <li class="item">
                                <div class="seekerbox">
                                    <div class="ribbon ribbon-top-left"><span><i class="fas fa-star"></i> Featured</span></div>

                                    <div class="ltisusrinf">
                                        <div class="userltimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/user_images/-1741437838-57.jpg" style="max-width=100px; max-height:100px;" alt="Liza Martin" title="Liza Martin"></div>
                                    </div>

                                    <div class="hmseekerinfo">
                                        <h3>Liza Martin</h3>
                                        <div class="hmcate justify-content-center" title="Functional Area">Administration</div>
                                        <div class="hmcate justify-content-center" title="Career Level"><i class="fas fa-chart-line"></i> Experienced Professional</div>
                                        <div class="hmcate justify-content-center"><i class="fas fa-map-marker-alt"></i> Bainbridge Island</div>
                                        <div class="listbtn">


                                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#hireme">View Profile</a>


                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="owl-item active" style="width: 300.75px; margin-right: 15px;">
                            <li class="item">
                                <div class="seekerbox">
                                    <div class="ribbon ribbon-top-left"><span><i class="fas fa-star"></i> Featured</span></div>

                                    <div class="ltisusrinf">
                                        <div class="userltimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/user_images/-1741437874-596.jpg" style="max-width=100px; max-height:100px;" alt="Job Seeker" title="Job Seeker"></div>
                                    </div>

                                    <div class="hmseekerinfo">
                                        <h3>Job Seeker</h3>
                                        <div class="hmcate justify-content-center" title="Functional Area">Information Technology</div>
                                        <div class="hmcate justify-content-center" title="Career Level"><i class="fas fa-chart-line"></i> Experienced Professional</div>
                                        <div class="hmcate justify-content-center"><i class="fas fa-map-marker-alt"></i> Bainbridge Island</div>
                                        <div class="listbtn">


                                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#hireme">View Profile</a>


                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                        <div class="owl-item" style="width: 300.75px; margin-right: 15px;">
                            <li class="item">
                                <div class="seekerbox">
                                    <div class="ribbon ribbon-top-left"><span><i class="fas fa-star"></i> Featured</span></div>

                                    <div class="ltisusrinf">
                                        <div class="userltimg"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/user_images/-1728188674-976.png" style="max-width=100px; max-height:100px;" alt="Sharjeel Anjum" title="Sharjeel Anjum"></div>
                                    </div>

                                    <div class="hmseekerinfo">
                                        <h3>Sharjeel Anjum</h3>
                                        <div class="hmcate justify-content-center" title="Functional Area">Information Technology</div>
                                        <div class="hmcate justify-content-center" title="Career Level"><i class="fas fa-chart-line"></i> Experienced Professional</div>
                                        <div class="hmcate justify-content-center"><i class="fas fa-map-marker-alt"></i> Islamabad</div>
                                        <div class="listbtn">


                                            <a href="javascript:void();" data-bs-toggle="modal" data-bs-target="#hireme">View Profile</a>


                                        </div>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>
            </ul>

            <div class="custom-nav">
                <button class="custom-prev"><i class="fas fa-chevron-left"></i></button>
                <button class="custom-next"><i class="fas fa-chevron-right"></i></button>
            </div>

            <div class="viewallbtn mt-0"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/job-seekers">View All Candidates</a></div>

        </div>
    </div>





    <!-- Hire Candidate -->
    <div class="modal fade mypremodal" id="hireme" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                <div class="modal-body">
                    <div class="preuserinfo">
                        <h3>Our users rely on us to keep their information secure.</h3>
                        <p>Log in or register as an employer to access candidate details.</p>

                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company-login" class="btn btn-yellow mt-3">Login</a>
                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/company-register" class="btn btn-dark mt-3">Register</a>

                    </div>
                </div>

            </div>
        </div>
    </div>




    <!-- Premium Ends -->

    <!-- How it Works start -->
    <div class="howitsection greybg">
        <div class="container">
            <div class="howitwrap">


                <!-- title start -->
                <div class="titleTop">
                    <h3>How It Works</h3>
                </div>
                <!-- title end -->
                <ul class="howlist row">
                    <!--step 1-->
                    <li class="col-lg-4">
                        <div class="iconcircle"><span class="material-symbols-outlined">person_add</span></div>
                        <div class="">
                            <h4>Create An Account</h4>
                            <p>It's very easy to open an account and start your journey.</p>
                        </div>
                    </li>
                    <!--step 1 end-->
                    <!--step 2-->
                    <li class="col-lg-4">
                        <div class="iconcircle"><span class="material-symbols-outlined">fact_check</span></div>
                        <div class="">
                            <h4>Complete your profile</h4>
                            <p>Complete your profile with all the info to get attention of client.</p>
                        </div>
                    </li>
                    <!--step 2 end-->
                    <!--step 3-->
                    <li class="col-lg-4">
                        <div class="iconcircle"><span class="material-symbols-outlined">touchpad_mouse</span></div>
                        <div class="">
                            <h4>Apply job or hire</h4>
                            <p>Apply &amp; get your preferable jobs with all the requirements and get it.</p>
                        </div>
                    </li>
                    <!--step 3 end-->
                </ul>

            </div>


        </div>
    </div><!-- How it Works Ends -->


    <!-- Testimonials start -->
    <div class="section testimonialwrap">
        <div class="container">
            <!-- title start -->
            <div class="titleTop">
                <div class="subtitle">Testimonials</div>
                <h3>Success Stories</h3>
            </div>
            <!-- title end -->

            <ul class="testimonialsList owl-carousel owl-loaded owl-drag">



                <div class="owl-stage-outer">
                    <div class="owl-stage" style="left: -1278px; width: 3834px;">
                        <div class="owl-item cloned" style="width: 396px; margin-right: 30px;">
                            <li class="item">
                                <div class="ratinguser">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p>"Iam a recent graduate, struggled to find a job in my field. I joined Ekonty Jobs and customized my profile, highlighting my skills and experiences. Within weeks, I received interview invitations from top companies. I landed my dream job at a tech startup, and I credit Ekonty Jobs for connecting me with the right opportunity"</p>
                                <div class="clientname">Javeria</div>
                                <div class="clientinfo">CEO - Gates Inc</div>
                            </li>
                        </div>
                        <div class="owl-item cloned" style="width: 396px; margin-right: 30px;">
                            <li class="item">
                                <div class="ratinguser">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p>"I had been stuck in a dead-end job for years. I decided to explore Ekonty Jobs and discovered a listing for a position that aligned perfectly with my passion for marketing. After applying, I received personalized career advice from the platform. I aced the interview and secured the role, kickstarting my exciting career journey."</p>
                                <div class="clientname">Ayesha</div>
                                <div class="clientinfo">client</div>
                            </li>
                        </div>
                        <div class="owl-item cloned" style="width: 396px; margin-right: 30px;">
                            <li class="item">
                                <div class="ratinguser">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p>"Iam a working mom, needed flexibility in my job. I turned to Ekonty Jobs and found remote job listings that allowed me to balance work and family life. Iam now working as a content writer for an international company, all thanks to Ekonty
                                    Jobs’ user-friendly interface and extensive job listings."</p>
                                <div class="clientname">Maria</div>
                                <div class="clientinfo">Client</div>
                            </li>
                        </div>
                        <div class="owl-item active" style="width: 396px; margin-right: 30px;">
                            <li class="item">
                                <div class="ratinguser">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p>"Iam a recent graduate, struggled to find a job in my field. I joined Ekonty Jobs and customized my profile, highlighting my skills and experiences. Within weeks, I received interview invitations from top companies. I landed my dream job at a tech startup, and I credit Ekonty Jobs for connecting me with the right opportunity"</p>
                                <div class="clientname">Javeria</div>
                                <div class="clientinfo">CEO - Gates Inc</div>
                            </li>
                        </div>
                        <div class="owl-item active" style="width: 396px; margin-right: 30px;">
                            <li class="item">
                                <div class="ratinguser">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p>"I had been stuck in a dead-end job for years. I decided to explore Ekonty Jobs and discovered a listing for a position that aligned perfectly with my passion for marketing. After applying, I received personalized career advice from the platform. I aced the interview and secured the role, kickstarting my exciting career journey."</p>
                                <div class="clientname">Sana</div>
                                <div class="clientinfo">client</div>
                            </li>
                        </div>
                        <div class="owl-item active" style="width: 396px; margin-right: 30px;">
                            <li class="item">
                                <div class="ratinguser">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p>"Iam a working mom, needed flexibility in my job. I turned to Ekonty Jobs and found remote job listings that allowed me to balance work and family life. Iam now working as a content writer for an international company, all thanks to Ekonty
                                    Jobs’ user-friendly interface and extensive job listings."</p>
                                <div class="clientname">Maria</div>
                                <div class="clientinfo">Client</div>
                            </li>
                        </div>
                        <div class="owl-item cloned" style="width: 396px; margin-right: 30px;">
                            <li class="item">
                                <div class="ratinguser">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p>"Iam a recent graduate, struggled to find a job in my field. I joined Ekonty Jobs and customized my profile, highlighting my skills and experiences. Within weeks, I received interview invitations from top companies. I landed my dream job at a tech startup, and I credit Ekonty Jobs for connecting me with the right opportunity"</p>
                                <div class="clientname">Javeria</div>
                                <div class="clientinfo">CEO - Gates Inc</div>
                            </li>
                        </div>
                        <div class="owl-item cloned" style="width: 396px; margin-right: 30px;">
                            <li class="item">
                                <div class="ratinguser">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p>"I had been stuck in a dead-end job for years. I decided to explore Ekonty Jobs and discovered a listing for a position that aligned perfectly with my passion for marketing. After applying, I received personalized career advice from the platform. I aced the interview and secured the role, kickstarting my exciting career journey."</p>
                                <div class="clientname">Sana</div>
                                <div class="clientinfo">client</div>
                            </li>
                        </div>
                        <div class="owl-item cloned" style="width: 396px; margin-right: 30px;">
                            <li class="item">
                                <div class="ratinguser">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <p>"Iam a working mom, needed flexibility in my job. I turned to Ekonty Jobs and found remote job listings that allowed me to balance work and family life. Iam now working as a content writer for an international company, all thanks to Ekonty
                                    Jobs’ user-friendly interface and extensive job listings."</p>
                                <div class="clientname">Mariam</div>
                                <div class="clientinfo">Client</div>
                            </li>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div><!-- Testimonials End -->

    <!-- Top countrie start -->
    <!-- <div class="section countrieswrap greybg">
        <div class="container">
           
            <div class="titleTop text-center">
                <h3>Find Jobs by Country</h3>
            </div>
            
            <div class="srchint">
                <ul class="row countrieslist">
                    <li class="col-lg-3 col-md-6">
                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?country_id%5B%5D=231" title="United States of America" class="countryinfobox">
                            <h4>Jobs in United States of America</h4>
                            <span>(7) Open Jobs</span>
                        </a>
                    </li>
                    <li class="col-lg-3 col-md-6">
                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?country_id%5B%5D=166" title="Pakistan" class="countryinfobox">
                            <h4>Jobs in Pakistan</h4>
                            <span>(2) Open Jobs</span>
                        </a>
                    </li>
                    <li class="col-lg-3 col-md-6">
                        <a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?country_id%5B%5D=13" title="Australia" class="countryinfobox">
                            <h4>Jobs in Australia</h4>
                            <span>(1) Open Jobs</span>
                        </a>
                    </li>
                </ul>
                
            </div>
        </div>
    </div> -->
    <!-- Top countrie End -->

    <!-- Testimonials start -->
    <div class="section homeblogposts">
        <div class="container">
            <!-- title start -->
            <div class="titleTop">
                <h3>Latest blog articles</h3>
            </div>
            <!-- title end -->

            <ul class="blogList row">
                <li class="col-lg-4">
                    <div class="bloginner">
                        <div class="postimg">

                            <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/uploads/blogs/balancing-1868051_1280_465.jpg" alt="Balancing Work and Well-Being">
                        </div>

                        <div class="post-header">
                            <div class="postmeta"><i class="fas fa-calendar-alt"></i> 08-Aug-2024</div>
                            <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/blog/balancing-work-and-well-being">Balancing Work and Well-Being</a></h4>

                        </div>


                    </div>
                </li>


                <li class="col-lg-4">
                    <div class="bloginner">
                        <div class="postimg">

                            <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/uploads/blogs/post-it-notes-3233653_1280_441.jpg" alt="Employee Retention Strategies That Work">
                        </div>

                        <div class="post-header">
                            <div class="postmeta"><i class="fas fa-calendar-alt"></i> 08-Aug-2024</div>
                            <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/blog/employee-retention-strategies-that-work">Employee Retention Strategies That Work</a></h4>

                        </div>


                    </div>
                </li>


                <li class="col-lg-4">
                    <div class="bloginner">
                        <div class="postimg">

                            <img src="https://www.sharjeelanjum.com/demos/jobsportal-update/uploads/blogs/laptop-8499942_1280_661.jpg" alt="Remote Work Productivity Hacks">
                        </div>

                        <div class="post-header">
                            <div class="postmeta"><i class="fas fa-calendar-alt"></i> 08-Aug-2024</div>
                            <h4><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/blog/remote-work-productivity-hacks">Remote Work Productivity Hacks</a></h4>

                        </div>


                    </div>
                </li>


            </ul>
            <!--view button-->
            <div class="viewallbtn mt-0"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/blog">View All Blog Posts</a></div>
            <!--view button end-->
        </div>
    </div><!-- Testimonials End -->

    <div class="footerWrap">
        <div class="container">
            <div class="row">

                <!--Quick Links-->
                <div class="col-md-3 col-sm-6">
                    <h5>Quick Links</h5>
                    <!--Quick Links menu Start-->
                    <ul class="quicklinks">
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update">Home</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/contact-us">Contact Us</a></li>
                        <li class="postad"><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/post-job">Post a Job</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/faq">FAQs</a></li>

                        <li class=""><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/cms/about-us">About Us</a></li>

                        <li class=""><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/cms/terms-of-usev">Terms Of Use</a></li>
                    </ul>
                </div>
                <!--Quick Links menu end-->

                <div class="col-md-3 col-sm-6">
                    <h5>Jobs By Functional Area</h5>
                    <!--Quick Links menu Start-->
                    <ul class="quicklinks">
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=9">Advertisment</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=3">Admin</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=641">Administrative</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=633">Information Technology</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=8">Advertising</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=2">Accounts, Finance &amp; Financial Services</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=23">Creative Design</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=638">Health Care Provider</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=40">Graphic Design</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?functional_area_id%5B%5D=74">Medicine</a></li>
                    </ul>
                </div>

                <!--Jobs By Industry-->
                <div class="col-md-3 col-sm-6">
                    <h5>Jobs By Industry</h5>
                    <!--Industry menu Start-->
                    <ul class="quicklinks">
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?industry_id%5B%5D=38">Health &amp; Fitness</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?industry_id%5B%5D=7">Advertising/PR</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?industry_id%5B%5D=1">Information Technology</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?industry_id%5B%5D=28">Electronics</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?industry_id%5B%5D=32">Fashion</a></li>
                        <li><a href="https://www.sharjeelanjum.com/demos/jobsportal-update/search-jobs?industry_id%5B%5D=10">Manufacturing</a></li>
                    </ul>
                    <!--Industry menu End-->
                    <div class="clear"></div>
                </div>

                <!--About Us-->
                <div class="col-md-3 col-sm-12">
                    <h5>Contact Us</h5>
                    <div class="address">651 N Broad St, Suite 201, Middletown,
                        Zip Code 19709, New Castle,&nbsp;Delaware,&nbsp;USA.</div>
                    <div class="email"> <a href="mailto:info@jobsportal.com">info@jobsportal.com</a> </div>
                    <!-- Social Icons -->
                    <div class="social"><a href="www.facebook.com" target="_blank"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        <a href="www.x.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path>
                            </svg></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a href="www.linkedin.com" target="_blank"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                    </div>
                    <!-- Social Icons end -->

                </div>
                <!--About us End-->


            </div>
        </div>
    </div>
    <!--Footer end-->
    <!--Copyright-->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="bttxt">Copyright © 2025 JOBS PORTAL. All Rights Reserved. Design by: <a href="https://piratestechnologies.com/" target="_blank">Javeria Noor </a></div>
                </div>
                <div class="col-md-4">
                    <div class="paylogos"><img src="https://www.sharjeelanjum.com/demos/jobsportal-update/images/payment-icons.png" alt=""></div>
                </div>
            </div>

        </div>
    </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.0.0/turbolinks.min.js" data-turbolinks-eval="false" data-turbo-eval="false"></script> -->
    <!-- Bootstrap's JavaScript -->


    <script type="text/javascript" async="" charset="utf-8" src="https://www.gstatic.com/recaptcha/releases/2sJvksnKlEApLvJt2btz_q7n/recaptcha__en.js" crossorigin="anonymous" integrity="sha384-LemK5f1mYuwn+DuidBucDgDYKJdVkYJ6e33AxSMj6dqtdFjUZx6FY4ZyOY9nFK23"></script>
    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/jquery.min.js"></script>
    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/popper.js"></script>
    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/bootstrap.bundle.min.js"></script>



    <!-- Owl carousel -->

    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/jquery-ui.min.js"></script>

    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/owl.carousel.js"></script>

    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/admin_assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>

    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/admin_assets/global/plugins/Bootstrap-3-Typeahead/bootstrap3-typeahead.min.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL PLUGINS -->

    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/admin_assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>

    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/admin_assets/global/plugins/jquery.scrollTo.min.js" type="text/javascript"></script>


    <!-- Revolution Slider -->

    <script type="text/javascript" src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>

    <script type="text/javascript" src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>


    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/sweetalert.min.js"></script>

    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/jquery.validate.js"></script>

    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/jquery.validate.additional-methods.min.js"></script>
    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/dragula.min.js"></script>


    <script src="https://www.google.com/recaptcha/api.js?" async="" defer=""></script>



    <script>
        $(document).ready(function($) {
            $("form").submit(function() {
                $(this).find(":input").filter(function() {
                    return !this.value;
                }).attr("disabled", "disabled");
                return true;
            });
            $("form").find(":input").prop("disabled", false);
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function($) {
            $('#country_id').on('change', function(e) {
                e.preventDefault();
                filterStates(0);
            });
            $(document).on('change', '#state_id', function(e) {
                e.preventDefault();
                filterCities(0);
            });
            filterStates(0);
        });

        function filterStates(state_id) {
            var country_id = $('#country_id').val();
            if (country_id != '') {
                $.post("https://www.sharjeelanjum.com/demos/jobsportal-update/filter-states-dropdown", {
                        country_id: country_id,
                        state_id: state_id,
                        _method: 'POST',
                        _token: 'dWQSThWOrTMy01T95xVXyfir5JdgLkzNqN6fLUtu'
                    })
                    .done(function(response) {
                        $('#state_dd').html(response);
                        filterCities(0);
                    });
            }
        }

        function filterCities(city_id) {
            var state_id = $('#state_id').val();
            if (state_id != '') {
                $.post("https://www.sharjeelanjum.com/demos/jobsportal-update/filter-cities-dropdown", {
                        state_id: state_id,
                        city_id: city_id,
                        _method: 'POST',
                        _token: 'dWQSThWOrTMy01T95xVXyfir5JdgLkzNqN6fLUtu'
                    })
                    .done(function(response) {
                        $('#city_dd').html(response);
                    });
            }
        }
    </script>
    <!-- Custom js -->

    <script src="https://www.sharjeelanjum.com/demos/jobsportal-update/js/script.js"></script>

    <script type="text/JavaScript">

        $(document).ready(function(){

            $(document).scrollTo('.has-error', 2000);

            });

            function showProcessingForm(btn_id){		

            $("#"+btn_id).val( 'Processing .....' );

            $("#"+btn_id).attr('disabled','disabled');		

            }

		

		setInterval("hide_savedAlert()",7000);

        function hide_savedAlert(){

          $(document).find('.svjobalert').hide();

        }



        $(document).ready(function(){

            $.ajax({

                type: 'get',

                url: "https://www.sharjeelanjum.com/demos/jobsportal-update/check-time",

                success: function(res) {

                        $('.notification').html(res);

                   

                }

            });

        });

		

        </script>
    <script type="text/javascript">
        $("#jbsearch").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "https://www.sharjeelanjum.com/demos/jobsportal-update/jobs-autocomplete", // API endpoint to fetch suggestions
                    dataType: "json",
                    data: {
                        term: request.term
                    },
                    success: function(data) {
                        response(data);
                    }
                });
            },
            minLength: 2,
            select: function(event, ui) {
                // Action after selecting a suggestion
            }
        });

        $(document).ready(function() {
            $('.select2-multiple-jobtype').select2({
                placeholder: "Select Multiple Jobtypes",
                allowClear: true
            });
        })

        function showAdvanceSearch() {
            $("#showAdvanceSearchRow").show();
            $('.select2-multiple-jobtype').select2({
                placeholder: "Select Multiple Jobtypes",
                allowClear: true
            });

            $("#advSearch").hide();
        }
    </script>





</body>

</html>