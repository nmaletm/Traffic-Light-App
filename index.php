<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Traffic Lights</title>

    <link rel="stylesheet" type="text/css" href="/estil.css">
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js "></script>
    <script type="text/javascript" src="javascript.js"></script>
</head>
<body onload="init()">
    <div id="wrapper">
        <div id="page" title="Please, press button.">
            <canvas id="canvas" height="500px" width="300px">
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
</body>
</html>
