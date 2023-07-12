<!DOCTYPE html>
<html lang="en">

<style>
    .forms-section {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .section-title {
        font-size: 32px;
        letter-spacing: 1px;
        color: #25CCF7;
    }

    .forms {
        display: flex;
        align-items: flex-start;
        margin-top: 30px;
    }

    .form-wrapper {
        animation: hideLayer .3s ease-out forwards;

    }

    .form-wrapper.is-active {
        animation: showLayer .3s ease-in forwards;
    }

    @keyframes showLayer {
        50% {
            z-index: 1;
        }

        100% {
            z-index: 1;
        }
    }

    @keyframes hideLayer {
        0% {
            z-index: 1;
        }

        49.999% {
            z-index: 1;
        }
    }

    .switcher {
        position: relative;
        cursor: pointer;
        display: block;
        margin-right: auto;
        margin-left: auto;
        padding: 0;
        text-transform: uppercase;
        font-family: inherit;
        font-size: 16px;
        letter-spacing: .5px;
        color: #999;
        background-color: transparent;
        border: none;
        outline: none;
        transform: translateX(0);
        transition: all .3s ease-out;
        font-weight: bold
    }

    .form-wrapper.is-active .switcher-login {
        color: #25CCF7;
        transform: translateX(90px);
    }

    .form-wrapper.is-active .switcher-signup {
        color: #25CCF7;
        transform: translateX(-90px);
    }

    .underline {
        position: absolute;
        bottom: -5px;
        left: 0;
        overflow: hidden;
        pointer-events: none;
        width: 100%;
        height: 2px;
    }

    .underline::before {
        content: '';
        position: absolute;
        top: 0;
        left: inherit;
        display: block;
        width: inherit;
        height: inherit;
        background-color: currentColor;
        transition: transform .2s ease-out;
    }

    .switcher-login .underline::before {
        transform: translateX(101%);
    }

    .switcher-signup .underline::before {
        transform: translateX(-101%);
    }

    .form-wrapper.is-active .underline::before {
        transform: translateX(0);
    }

    .form {
        overflow: hidden;
        min-width: 260px;
        margin-top: 50px;
        padding: 30px 25px;
        border-radius: 5px;
        transform-origin: top;
    }

    .form-login {
        animation: hideLogin .3s ease-out forwards;
    }

    .form-wrapper.is-active .form-login {
        animation: showLogin .3s ease-in forwards;
    }

    @keyframes showLogin {
        0% {
            background: #d7e7f1;
            transform: translate(40%, 10px);
        }

        50% {
            transform: translate(0, 0);
        }

        100% {
            background-color: #25CCF7;
            transform: translate(35%, -20px);
        }
    }

    @keyframes hideLogin {
        0% {
            background-color: #25CCF7;
            transform: translate(35%, -20px);
        }

        50% {
            transform: translate(0, 0);
        }

        100% {
            background: #d7e7f1;
            transform: translate(40%, 10px);
        }
    }

    .form-signup {
        animation: hideSignup .3s ease-out forwards;
    }

    .form-wrapper.is-active .form-signup {
        animation: showSignup .3s ease-in forwards;
    }

    @keyframes showSignup {
        0% {
            background: #d7e7f1;
            transform: translate(-40%, 10px) scaleY(.8);
        }

        50% {
            transform: translate(0, 0) scaleY(.8);
        }

        100% {
            background-color: #25CCF7;
            transform: translate(-35%, -20px) scaleY(1);
        }
    }

    @keyframes hideSignup {
        0% {
            background-color: #25CCF7;
            transform: translate(-35%, -20px) scaleY(1);
        }

        50% {
            transform: translate(0, 0) scaleY(.8);
        }

        100% {
            background: #d7e7f1;
            transform: translate(-40%, 10px) scaleY(.8);
        }
    }

    .form fieldset {
        position: relative;
        opacity: 0;
        margin: 0;
        padding: 0;
        border: 0;
        transition: all .3s ease-out;
    }

    .form-login fieldset {
        transform: translateX(-50%);
    }

    .form-signup fieldset {
        transform: translateX(50%);
    }

    .form-wrapper.is-active fieldset {
        opacity: 1;
        transform: translateX(0);
        transition: opacity .4s ease-in, transform .35s ease-in;
    }

    .form legend {
        position: absolute;
        overflow: hidden;
        width: 1px;
        height: 1px;
        clip: rect(0 0 0 0);
    }

    .input-block {
        margin-bottom: 20px;
    }

    .input-block label {
        font-size: 14px;
        color: white;
    }

    .input-block input {
        display: block;
        width: 100%;
        margin-top: 8px;
        padding-right: 15px;
        padding-left: 15px;
        font-size: 16px;
        line-height: 40px;
        color: #25CCF7;
        background: #eef9fe;
        border: 1px solid #cddbef;
        border-radius: 2px;
    }

    .form [type='submit'] {
        opacity: 0;
        display: block;
        min-width: 120px;
        margin: 30px auto 10px;
        font-size: 18px;
        line-height: 40px;
        border-radius: 25px;
        border: none;
        transition: all .3s ease-out;
    }

    .form-wrapper.is-active .form [type='submit'] {
        opacity: 1;
        transform: translateX(0);
        transition: all .4s ease-in;
    }

    .btn-login {
        color: #25CCF7;
        background: white;
        transform: translateX(-30%);
    }

    .btn-signup {
        color: #25CCF7;
        background: #fbfdff;
        box-shadow: inset 0 0 0 2px;
        transform: translateX(30%);
    }
</style>

<head>
    <title>WISE TRIP | GLORY TECH</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">



</head>

<body>

    <header class="header-area header-sticky">
        @include('layout.header')
    </header>
    <!-- ***** Main Banner Area Start ***** -->
    <main id="main" style="min-height: 100vh;">
        @yield('content')

    </main>
    <!-- End #main -->
    <footer id="footer">
        @include('layout.footer')
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <script>
        const switchers = [...document.querySelectorAll('.switcher')]

        switchers.forEach(item => {
            item.addEventListener('click', function() {
                switchers.forEach(item => item.parentElement.classList.remove('is-active'))
                this.parentElement.classList.add('is-active')
            })
        })
    </script>

</body>

</html>
