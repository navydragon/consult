<!DOCTYPE html>
<html lang="ru-RU" class="light-style">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Консультационный центр</title>

    <!-- Main font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900" rel="stylesheet">

    <!-- Icons. Uncomment required icon fonts -->
     <link rel="stylesheet" href="{{ mix('/vendor/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ mix('/vendor/fonts/ionicons.css') }}">
    <!-- <link rel="stylesheet" href="{{ mix('/vendor/fonts/linearicons.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ mix('/vendor/fonts/open-iconic.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ mix('/vendor/fonts/pe-icon-7-stroke.css') }}"> -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/font-size/css/rvfs.css">
    <!-- icon css-->
    <link rel="stylesheet" href="assets/elagent-icon/style.css">
    <link rel="stylesheet" href="assets/font-awesome/css/all.css">
    <link rel="stylesheet" href="assets/niceselectpicker/nice-select.css">
    <link rel="stylesheet" href="assets/animation/animate.css">
    <link rel="stylesheet" href="assets/prism/prism.css">
    <link rel="stylesheet" href="assets/prism/prism-coy.css">
    <link rel="stylesheet" href="assets/mcustomscrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Layout helpers -->
    <script src="{{ mix('/vendor/js/layout-helpers.js') }}"></script>

    <!-- IE10 polyfills (remove if you don't plan to support IE10) -->
    <script>
        if (navigator.userAgent.match('MSIE 10.0;')) {
            document.write('<script src="https:\/\/cdn.polyfill.io\/v2\/polyfill.min.js?features=Intl.~locale.en"><\/script>');
        }
    </script>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/pre-loader.js"> </script>
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap-select.min.js"></script>
    <script src="assets/font-size/js/rv-jquery-fontsize-2.0.3.js"></script>
    <script src="js/parallaxie.js"></script>
    <script src="js/TweenMax.min.js"></script>
    <script src="js/anchor.js"></script>
    <script src="assets/wow/wow.min.js"></script>
    <script src="assets/prism/prism.js"></script>
    <script src="assets/mailchimp/plugins.js"></script>
    <script src="assets/niceselectpicker/jquery.nice-select.min.js"></script>
    <script src="assets/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar-example3" data-offset="86" data-scroll-animation="true" class="doc">

    <div id="app"></div>
   
        
    <script src="{{ mix('/entry-point.js') }}"></script>
 
    
    
</body>
</html>
