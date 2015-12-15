<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>@yield('tittle')</title>

        <meta name="description" content="AppUI is a Web App Bootstrap Admin Template created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="/images/favicon.png">
        <link rel="apple-touch-icon" href="/images/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="/images/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="/images/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="/images/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="/images/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="/images/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="/images/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="/images/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="/assets/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="/assets/css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="/assets/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- Login Container -->
        @yield('content_auth')

        <!-- jQuery, Bootstrap, jQuery plugins and Custom JS code -->
        <script src="/assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="/assets/js/vendor/bootstrap.min.js"></script>
        <script src="/assets/js/plugins.js"></script>
        <script src="/assets/js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="/assets/js/pages/readyLogin.js"></script>
        <script>$(function(){ ReadyLogin.init(); });</script>
    </body>
</html>