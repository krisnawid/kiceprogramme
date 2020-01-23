<html>
<head>
<meta charset="UTF-8">
<link rel="apple-touch-icon" type="image/png" href="https://static.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
<meta name="apple-mobile-web-app-title" content="CodePen">
<link rel="shortcut icon" type="image/x-icon" href="https://static.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
<link rel="mask-icon" type="" href="https://static.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg" color="#111" />
<title>KICE - Congratulations!</title>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>
<style>
@font-face {
  font-family: 'Sigmar One';
  font-style: normal;
  font-weight: 400;
  src: local('Sigmar One Regular'), local('SigmarOne-Regular'), url(https://fonts.gstatic.com/s/sigmarone/v10/co3DmWZ8kjZuErj9Ta3do6Tpow.ttf) format('truetype');
}
body {
  background: -webkit-linear-gradient(333deg, rgba(11,179,244,1) 44%, rgba(45,236,10,1) 100%);
  color: #fff;
  overflow: hidden;
}
.congrats {
  position: absolute;
  top: 140px;
  width: 550px;
  height: 100px;
  padding: 20px 10px;
  text-align: center;
  margin: 0 auto;
  left: 0;
  right: 0;
}
h1 {
  transform-origin: 50% 50%;
  font-size: 50px;
  font-family: 'Sigmar One', cursive;
  cursor: pointer;
  z-index: 2;
  position: relative;
  top: 0;
  text-align: center;
  width: 100%;
}
h3 {
  transform-origin: 50% 50%;
  font-family: cursive;
  cursor: pointer;
  z-index: 2;
  position: relative;
  top: 0;
  text-align: center;
  width: 100%;
}
.blob {
  height: 50px;
  width: 50px;
  color: #ffcc00;
  position: absolute;
  top: 45%;
  left: 45%;
  z-index: 1;
  font-size: 30px;
  display: none;
}
</style>
</head>
<body translate="no">

    <div class="congrats">
    <h1>Congratulations!</h1>
    <h3>Your Data Have Been Submitted, Please Check Your Email From Us <br> <a href="/">Back To Home Page</a> </h3>
</div>
    <img src="https://bit.ly/20qKWK0" style="display:none">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js'></script>
    <script id="rendered-js">

    $(function() {
        var numberOfStars = 200;
        
        for (var i = 0; i < numberOfStars; i++) {
        $('.congrats').append('<div class="blob fa fa-star ' + i + '"></div>');
        }	

        animateText();
        
        animateBlobs();
    });

    $('.congrats').click(function() {
        reset();
        
        animateText();
        
        animateBlobs();
    });

    function reset() {
        $.each($('.blob'), function(i) {
            TweenMax.set($(this), { x: 0, y: 0, opacity: 1 });
        });
        
        TweenMax.set($('h1'), { scale: 1, opacity: 1, rotation: 0 });
    }

    function animateText() {
            TweenMax.from($('h1'), 0.8, {
            scale: 0.4,
            opacity: 0,
            rotation: 15,
            ease: Back.easeOut.config(4),
        });
    }
        
    function animateBlobs() {
        
        var xSeed = _.random(350, 380);
        var ySeed = _.random(120, 170);
        
        $.each($('.blob'), function(i) {
            var $blob = $(this);
            var speed = _.random(1, 5);
            var rotation = _.random(5, 100);
            var scale = _.random(0.8, 1.5);
            var x = _.random(-xSeed, xSeed);
            var y = _.random(-ySeed, ySeed);

            TweenMax.to($blob, speed, {
                x: x,
                y: y,
                ease: Power1.easeOut,
                opacity: 0,
                rotation: rotation,
                scale: scale,
                onStartParams: [$blob],
                onStart: function($element) {
                    $element.css('display', 'block');
                },
                onCompleteParams: [$blob],
                onComplete: function($element) {
                    $element.css('display', 'none');
                }
            });
        });
    }
    </script>
</body>
</html>
