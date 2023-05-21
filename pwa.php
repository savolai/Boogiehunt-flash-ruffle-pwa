<html><head>
<link rel="manifest" href="manifest.json">

<style>
body{
    touch-action: none;
}
.orientleft #shell {
    -webkit-transform: rotate(-90deg);
    -webkit-transform-origin:160px 160px;
    transition: all 500ms ease;
}

.orientright #shell {
    -webkit-transform: rotate(90deg);
    -webkit-transform-origin:230px 230px;
    transition: all 500ms ease;
} 
.portrait div{
    -webkit-transform: rotate(90deg);
    transition: all 500ms ease;
/*    -webkit-transform-origin: 230px 280px;*/
/*    -webkit-transform-origin: top left;*/
}
.portrait div *{
opacity:0;
    transition: all 500ms ease;
}
.landscape div *{
opacity:100;
    transition: all 500ms ease;
}
.portrait span{
opacity:100;
color:white;
    transition: all 500ms ease;
}
.landscape span{
opacity:0;
color:white;
    transition: all 500ms ease;
}
.landscape div{
    -webkit-transform: rotate(0deg);
    transition: all 500ms ease;
/*    -webkit-transform-origin: 230px 280px;*/
/*    -webkit-transform-origin: top left;*/
}
.portrait-onready div {
    -webkit-transform: rotate(90deg);
    transition: all 500ms ease;
/*    -webkit-transform-origin: 165px 150px;
    -webkit-transform-origin: 80px 250px;*/
/*    -webkit-transform-origin: top left;*/
}

body, html{
margin:0;padding:0;background-color:#990000;
/*max-width:408px;max-height:173;*/
}
details > summary {
  border: none;
  cursor: pointer;
}
</style>
<script src="ruffle/ruffle.js"></script>
 <script
			  src="https://code.jquery.com/jquery-3.7.0.min.js"
			  integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
			  crossorigin="anonymous"></script>
<script>
if (typeof navigator.serviceWorker !== 'undefined') {
    navigator.serviceWorker.register('sw.js')
}

document.ondblclick = function(e) {
    e.preventDefault();
}
window.RufflePlayer.config = {
    autoplay: "auto"
};
/*window.addEventListener('orientationchange', function () {
    if (window.orientation == -90) {
        document.getElementById('orient').className = 'orientright';
    }
    if (window.orientation == 90) {
        document.getElementById('orient').className = 'orientleft';
    }
    if (window.orientation == 0) {
        document.getElementById('orient').className = '';
    }
    event.preventDefault();
}, true);
function changeOrientation(event) {
    if (window.orientation == -90) {
        document.getElementById('orient').className = 'orientright';
    }
    if (window.orientation == 90) {
        document.getElementById('orient').className = 'orientleft';
    }
    if (window.orientation == 0) {
        document.getElementById('orient').className = '';
	}

   $('body').scrollTop(0);
    event.preventDefault();
}*/
function changeOrientation(event) {
// ('ontouchstart' in window) tells us if this is a touch device, which we probably want to rotate initially
   if (Math.abs(window.orientation) != 90 && ('ontouchstart' in window)){
       $(document.body).addClass('portrait');
   } 
   else {
       $(document.body).removeClass('portrait').removeClass('portrait-onready');
   }
   $('body').scrollTop(0);
document.body.scrollTop = document.documentElement.scrollTop = 0;

    event.preventDefault();
}

$(window).bind('orientationchange', function(e, onready){
   if(onready){
       $(document.body).addClass('portrait-onready');
       $(document.body).removeClass('landscape');
   }
   if (Math.abs(window.orientation) != 90){
       $(document.body).addClass('portrait');
       $(document.body).removeClass('landscape');
   } 
   else {
       $(document.body).removeClass('portrait').removeClass('portrait-onready');
       $(document.body).addClass('landscape');
   }
//   $('body').scrollTop(0);
document.body.scrollTop = document.documentElement.scrollTop = 0;
});
$(window).trigger('orientationchange', true); // fire the orientation change event at the start, to make sure 

</script>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1, maximum-scale=1" />
</head><body onload="changeOrientation(event)" onorientationchange="changeOrientation(event);"><!--content-->
<!-- 173 408 -->
<span style="position:absolute;height:100%;width:90%; display: flex; align-items: center; padding:5%; justify-content: center;color:white;font-size:2em;font-family:sans-serif;"><span>&#8634; Please rotate device to landscape orientation.</span></span>
<div style="  /*display: flex;   align-items: center; justify-content: center;*/position:fixed;  position: -webkit-sticky; /* Safari */  position: sticky;  top: 0;   " id="orient"><object 
type="application/x-shockwave-flash" 
data="boogiehunt_loader.swf?path=boogiehunt.swf" width="100%" 
height="100%"><param name="bgcolor" value="#990000" /><param name="movie" 
value="boogiehunt_loader.swf?path=boogiehunt.swf" /><a href="http://www.flash.com/download" class="external"><img src="boogiehunt.gif" 
width="200" height="100" alt="Sorry, but this game requires the 
Macromedia Flash 
Player version 6 or greater to function. Click to download or go to 
http://www.flash.com/download." /></a>
</object></div>
</body></html>
