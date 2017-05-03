<!DOCTYPE html>
<html>
<head>
    <title>Marketing Communication</title>

    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel='shortcut icon' href='{{URL::to('/')}}/images/favicon.ico' type='image/x-icon'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/css/style.css">
    <script src="{{URL::to('/')}}/jquery/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webshim/1.16.0/dev/polyfiller.js"></script>
    <script>
        webshim.activeLang('en');
        webshims.polyfill('forms');
        webshims.cfg.no$Switch = true;
    </script>
    <script src="{{URL::to('/')}}/js/js_functions.js"></script>
</head>
<body>
<header class="container">
    <img alt="" src="{{URL::to('/')}}/images/logo.png" class="img-responsive" id="logo">
    Marketing Communication
</header>
<body> @yield('content')
</body>
</html>