<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content ="width=device-width, user-scalable=YES, initial-scale=1, minimum-scale=1, maximum-scale=1">  <title>Traffic Lights app</title>

    <link rel="stylesheet" type="text/css" href="/css/estil.css">


    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <link rel="apple-touch-startup-image" href="" />
    <link rel="apple-touch-icon" href="/img/icono.png">
    <link rel="shortcut icon" href="/img/icono.png">
</head>
<body onload="init()" class="tancat">
    <div class="candau"></div>
    <div class="message-button message-wc" data-text="Visita al lavabo"></div>
    <div class="message-button message-exit" data-text="Surt/entra un pacient"></div>
    <div class="message-button message-musica" data-text="Algú pot tornar a obrir la música"></div>

    <div id="wrapper">
        <div id="page" title="Please, press button.">
            <canvas id="canvas" height="430px" width="200px">
                <p>Your browser doesn't support canvas.</p>
            </canvas>
        </div>
    </div>
    <div id="clouds">
        <div class="cloud x1"></div>
        <!-- Time for multiple clouds to dance around -->
        <div class="cloud x2"></div>
        <div class="cloud x3"></div>
        <div class="cloud x4"></div>
        <div class="cloud x5"></div>
    </div>
    <div class="missatges"></div>
    
<script type="text/javascript">
var trafficLightId = 1;
</script>
    <script src="http://js.pusher.com/2.1/pusher.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js "></script>
    <script type="text/javascript" src="/js/jquery.rest.min.js"></script>
    <script type="text/javascript" src="/js/javascript.js"></script>


</body>
</html>
