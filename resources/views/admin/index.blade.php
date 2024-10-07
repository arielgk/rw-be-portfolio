<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Socialyz</title>

    <meta property="og:title" content="Socialyz">

    <link rel="icon" href="/favicon.ico">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <link rel="stylesheet" type="text/css" href="{{ URL::to("/") }}/fonts/fonts.min.css" />
    <style>
        body{
            /*background:#222329;*/
        }

        .spinner-animation{
            width: 100px;
            height: 100px;
            position: relative;

        }

        .spinner-animation > .spinner{
            width: 100px;
            height: 100px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform-origin: top left;
            transform: translate(-50%,-50%);
            /*border-radius: 50%;*/
            /*box-shadow: inset 3px 3px 3px red;*/
            animation: spinner 1.2s linear infinite;
        }




        @keyframes spinner {
            0% {
                transform: rotate(0deg) translate(-50%,-50%);
            }
            100% {
                transform: rotate(360deg) translate(-50%,-50%);
            }
        }
    </style>

    <base href="/" >

</head>

<body>
<div id="root">


</div>
<script src="{{ URL::to('/') }}/js/admin-app.js"></script>
</body>
</html>
