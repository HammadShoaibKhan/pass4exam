
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      
      <title>Online Practice Test</title>
      <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
      


<style type="text/css">
  /* Magnific Popup CSS */
.mfp-bg {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1042;
  overflow: hidden;
  position: fixed;
  background: #0b0b0b;
  opacity: 0.8; }

.mfp-wrap {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1043;
  position: fixed;
  outline: none !important;
  -webkit-backface-visibility: hidden; }

.mfp-container {
  text-align: center;
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  padding: 0 8px;
  box-sizing: border-box; }

.mfp-container:before {
  content: '';
  display: inline-block;
  height: 100%;
  vertical-align: middle; }

.mfp-align-top .mfp-container:before {
  display: none; }

.mfp-content {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  margin: 0 auto;
  text-align: left;
  z-index: 1045; }

.mfp-inline-holder .mfp-content,
.mfp-ajax-holder .mfp-content {
  width: 100%;
  cursor: auto; }

.mfp-ajax-cur {
  cursor: progress; }

.mfp-zoom-out-cur, .mfp-zoom-out-cur .mfp-image-holder .mfp-close {
  cursor: -moz-zoom-out;
  cursor: -webkit-zoom-out;
  cursor: zoom-out; }

.mfp-zoom {
  cursor: pointer;
  cursor: -webkit-zoom-in;
  cursor: -moz-zoom-in;
  cursor: zoom-in; }

.mfp-auto-cursor .mfp-content {
  cursor: auto; }

.mfp-close,
.mfp-arrow,
.mfp-preloader,
.mfp-counter {
  -webkit-user-select: none;
  -moz-user-select: none;
  user-select: none; }

.mfp-loading.mfp-figure {
  display: none; }

.mfp-hide {
  display: none !important; }

.mfp-preloader {
  color: #CCC;
  position: absolute;
  top: 50%;
  width: auto;
  text-align: center;
  margin-top: -0.8em;
  left: 8px;
  right: 8px;
  z-index: 1044; }
  .mfp-preloader a {
    color: #CCC; }
    .mfp-preloader a:hover {
      color: #FFF; }

.mfp-s-ready .mfp-preloader {
  display: none; }

.mfp-s-error .mfp-content {
  display: none; }

button.mfp-close,
button.mfp-arrow {
  overflow: visible;
  cursor: pointer;
  background: transparent;
  border: 0;
  -webkit-appearance: none;
  display: block;
  outline: none;
  padding: 0;
  z-index: 1046;
  box-shadow: none;
  touch-action: manipulation; }

button::-moz-focus-inner {
  padding: 0;
  border: 0; }

.mfp-close {
  width: 44px;
  height: 44px;
  line-height: 44px;
  position: absolute;
  right: 0;
  top: 0;
  text-decoration: none;
  text-align: center;
  opacity: 0.65;
  padding: 0 0 18px 10px;
  color: #FFF;
  font-style: normal;
  font-size: 28px;
  font-family: Arial, Baskerville, monospace; }
  .mfp-close:hover,
  .mfp-close:focus {
    opacity: 1; }
  .mfp-close:active {
    top: 1px; }

.mfp-close-btn-in .mfp-close {
  color: #333; }

.mfp-image-holder .mfp-close,
.mfp-iframe-holder .mfp-close {
  color: #FFF;
  right: -6px;
  text-align: right;
  padding-right: 6px;
  width: 100%; }

.mfp-counter {
  position: absolute;
  top: 0;
  right: 0;
  color: #CCC;
  font-size: 12px;
  line-height: 18px;
  white-space: nowrap; }

.mfp-arrow {
  position: absolute;
  opacity: 0.65;
  margin: 0;
  top: 50%;
  margin-top: -55px;
  padding: 0;
  width: 90px;
  height: 110px;
  -webkit-tap-highlight-color: transparent; }
  .mfp-arrow:active {
    margin-top: -54px; }
  .mfp-arrow:hover,
  .mfp-arrow:focus {
    opacity: 1; }
  .mfp-arrow:before,
  .mfp-arrow:after {
    content: '';
    display: block;
    width: 0;
    height: 0;
    position: absolute;
    left: 0;
    top: 0;
    margin-top: 35px;
    margin-left: 35px;
    border: medium inset transparent; }
  .mfp-arrow:after {
    border-top-width: 13px;
    border-bottom-width: 13px;
    top: 8px; }
  .mfp-arrow:before {
    border-top-width: 21px;
    border-bottom-width: 21px;
    opacity: 0.7; }

.mfp-arrow-left {
  left: 0; }
  .mfp-arrow-left:after {
    border-right: 17px solid #FFF;
    margin-left: 31px; }
  .mfp-arrow-left:before {
    margin-left: 25px;
    border-right: 27px solid #3F3F3F; }

.mfp-arrow-right {
  right: 0; }
  .mfp-arrow-right:after {
    border-left: 17px solid #FFF;
    margin-left: 39px; }
  .mfp-arrow-right:before {
    border-left: 27px solid #3F3F3F; }

.mfp-iframe-holder {
  padding-top: 40px;
  padding-bottom: 40px; }
  .mfp-iframe-holder .mfp-content {
    line-height: 0;
    width: 100%;
    max-width: 900px; }
  .mfp-iframe-holder .mfp-close {
    top: -40px; }

.mfp-iframe-scaler {
  width: 100%;
  height: 0;
  overflow: hidden;
  padding-top: 56.25%; }
  .mfp-iframe-scaler iframe {
    position: absolute;
    display: block;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #000; }

/* Main image in popup */
img.mfp-img {
  width: auto;
  max-width: 100%;
  height: auto;
  display: block;
  line-height: 0;
  box-sizing: border-box;
  padding: 40px 0 40px;
  margin: 0 auto; }

/* The shadow behind the image */
.mfp-figure {
  line-height: 0; }
  .mfp-figure:after {
    content: '';
    position: absolute;
    left: 0;
    top: 40px;
    bottom: 40px;
    display: block;
    right: 0;
    width: auto;
    height: auto;
    z-index: -1;
    box-shadow: 0 0 8px rgba(0, 0, 0, 0.6);
    background: #444; }
  .mfp-figure small {
    color: #BDBDBD;
    display: block;
    font-size: 12px;
    line-height: 14px; }
  .mfp-figure figure {
    margin: 0; }

.mfp-bottom-bar {
  margin-top: -36px;
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  cursor: auto; }

.mfp-title {
  text-align: left;
  line-height: 18px;
  color: #F3F3F3;
  word-wrap: break-word;
  padding-right: 36px; }

.mfp-image-holder .mfp-content {
  max-width: 100%; }

.mfp-gallery .mfp-image-holder .mfp-figure {
  cursor: pointer; }

@media screen and (max-width: 800px) and (orientation: landscape), screen and (max-height: 300px) {
  /**
       * Remove all paddings around the image on small screen
       */
  .mfp-img-mobile .mfp-image-holder {
    padding-left: 0;
    padding-right: 0; }
  .mfp-img-mobile img.mfp-img {
    padding: 0; }
  .mfp-img-mobile .mfp-figure:after {
    top: 0;
    bottom: 0; }
  .mfp-img-mobile .mfp-figure small {
    display: inline;
    margin-left: 5px; }
  .mfp-img-mobile .mfp-bottom-bar {
    background: rgba(0, 0, 0, 0.6);
    bottom: 0;
    margin: 0;
    top: auto;
    padding: 3px 5px;
    position: fixed;
    box-sizing: border-box; }
    .mfp-img-mobile .mfp-bottom-bar:empty {
      padding: 0; }
  .mfp-img-mobile .mfp-counter {
    right: 5px;
    top: 3px; }
  .mfp-img-mobile .mfp-close {
    top: 0;
    right: 0;
    width: 35px;
    height: 35px;
    line-height: 35px;
    background: rgba(0, 0, 0, 0.6);
    position: fixed;
    text-align: center;
    padding: 0; } }

@media all and (max-width: 900px) {
  .mfp-arrow {
    -webkit-transform: scale(0.75);
    transform: scale(0.75); }
  .mfp-arrow-left {
    -webkit-transform-origin: 0;
    transform-origin: 0; }
  .mfp-arrow-right {
    -webkit-transform-origin: 100%;
    transform-origin: 100%; }
  .mfp-container {
    padding-left: 6px;
    padding-right: 6px; } }
</style>







      <style>
/*my style start from here*/
body {

}
html{
    scroll-behavior: smooth;
}
@media (min-width: 1300px){
.container {
    min-width: 1300px;
}
}
body{
    background:#F6F8F9 !important;
}
.container-fluid{
    padding-left:1%;
 
}
.mainnav {
    position:relative;
    padding: 9px;
    box-shadow: 0px 0px 8px 1px #ccc;
    background: white;
    max-height:100px;
}


.imagetopnav {
    float: left;
    padding-top: 2px;
}

.textdivtopnav {
    /*position: absolute;*/
    /*left: 41%;*/
    text-align:center;
}

.textdivtopnav h2 {
    font-weight: bold;
    color: #656565;
    font-size: 18px;
    margin-bottom: 0px;
    margin-top: 10px;

}


.case_study h4{
    padding-top:10px;
    color: #1b57b0;
    font-weight:bold;
}

ul.nav.nav-pills.mainpills li a {
    border-radius: 50%;
    background: #f2f2f2;
    width: 50px;
    height: 50px;
    padding: 9px 16px;
    font-size: 19px;
    border: 2px solid black;
}

ul.nav.nav-pills.mainpills li.active a {
    background-color: #006DB3;
    font-weight: bold;
    padding: 11px 0px;
    border: 0px;
    text-align: center;
}

ul.nav.nav-pills.mainpills li {
    width: 33%;
    /*height: 50px;*/
}

.mainpills li:nth-child(2) {
    text-align: center;
}
ul.nav.nav-pills.mainpills li:nth-child(2) a {
    margin: 0 auto;
}

ul.nav.nav-pills.mainpills li:last-child a {
    float: right;
}
.liner {
    height: 2px;
    background: #000;
    position: absolute;
    width: 83%;
    margin: 0 auto;
    left: 0;
    right: 0;
    /*top: 47%;*/
    z-index: 0;

    top: 24%;
}
@media(min-width: 1200px){
    .tabscustomsize {
        margin-left: 30%;
        width: 40%;
        margin-top: 35px;
    }
}

.maintabs {
    margin-top: 50px;
}
.mainpills li:last-child p{
    /* float: right; */
    display: block;
    margin-top: 64px !important;
}

ul.nav.nav-pills.mainpills li:last-child:after {content: "";clear: both;display: inline-block;/* display: block; */}

ul.nav.nav-pills.mainpills li:last-child {
    text-align: right;
}

ul.nav.nav-pills.mainpills p {
    margin-top: 15px;
    font-size: 17px;
    /*font-size: 20px;*/ 
    font-weight: bolder;
}

.mainpills li:last-child a {
    margin-right: 14px;
}

.mainpills li:first-child a {
    margin-left: 7px;
}
ul.nav.nav-pills.mainpills li.active p {
    color: #006DB3;
}
ul.nav.nav-pills.mainpills li a {
    font-weight: bolder;
}
.margtop100 {
    margin-top: 0px;
}
.columnstyling {
    background: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    border-left: 5px solid #006DB3;
    margin-bottom: 50px;
    margin-top: 40px;
    box-shadow: 0px 0px 27px 0px #dddcdc;
}

.columnstyling .radio label h4 {
    margin-top: 0px;
}
.columnstyling {
    display: block;
    position: relative;
    /* padding-left: 35px; */
    margin-bottom: 12px;
    cursor: pointer;
    /* font-size: 22px; */
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.columnstyling input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
    height: 20px;
    width: 20px;

  background-color: #fff;
  border-radius: 50%;
  border: 2px solid #595959;
}

/* On mouse-over, add a grey background color */
.columnstyling:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.columnstyling input:checked ~ .checkmark {
  background-color: #006DB3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.columnstyling input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    /* background: white; */
}
.columnstyling label {
    padding-left: 40px;
}

.columnstylings {
    background: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px 10px;
    border-left: 5px solid #006DB3;
    margin-bottom: 15px;
    margin-top: 21px;
    box-shadow: 0px 0px 27px 0px #dddcdc;
}

.Questype {
    background: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    border-left: 5px solid #006DB3;
    box-shadow: 0px 0px 27px 0px #dddcdc;
    float:left;
    /*margin-bottom: 50px;*/
    /*margin-top: 40px;*/
    width:100%;
}

.columnstylings  h4 {
    margin-top: 0px;
}
input#quesrange {
    float: left;
    width: 80%;
    margin-right: 22px;
}
input#passingrange {
    float: left;
    width: 75%;
    margin-right: 22px;
}
.liner2 {
    height: 2px;
    background: #006DB3;
    position: absolute;
    width: 33%;
    margin: 0 auto;
    left: 61px;
    /* right: 0; */
    /* top: 47%; */
    z-index: 0;
    top: 19%;
    opacity: 0;
}

.columnstyl {
    background: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px 10px;
    border-left: 5px solid #006DB3;
    margin-bottom: 29px;
    margin-top: 19px;
    box-shadow: 0px 0px 27px 0px #dddcdc;
}

.columnstyl  h4 {
    margin-top: 0px;
}
.slider::-webkit-slider-thumb{
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #006DB3;
  cursor: pointer;
  border-radius:20px
}
.slider {
  -webkit-appearance: none;
  width: 75%;
  height: 5px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.examscountinnserarea.slider {
    -webkit-appearance: none;
    width: 45%;
    height: auto !important;
    background: transparent;
    outline: none;
    -webkit-transition: .2s;
    transition: opacity .2s;
    float: left;
    position: fixed !important;
    bottom: 17px;
    z-index: 9999;
}
.slider:hover {
  opacity: 1;
}
/*input#quesrange::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #006DB3;
  cursor: pointer;
}*/

.columnstylings h4,.columnstyl h4, .Questype h4 {
    color: #006DB3;
    font-weight: bold;
    margin-bottom: 25px;
}

.columnstylings input,.columnstyl input {
    margin-top: 8px;
    width: 75%;
    float: left;
    margin-right: 30px;
}

.columnstylings p,.columnstyl p {
    font-size: 17px;
    font-weight: bold;
    margin-top: -2px;
}

.columnstylings p span,.columnstyl p span {
    color: #006DB3;
}
.Questype label {
    padding-left: 32px;
    padding-right: 20px;
}
.Questype input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.Questype .checkmark {
    position: absolute;
    top: 0px;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
    border-radius: 0%;
    border: 0px solid #595959;
}
.Questype.withouttime label {
    margin-left: 11px;
}
/* On mouse-over, add a grey background color */
.Questype:hover input ~  .checkmark {
  /*background-color: #ccc;*/
}

/* When the checkbox is checked, add a blue background */
.Questype input:checked ~  .checkmark {
  background-color: #006DB3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.Questype .checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.Questype input:checked ~ .Questype .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.Questype .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.Questype label {
    margin-bottom: 10px;
    color: #ffd200;
}
.roundedbuttonclass {
    border-radius: 32px;
    padding: 10px 30px;
}
.timeallowedarea label {
    font-size: 18px;
    text-align: center;
    float: left;
    color: #006DB3;
    padding-right: 10px;
    padding-top: 4px;
}

.timeallowedarea select {
    width: 8%;
    float: left;
    background: transparent;
    border-radius: 0px;
    border: 0px;
    box-shadow: none;
    background-image: linear-gradient(45deg, transparent 50%, #204d74 50%), linear-gradient(135deg, #204d74 50%, transparent 50%), linear-gradient(to right, transparent, transparent);
    background-position: calc(100% - 13px) calc(1em + 0px), calc(100% - 8px) calc(1em + 0px), calc(100% - 15.5em) 10.5em;
    background-size: 5px 5px, 5px 5px, 1px 1.5em;
    background-repeat: no-repeat;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    border: 1px solid #006DB3;
}
.timeallowedarea select:nth-child(2){
    /*border-right:none !important;*/
    margin-right:20px;
    margin-left:10px;
}
.timeallowedarea select:nth-child(3) {
    margin-right: 10px;
}
.timeallowedarea:after {
    content: "";
    display: table;
    clear: both;
}
.timeallowedarea {
    margin: 10px 0px;
    /*float: left;*/
    width: 100%;
}
.examssetarea label {font-size: 20px;text-align: center;float: left;     padding-right: 10px;}

.examssetarea select {
    width: 50%;
    float: left;
    background: transparent;
    border-radius: 0px;
    box-shadow: none;
    background-image: linear-gradient(45deg, transparent 50%, #204d74 50%), linear-gradient(135deg, #204d74 50%, transparent 50%), linear-gradient(to right, transparent, transparent);
    background-position: calc(100% - 13px) calc(1em + 0px), calc(100% - 8px) calc(1em + 0px), calc(100% - 15.5em) 10.5em;
    background-size: 5px 5px, 5px 5px, 1px 1.5em;
    background-repeat: no-repeat;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    border: 1px solid #006DB3;
}
/*.examssetarea select:nth-child(2){*/
/*    border-right:none !important;*/
/*}*/
.examssetarea:after {
    content: "";
    display: table;
    clear: both;
}
.examssetarea {
    margin: 10px 0px;
}



.timmerarea {
    float: right;
}
.timmerarea h4 {
    float: left;
    margin-top: 13px;
    margin-right: 15px;
}

.timmerarea button {
    padding: 12px 22px;
    font-size: 16px;
    font-weight: bold;
}

.timmerarea {
    margin-top: 0px;
}




/* Create a custom checkbox */
.mainexamarea .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
    border-radius: 0%;
    border: 2px solid #595959;
}

/* On mouse-over, add a grey background color */
.mainexamarea:hover input[type=checkbox] ~  .checkmark {
  /*background-color: #ccc;*/
}

/* When the checkbox is checked, add a blue background */
.mainexamarea input[type=checkbox]:checked ~ .checkmark {
  background-color: #006DB3;
  border-radius:0px;
  color:black;
}
.mainexamarea input[type=checkbox] ~ .checkmark {
    border-radius: 0px !important;
}
/* Create the checkmark/indicator (hidden when not checked) */
.mainexamarea .checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.mainexamarea input[type=checkbox]:checked ~ .mainexamarea .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.mainexamarea .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
.mainexamarea input[type=checkbox] {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}
.mainexamarea h2 {
    float: left;
    font-size: 22px;
    margin-top: 0px;
    font-weight: bold;
    color: #006DB3;
}

.mainexamarea label {
    float: right;
    /* width: 50%; */
    padding-left: 36px;
}
.innermainexamarea:after {
    content: "";
    display: table;
    clear: both;
}
.mainquestion {
    overflow-y: auto;
    padding: 0px 20px;
    height: 65vh;
    scrollbar-color: #ffd200 #1b57b0;
  scrollbar-width: thin;
}

.mainexamarea {
    /*min-height: 85vh;*/
  
}
.innermainexamarea {
    margin-bottom: 0px;
    padding: 12px 20px;
    border-bottom: 1px solid #F4F4F4;
    
}

.innermainexamarea h2 {
    margin-bottom: 0px;
    font-size: 20px;
}

.borderRight hr {
    margin-top: 12px;
}

.borderRight {
    position: relative;
    padding: 0px;
}

.btnnxtarea {
    position: fixed;
    width: 100%;
    bottom: 0px;
    padding: 20px 1%;
    background: white;
    box-shadow: 0px 0px 24px -6px #ccc;
    left: 0px;
    z-index: 999999;
}
.examscounting {
    /*position: absolute;*/
    top: -20px;
    height: 82vh;
    background: white;
    /*border-left: 1px solid #ccc;*/
    width: 100%;
}
.examscounting h4 {
    text-align: center;
    margin-top: 0px;
    margin-bottom: 32px;
    font-weight: bold;
}
.examscountinnserarea ul {
    list-style: none;
    padding-left: 0px;
}

.examscountinnserarea ul li {
    float: left;
    /*border: 1px solid #ccc;*/
    /*border-radius: 50%;*/
    /*width: 30px;*/
    /*height: 30px;*/
    /*text-align: center;*/
    /*margin-top: 10px;*/
    /*padding: 7px 0px;*/
    /*position: relative;*/
    /* margin-right: 7px; */
    margin: 4px 3px;
    /*font-size: 12px;*/
    /*margin-bottom: 10px;*/
}


.examscountinnserarea:after {
    content: "";
    display: table;
    clear: both;
}
.borderleft {
    padding-left: 0px;
}
.Reviewbtnarea {
    text-align: center;
    padding: 20px;
    margin-top: 6px;
    /*border-top: 1px solid #ccc;*/
}
.btnnxtarea .btn {
    border-radius: 23px;
    padding: 8px 27px;
    font-size: 16px;
    height: 40px;
    margin-right:10px;
}
.Reviewbtnarea a {
    border-radius: 40px;
    padding: 5px 20px;
}
.hideThis {
    display: none !important;
}
.correctAnswers {
    font-size: 20px;
    /*padding: 15px;*/
    float: left;
    margin-top: 16px;
    width: 100%;
    border: 1px solid #ccc;
    margin-bottom: 50px;
}
.correctAnswers.showThis span.AnsTxt {
    text-decoration: underline;
    color: #ffd200;
}

.AnsTxt {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 20px;
    float: left;
    width: 100%;
}
.mainquestion h3 {
    font-weight: bold;
    font-size: 20px;
}
.answerBox label {
    float: none;
}
.answerBox input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
    height: 20px;
    width: 20px;

  background-color: #fff;
  border-radius: 50%;
  border: 2px solid #595959;
}

/* On mouse-over, add a grey background color */
.answerBox:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.answerBox input:checked ~ .checkmark {
  background-color: #006DB3;
    color: white;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.answerBox input:checked ~ .checkmark:after {
  display: block;
    border: 0px;
}

/* Style the indicator (dot/circle) */
.answerBox .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    /* background: white; */
}
.answerBox input:checked ~ .checkmark {
    background-color: #006DB3;
}
.answerBox .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    /* background-color: #eee; */
    border-radius: 50% !important; 
    border: 2px solid #595959;
    height: 24px;
    width: 24px;
    font-weight: bold;
    text-align: center;
    line-height: 20px;
    font-size: 12px;
}

.examscountinnserarea ul li.active:after {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    /*left: 10px;*/
    left: 9px;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-bottom: 10px solid #006DB3;
    bottom: -5px;
    right: 0px;
}
.answerBox label strong:nth-child(2) {
    position: absolute;
    top: 6px;
    left: -8px;
    height: 18px;
    width: 18px;
    /* background-color: #eee; */
    border-radius: 50%;
    font-weight: bold;
    font-size: 14px;
    text-align: center;
    padding: 5px 5px 5px;
    border: 1px solid #ccc;
    color: #8b8585;
}
.answerBox .radio {
    margin-bottom: 20px;
}

.revQItem {
    
    cursor: pointer;
    background: #D60404;
    color: white;
    border-radius: 50%;
    text-align: center;
    width: 30px;
    height: 27px;
    font-size: 12px;
    line-height: 28px;
    
}
.revQItem.marked {
    background: #FFB100 !important;
    /*background-size: 15px !important;*/
}
.revQItem.completed {
    background: #67BB04;
    background-size: 15px !important;
}
.innermainexamarea h2 small {
    font-weight: bold;
}

@media (max-width: 768px){
    .examscountinnserarea {
        height: 27vh !important;
    }
    .examscounting {
        position: relative;
     
        top: 0px;
        height: auto;
        border: 1px solid #ccc   
    }
    .btnnxtarea {
        position: fixed;
        bottom: 0px;
    }
    .textdivtopnav {
         /*position: relative; */
         /*left: auto; */
         text-align:left;
    }
    .examscounting h4{
        margin-top: 20px;
    }
    .casestudy {
        position: relative !important;
        top: 0px !important;
        left: 0px !important;
    }
    .timmerarea {
        margin-top: -45px;
    }
    .btnnxtarea .btn {
        border-radius: 23px;
         padding: 5px 10px; 
        font-size: 16px;
         height: auto ; 
         margin-right: 0px; 
    }
    .questionBox .col-lg-3 {
        padding-left: 0px;
        padding-right: 0px;
    }
    .openReviewPopup{
        position:fixed !important;
    }
    .activeSlide:after {
        content: "\f0de";
        font-family: fontawesome;
        position: absolute;
        color: #006DB3;
        top: 70px !important;
    }
    .activeSlide:before {
        content: "\f0dd";
        position: absolute;
        font-family: fontawesome;
        color: #006DB3;
        top: -8px !important;
    }
    .ui-widget {
        height: auto !important;
        margin-bottom: 20px;
        max-height: 200px !important;
    }
}
.piecharttext {
    text-align: center;
    /*background: #f1f1f1;*/ 
    padding: 22px 0px;
    border: 1px solid #f1f1f1;
}
.activeSlide .defaultbtn {
    background: #ccc;
}
.piecharttext h3 {
    margin-bottom: 0px;
    font-weight: bold;
    font-size: 18px;
}

.piecharttext h3 span {
    color: #006DB3}

.piecharttext h3 small {
    font-weight: bold;
}
.result-details-total h4 {
    font-size: 15px;
    margin: 5px 0px;
}

.result-details-total h4 span {
    font-size: 18px;
    float: right;
    color: #006DB3    font-weight: bold;
}
h3.resultanahead {
    font-weight: bold;
    padding-bottom: 17px;
    color: #006DB3;
    background:white;
    padding:15px;
}
.result-details-total {
    border-bottom: 4px double #ccc;
    margin-bottom: 10px;
    padding-bottom: 10px
}
.mainheightresultdivv {
    /*height: 67vh;
    overflow: hidden;
    overflow-y: scroll;
    padding: 0px 20px;*/
}
.topareaheading h2 {
    color: #ffd200    font-weight: bold;
    margin-bottom: 0px;
}

.topareaheading h4 {
    margin-top: 0px;
    color: #006DB3;
    font-weight: bold;
    margin-bottom: 20px;
    border-bottom: 5px double #ccc;
    padding-bottom: 10px;
}
.detailanalysis h3 {
    font-size: 20px;
    border-bottom: 4px double #ccc;
    padding-bottom: 4px;
    color: #ffd200;
}

.detailanalysis ul {
    list-style: none;
    padding-left: 10px;
}

.detailanalysis ul li a {
    color: black;
}
.detailanalysis {
    position: absolute;
    width: 100%;
    top: -91px;
    height: 100vh;
    background: white;
    border-left: 1px solid #ccc;
    padding: 81px 16px;
}
 
span.pass {
    background: green;
    padding: 10px 26px;
    color: white;
    font-weight: bold;
    border-radius: 11px;
    
}

span.fail {
    background: red;
    padding: 10px 32px;
    color: white;
    font-weight: bold;
    border-radius: 11px;
}
.examsquesresult th,.examsquesresult td {
    text-align: center;
}
.btnbackcss {
    background: #ffd200;
    border: #ffd200;
    color: #006DB3;
    padding: 4px 20px;
    font-weight: bold;
}
.userAnswer span{
    color: red;
}
.userAnswer, .correctAnswersmodel {
    border: 1px solid #ccc;
    padding: 10px 1%;
    /*width: 97%;*/
    margin-top: 20px;
    font-size: 20px;
    font-weight: bold;
}
.correctAnswersmodel {
    /*display: block !important;*/
    /*border:1px solid #ccc;*/
}
.correctAnswersmodel .AnsTxt{
    float: none
}
.exampagemodel .modal-body {
    height: 69vh;
    overflow: auto;
        scrollbar-color: #ffd200 #1b57b0;
  scrollbar-width: thin;
}
.exampagemodel .modal-body .answerBox label {
    padding-left: 35px;
}
.exampagemodel .modal-header h4 {
    float: left;
    font-size: 22px;
    margin-top: 0px;
    font-weight: bold;
    color: #006DB3;
}

@media(max-width: 1200px) and (min-width:995px){
    .textdivtopnav {
        /*position: absolute;*/
        /*left: 34%;*/
        text-align:center;
    }
}
@media(max-width: 994px) and (min-width:769px){
    .textdivtopnav {
        /*position: absolute;*/
        /*left: 25%;*/
        text-align:center;
    }
}
.examscountinnserarea ul li.active {
    background: #f2f2f2;
}
.bottombuttons.examResultSidebar a {
    background:#ffd200;
    border-color:#ffd200;
}
.btn-warning {
    background: #006DB3;
    border-color: #006DB3;
}
.btn-success {
    background: #67BB04;
    border-color: #67BB04;
}
.btn-primary {
    background:#ffd200;
    border-color:#ffd200;
}

.leftside {
    float: left;
    width: 50% !important;
}

.rightside {
    float: left;
    width: 50%;
    text-align: left;
}
a.canvasjs-chart-credit {
    display: none;
}
.piecharttext h3 span:last-child {
    color: black;
}

.piecharttext:after {content: "";display: table;clear: both;}

.piecharttext .rightside ul {
    list-style: none;
    padding-left: 0px;
}
.piecharttext .rightside ul li {
    padding: 10px 0px 0px;
    font-weight: bold;
}
.piecharttext .rightside ul li span {
    width: 15px;
    height: 15px;
    background: #09B39C;
    display: block;
    float: left;
    border-radius: 50%;
    margin-left: 5px;
    margin-top: 2px;
    margin-right: 10px;
}
.piecharttext .rightside ul li:nth-child(1) span {
    background: #F16548;
}

.piecharttext .rightside ul li:nth-child(2) span {
    background: #5073B8;
}
.resultinnerarea {
    border: 1px solid #E8E8E8;
    padding: 30px 20px;
    height: 166px !important; 
}

.resultinnerarea h4 {
    margin-top: 0px;
    margin-bottom: 3px;
    font-size: 14px;
    font-weight: bold;
}
.resultinnerarea p { 
    font-size: 16px; 
}

.resultinnerarea p:nth-child(2) {
    margin-bottom: 20px;
}
.resultinnerarea.changedresult h5 {
    font-weight: bold;
    margin-top: 0px;
    font-size: 14px;
    margin-bottom: 13px;
}

.resultinnerarea.changedresult p {
    font-size: 30px;
    font-weight: 500;
    margin-bottom: 10px;
}

.resultinnerarea.changedresult .progress {
    height: 4px;
    margin-bottom: 0px;
}

.resultinnerarea.changedresult span {
    float: right;
    margin-top: 8px;
    font-size: 12px;
    font-weight: 600;
}

.resultinnerarea.changedresult:after {
    content: "";
    display: table;
    clear: both;
}
div#home2 h3 {
    margin-top: 30px;
    margin-bottom: 20px;
    font-size: 18px;
}

div#home3 h3 {
    margin-bottom: -27px;
    margin-top: 40px;
    font-weight: bold;
    font-size: 18px;
}
#example_filter label input {
    border-radius: 16px;
}
div#example_info {
    font-weight: bold;
}
li#example_previous a,#example_next a {
    background: transparent;
    border: 0px;
}

span.wrong {
    border-radius: 20px;
    background: red;
    padding: 3px 14px;
    display: inline-block;
    color: white;
    font-weight: bold;
    font-size:14px;
}

span.correct {
    border-radius: 20px;
    background: #4abb4a;
    padding: 3px 14px;
    display: inline-block;
    color: white;
    font-weight: bold;
    font-size:14px;
}
.resultinnerarea.changedresult img {
    float: right;
    position: absolute;
    top: 22px;
    right: 29px;
}
.piecharttext {
    position: relative;
}

.piecharttext h2 {
    position: absolute;
    font-size: 14px;
    left: 19%;
    top: 32%;
    font-weight: bold;
}
.bottombuttons {
    background: white;
    padding: 20px;
    position: fixed;
    bottom: 0px;
    width: 100%;
    box-shadow: 0px -3px 27px 0px #ccc;
}

.bottombuttons h3 {
    margin-top: 4px;
    margin-bottom: 0px;
}
.bottombuttons h3 a,.bottombuttons h3 button {
    border-radius: 20px;
    padding: 7px 30px;
}


div#home3 h3 {
    margin-bottom: 19px;
    margin-top: 40px;
    font-weight: bold;
    font-size: 18px;
}

.newexamresult .dataTables_length {display: none;}

.newexamresult h3 {
    margin-bottom: -30px !important;
}

/*my style End from here*/

.colorDefinition{
    margin-top:5px;
border:0;
font-size: 12px;
font-weight: 500;
color:black;
background: transparent;
}
.Loader {
    width: 100%;
    float: left;
    text-align: center;
    height: 400px;
    position: relative;
}

.Loader img {
    position: absolute;
    left: 44%;
    top: 25%;
}

.loadingimg {
    width: 100%;
    height: 100%;
    background: #000;
    opacity: 0.7;
    position: fixed;
    top: 0px;
    left: 0px;
    display: none;
    z-index: 999999999;
    text-align: center;
}
.loadingimg img {
    margin-top: 17%;
    text-align: center;
    float: none;
    width: 100px;
}
#ReviewBox h1 {
    font-size: 18px;
    float: left;
}
 

#ReviewBox {
    position: fixed;
    background: #FFF;
    padding: 20px;
    width: 80%;
    max-width: 100%;
    margin: 20px auto;
    float: left;
    top: 5%;
    left: 10%;
}

div.dataTables_wrapper div.dataTables_length select {
 
    height: 30px;
 
}
div.dataTables_wrapper div.dataTables_filter input {
    margin-left: 0.5em;
    display: inline-block;
    width: auto;
    height: 31px;
    border-radius: 16px;
    font-size:16px;
    border: 1px solid   #555;
}
div.dataTables_wrapper div.dataTables_filter input:focus  {
   border: 1px solid   #555;
    border-radius: 16px;
    outline: none;
}
output {
    display: initial;
    padding-top: 7px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #006DB3;
    font-weight: bold;
}
.dotClass {
    position: absolute;
    border-radius: 100%;
    width: 8px;
    height: 8px;
    border: 2px solid green;
}
.hotAnswerBox
{
    display:none;
}

.imageCS img {
    width: 100%;
    float: left;
    cursor: zoom-in;
}

.DragImage {
    /*position: relative;*/
    /*overflow-x: auto;*/
    /*overflow-y: hidden;*/
    
}

.hotspotAnswerBox {
    position: relative !important;
    float: left;
}

.dragDropAnswerBox {
    position: relative;
    float: left;
    
    
    
    
    display: block;
    width: 100%;
}

.hotspotAnswerBox .hotAnswerBox {
    display: block !important;
    border: 1px solid red;
}

.answerBox {
    padding: 0;
    border-radius: 5px;
    width: 100%;
    float: left;
    margin-bottom: 0px;
}

.HotImage, .hotspotAnswerBox {
    float: left;
    width: 100%;
    /*overflow-x: auto;*/
        scrollbar-color: #ffd200 #1b57b0;
  scrollbar-width: thin;
}

.caseStudyItem {
    background: #FFFDF2;
    /* width: 100%; */
    padding: 1% 1% 5% 5%;
    border-radius: none;
    color: #000;
    color: black;
    margin-bottom: 10px;
    display: block;
    max-height: 150px;
    box-shadow: 0px 0px 8px 1px #ccc;
}

.csActionBtns button {
    background-color: #006DB3;
    border: 1px solid #2e6da4;
    color: #fff;
    padding: 10px 13px;
    text-decoration: none;
    margin-top: 5px;
    display: inline-block;
    cursor: pointer;
    border-radius: 4px;
}

.csActionBtns button {
    margin-right: 10px;
}

.AnsTxt {
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 20px;
    float: left;
    width: 100%;
}

.caseStudyItem h1
{
    font-size: 18px;
    color: #006DB3 !important;
    font-weight: bold;
    float:left;
    width:100%;
    padding-bottom:0px;
    margin-bottom: 6px;
}

.caseStudyItem h3
{
    font-size: 14px;
    display: contents;
}
.QuestionMainBox{
    z-index: 9999;
    padding:20px;
}


.casestudy h2 {

    margin: 2px 16px;
    float: left;
    color: #ffd200 !important;
     width:100%;
}

.caseStudyItem p {display: table;}
/*.mCSB_dragger::-webkit-scrollbar-thumb {*/
/*    background: $site_color;*/
/*    border-radius: 10px;*/
/*}*/
/*.mCSB_dragger::-webkit-scrollbar-track {*/
/*    background: $site_color_second;*/
/*    border-radius: 10px;*/
/*}*/


.mCSB_scrollTools .mCSB_draggerContainer {
        display: none;
}
/* Handle */
::-webkit-scrollbar-thumb {
  background: #006DB3;
  border-radius: 10px
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #006DB3;
}
.mfp-content .correctAnswers {
    display: block !important;
}
.mfp-content .btnnxtarea{
     display: none !important;
}
.mfp-content .innermainexamarea h2{
        padding-top: 21px;
}
.mfp-content .innermainexamarea h2 small{
display: none !important;
}
.mfp-content .checkbox-inline{
    display: none !important;
}
.mfp-content .checkbox label, .radio label {
    
    padding-left: 33px;
    padding-top: 3px;
}
.dataTables_wrapper .dataTables_paginate .paginate_button:hover , .dataTables_wrapper .dataTables_paginate .paginate_button:active{
    background:transparent !important;
}
.orderListAnswers {
    float: left;
    width: 50%;
}

.orderListAnswers span {
    float: left;
    width: 98%;
    background: azure;
    padding-left: 2%;
    font-size: 15px;
    margin-bottom: 5px;
}
.ms2side__select {
    float: left;
    width: 40%;
}
.sourceBox {
    z-index: 999 !important;
}

.ms2side__div select {
    width: 100%;
    float: left;
    height: 230px;
}

.ms2side__div select {
    width: 100% !important;
    float: left;
}
.ms2side__div:after {content: "";display: table;clear: both;}
.ms2side__div:before {
    content: "";
    display: table;
}

.ms2side__div select {
    width: 100%;
    float: left;
    height: 230px;
}
.ms2side__options, .ms2side__updown {
    width: 60px !important;
}
button:focus {outline:none !important}
.right-padding{
    padding-right:0px;
}
.top-margin{
 
    margin-top: 3px;
    padding: 10px 33px;
    background: transparent;
    border: 0px;
}
.dataTables_paginate  .current{
    color: #fff;
    background-color: #007bff;
}
.top-padding{
    padding-top:22px !important;
}
.mfp-content strong{
    display:none;
}
::-webkit-scrollbar {
    width: 4px;
    margin-right: 10px;
    height: 4px;
    cursor: pointer;
}
/* Track */
::-webkit-scrollbar-track {
  background: #ffd200;
  border-radius: 10px
}
.panel-group .panel {
 
    background: #fffdf2;
}
.panel-default>.panel-heading {
    color: #333;
    background-color: #fffdf2;
    border-color: #fffdf2;
}
.panel-group {
    margin-bottom: 20px;
    background: #fffdf2;
}
.panel-group .panel-default .panel-heading .panel-title a{
    color:#1b57b0;
    font-weight:bold;
    
}
 
.panel-group .panel-default .panel-heading .panel-title .collapsed{
    color:#525252;
    font-weight:bold
}
 
.panel-group .panel-default .panel-heading .panel-title  .icon_puls{ display: none; }
.panel-group .panel-default .panel-heading .panel-title  .icon_minus{  display: contents; }
.panel-group .panel-default .panel-heading .panel-title  .collapsed .icon_puls{ display: contents; }
.panel-group .panel-default .panel-heading .panel-title  .collapsed .icon_minus{ display: none; }

@media (min-width: 1024px) {
    
}
.attemp_background
{
    background-color:#F6F8F9
}

.panel-collapse .panel-body {
    padding: 15px;
    max-height: 300px;
    overflow-y: scroll;
        scrollbar-color: #ffd200 #1b57b0;
  scrollbar-width: thin;
}

.ui-helper-reset {
    background:#FFFDF2;
}
.ui-accordion .ui-accordion-header {
  color:#707070; 
 font-size:16px;
  background:#FFFDF2;
  padding:12px 0px 12px 0px;
  margin:0px 30px;
  border-bottom: 1px solid #E2E2E2;
  border-radius:0px;
}
.ui-accordion :focus{
   outline: none !important;
}
.ui-icon-triangle-1-e{
    display:none;
}

.ui-state-active{
color: #006DB3 !important;



}
.panel-title{
     border:none;
}
.panel-content{
    border:none;
    max-height: 200px;
    border-bottom: 1px solid #E2E2E2;
    border-radius:0px;
    margin: 0px 30px;
    padding: 0px 0px;
} 
.panel-content h5{
    font-weight:bold;
} 
.ui-accordion .ui-accordion-header:after{
        content: "\f067";
        font-family: FontAwesome;
        float: right;
        font-size:16px;
        font-weight:bold;
        color: #006DB3 !important;
}

.ui-state-active:after{
    content: "\f068" !important;
    font-family: FontAwesome;
    float: right;
    font-size:16px;
    font-weight:bold;
    color: #006DB3 !important;
}

.dataTables_length{
    display:none;
}
#HistoryTableNew_filter{
    display:none;
}
table.dataTable thead .sorting_desc:after{
    display:none;
}
table.dataTable thead .sorting:after{
    display:none;
}
table.dataTable thead .sorting_asc:after{
    display:none;
}
.dataTables_wrapper{
    padding-bottom: 30px;
}

.pagination>li:first-child>a, .pagination>li:first-child>span{
    border:0px;
}
.pagination>li:last-child>a, .pagination>li:last-child>span{
   border:0px; 
}
.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{
    background:transparent;
    border:0px;
    color: #006DB3;
}
.pagination>li>a, .pagination>li>span{
    border:0px;
}
.white_background{
    background:white;
    padding: 0px;
    height: calc(91vh - 8vw);
    box-shadow: 0px 0px 8px 1px #ccc;
}
.showAnswerBtn{
    display:inline-block
}
.pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
outline:0px;
}
.pagination>li>a:focus, .pagination>li>a:hover, .pagination>li>span:focus, .pagination>li>span:hover {
    z-index: 2;
    color: #23527c;
    background-color:transparent;
    border-color:  none;
    outline: none;
}
.ui-icon{
    display:none;
}
.ui-widget {
     /*height: 75.46vh;*/
     overflow-y: auto;
     box-shadow: 0px 0px 8px 1px #ccc;
     padding:26px 0px 10px 0px !important;
         scrollbar-color: #ffd200 #1b57b0;
  scrollbar-width: thin;
    height: calc(74vh - 8vw);
     
}
.ui-accordion .ui-accordion-content {
    padding: 5px 13px 0px 0px;
    overflow:auto;
        scrollbar-color: #ffd200 #1b57b0;
  scrollbar-width: thin;
}
.questionBox .row{
    margin:0px;
}
.questionBox .col-lg-3{
    padding-left:0px ;
}
.slick-list{
    margin-top:5px !important; 
} 

.fixed{
    width:100%;
    position:fixed;
    z-index:9;
    
}

.result-heading {
    font-size: 20px;
    font-weight: bold;
    padding-bottom:14px;
}
.chart {
    border: 1px solid #E8E8E8;
    margin-bottom: 27px;
    min-height: 235px;
}
.resultleftside {
    background: white !important;
}
#questionsReport{
    background:white  !important;
    padding-top:38px;
    position: relative;
}
.exam_question_result{
    font-size:20px;
    font-weight:bold;
    top: 22px;
    position: absolute;
}
#resultTable tr th {
    text-align: center;
    border-top: 1px solid #E8E8E8;
    border-bottom: 1px solid #E8E8E8;
    font-size:14px;
    font-weight: 500;
}
#resultTable tr td {
    text-align: center;

}
#resultTable_previous {
    background: white !important;
    border: none !important;
    color: black !important;
    font-size: 14px;
    font-weight: bold;
    width:96px !important;
    padding:6px 25px !important;
     margin-left: -1px !important;
    line-height: 1.42857143 !important;
   
}
#resultTable_previous:hover {
    background: white !important;
    border: none !important;
    color: black !important;
    font-size: 14px;
    font-weight: bold;
 
}#resultTable_next   {
    background: white !important;
    border: none !important;
    color: black !important;
    font-size: 14px;
    font-weight: bold;
    /*width:96px !important;*/
    padding:6px 5px !important;
    margin-left: 4px !important;
    line-height: 1.42857143 !important;
 
}
#resultTable_next:hover {
    background: white !important;
    border: none !important;
    color: black !important;
    font-size: 14px;
    font-weight: bold;
 
}
.pagination>.disabled>a, .pagination>.disabled>a:focus, .pagination>.disabled>a:hover, .pagination>.disabled>span, .pagination>.disabled>span:focus, .pagination>.disabled>span:hover {
     background: white !important;
    border: none !important;
    color: black !important;
    font-size: 14px;
    font-weight: bold;
}
 table.dataTable.no-footer {
    border-bottom: 1px solid #E8E8E8 !important;
}
.paginate_button a{
    padding:6px 0px 0px 0px !important;
}

@media screen and (max-width: 1400px) and (min-width: 1300px) {

.mfp-content .white_background {
    height: auto !important;
}
    .white_background {
    /*height: 70.46vh;*/
    height: calc(88vh - 8vw);
}
.ui-widget {
    /*height: 70.46vh;*/
    
        height: calc(74vh - 8vw);
    
}
.mainquestion {
 
    height: 62vh;

}.mfp-content .mainquestion {
    height: 56vh;
}
}

.openReviewPopup {
    bottom: 26px;
    position: absolute;
    left: 47%;
    z-index: 999999;
    background: transparent;
    color: #707070;
    border-radius: 20px;
    border-color: #707070;
    padding: 2px 20px;
    
}
.openReviewPopup:hover,.openReviewPopup:active, .openReviewPopup:focus {
    color: #707070;
    background-color: transparent;
    border-color: #707070;
}


li.paginate_button {
    padding: 0px;
}

li.paginate_button:hover {
    padding: 6px !important;
    border: 0px !important;
}

li.paginate_button a {
    border: 1px solid #707070 !important;
    padding: 5px !important;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    color: #707070 !important;
}

.paginate_button{
    padding: 5px !important;
}
li#resultTable_next a {
    border: 0px !important;
}li#resultTable_previous a {
    border: 0px !important;
}
.examscountinnserarea.slider { margin-left: 1%; }

.mfp-bg {
    z-index: 999999 !important;
}
.mfp-wrap{
    z-index: 99999999 !important;
}




.swiper-container {
    /*overflow: unset !important;*/
    /*overflow-x: hidden !important;*/
    /*overflow-y: hidden !important;*/
    top: 17px !important;
    z-index: 1;
    height: 81px  !important;
}

/*.swiper-slide:last-child:after {*/
/*    content: "\f0de";*/
/*    font-family: fontawesome;*/
/*    position: absolute;*/
/*    top: 31px;*/
/*}*/

/*.swiper-slide:last-child:before {*/
/*    content: "\f0dd";*/
/*    position: absolute;*/
/*    font-family: fontawesome;*/
/*    top: -30px;*/
/*}*/

.activeSlide:after {
    content: "\f0de";
    font-family: fontawesome;
    position: absolute;
    color:#006DB3;
    top: 71px;
}

.activeSlide:before {
    content: "\f0dd";
    position: absolute;
    font-family: fontawesome;
    color:#006DB3;
    top: -13px;
}

.markingvaluesnames ul:after {content: "";display: table;clear: both;}

.markingvaluesnames {
    position: absolute;
    bottom: 0px;
    width: 100%;
    left: 0px;
    padding: 20px;
    border-top: 1px solid #707070;
    background: white;
}

.markingvaluesnames ul {
    margin-bottom: 0px;
    list-style:none;
    padding-left: 0px;
    /*float:none;*/
}
.markingvaluesnames ul li {
    float: left;
    /* padding-left: 0px; */
}

.markingvaluesnames ul li img {
    width: 19px;
    margin-right: 10px;
    margin-left: 30px;
}

.markingvaluesnames ul li:nth-child(1) img {
    margin-left: 0px;
}

/*.markingvaluesnames ul {*/
/*}*/

.mfp-content .casestudy {
    display: none;
}
@media(min-width:1400px){
    .activeSlide:after{
        top: 68px;
    }
}
@media(min-width:1720px){
    .swiper-container {
        top: 17px !important;
        z-index: 1;
        height: 140px !important;
    }
    .activeSlide:before {
        content: "\f0dd";
        position: absolute;
        font-family: fontawesome;
        color: #006DB3;
        top: -22px;
        font-size: 30px;
    }
    .activeSlide:after {
        top: 119px;
        font-size: 30px;
    }
    .revQItem {
        cursor: pointer;
        background: #D60404;
        color: white;
        border-radius: 50%;
        text-align: center;
        width: 43px;
        height: 40px;
        font-size: 24px;
        line-height: 39px;
    }
    .actionBtns .row {
        padding: 30px;
    }
    .openReviewPopup {
        bottom: 60px;
    }
    .btnnxtarea .row {
        padding: 30px;
    }
}


@media(min-width:1720px) and (max-width:2040px){
    .white_background{
        height: calc(89vh - 8vw);
    }
    .ui-widget{
        height: calc(74vh - 8vw);
    }
        
}
.mfp-content .mainquestion {
    height: 63vh;
}
.defaultbtn {
    border: 1px solid #707070;
    border-radius: 50%;
    width: 30px;
    height: 27px;
    font-size: 13px;
    line-height: 28px;
    background: transparent;
    color: black;
}


@media only screen 
and (min-width : 375px) 
and (max-width : 667px){
    .timmerarea {
        margin-top: -46px !important;
    }
}

.mfp-content .white_background{
    box-shadow:none;
}
.Questype.withouttime {
    background: transparent;
    border: 0px;
    padding: 0px;
    width: auto;
    box-shadow: none;
    /*margin-top: 16px;*/
    float: none;
    margin-top: 0px;
}
.columnstylings h4:nth-child(2) {
    margin: 0px;
}
.Allquestiontab .columnstylings {
    padding: 15px;
}

.Allquestiontab .columnstylings input {
    margin-top: 22px;
}

.Allquestiontab .columnstylings #show {
    margin-top: 20px;
}
.Allquestiontab {
    /*float: right;*/
}
























.checkbox-inline {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 14px;
  font-weight:bold;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.checkbox-inline input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.checkbox-inline:hover input ~ .checkmark {
  background-color: #aeabab;
}

/* When the checkbox is checked, add a blue background */
.checkbox-inline input:checked ~ .checkmark {
  background-color: #006DB3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "/f00c";
  position: absolute;
  display: none;
  
    font-size: 12px;
    font-weight: normal;
}

/* Show the checkmark when checked */
.checkbox-inline input:checked ~ .checkmark:after {
  display: block;
  content: "\f00c";
  border: 0px;
}

/* Style the checkmark/indicator */
.checkbox-inline .checkmark:after {
  left: 4px;
  top: 1px;
  color:white;
  font-family:fontawesome;
  /* width: 5px; */
  /* height: 10px; */
  border: solid white;
  border-width: 0px 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(0deg);
}



.checkbox-inlines {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 15px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.checkbox-inlines input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.checkbox-inlines:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.checkbox-inlines input:checked ~ .checkmark {
  background-color: #006DB3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.checkbox-inlines input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.checkbox-inlines .checkmark:after {
  
    
    top: 6px;
    left: 6px;
  width: 8px;
  height: 8px;
  border-radius: 50%;
  background: white;
}
label.checkbox-inlines .checkmark {
    border-radius: 50%;
}

.attemptHistory {
    border-radius: 20px;
    padding: 10px 30px;
}




















.mfp-wrap.mfp-close-btn-in.mfp-auto-cursor.mfp-ready {
    overflow: hidden !important;
}
div#ReviewBox button.mfp-close {
    right: 0%;
}
button.mfp-close {
    right: 10%;
}
.QuestionMainBoxBig {
    overflow: hidden;
}

span.skip {
    border-radius: 20px;
    background: #ec971f;
    padding: 3px 14px;
    display: inline-block;
    color: white;
    font-weight: bold;
    font-size: 14px;
}

.answerBox .answerBox {
    border: 4px solid #ccc;
    
    padding: 23px 20px 10px;
    position: relative;
    margin-top: 20px;
}
.correctAnswers.showThis span.AnsTxt{
    display: contents;
}
.correctAnswers .explainarea, .correctAnswers .mainAnswer {
    padding: 10px 20px;
}

.correctAnswers hr {
    margin: 0px;
}
.explainarea {
    background: #F6F8F9 !important;
}
.columnstylings h4 {
    font-size: 15px;
    margin: 0px;
    /*text-align: center;*/
}

.columnstylings h4:nth-child(3) {
    margin: 0px 10px 10px;
}
h4.h4lastchild {
    margin: 13px;
    font-size: 20px;
}



















.slider[type=range] {
  -webkit-appearance: none;
  -webkit-transition: .2s;
    width: 75%;
     height: 16px;
  border-radius: 3px;
  background-color: transparent;
  outline: none;
  opacity: 0.7;
  transition: opacity .2s;
  cursor: pointer;
    margin-top: 2px;
}

.slider[type=range]:hover, .slider[type=range]:focus, .slider[type=range]:active {
  opacity: 1;
}

.slider[type=range]::-webkit-slider-runnable-track {
  height: 6px;
  border-radius: 3px;
  background-color: #d3d3d3;
}

.slider[type=range]::-webkit-slider-thumb {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background-color: #006DB3;
  -webkit-appearance: none;
  appearance: none;
  margin-top: -5px;
}

.slider[type=range]::-moz-range-track {
  height: 6px;
  border-radius: 3px;
  background-color: #d3d3d3;
}

.slider[type=range]::-moz-range-thumb {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background-color: #006DB3;
  margin-top: 0;
}

.slider[type=range]::-ms-track {
  height: 6px;
  border-radius: 3px;
  background-color: #d3d3d3;
}

.slider[type=range]::-ms-fill-upper {
  height: 6px;
  border-radius: 3px;
  background-color: #d3d3d3;
}

.slider[type=range]::-ms-fill-lower {
  height: 6px;
  border-radius: 3px;
  background-color: #d3d3d3;
}

.slider[type=range]::-ms-thumb {
  width: 16px;
  height: 16px;
  border-radius: 8px;
  background-color: #006DB3;
  margin-top: 0;
}

.withouttime .checkmark {
    /*background-color: #aeabab;*/
    top:7px;
}




/*.Allquestiontab {*/
/*    position: absolute;*/
/*    top: 253px;*/

/*    z-index: 1;*/
/*    left: 24%;*/
    /* transform: translate(13%, 50%); */
/*}*/








.setsarea {
    /*border: 5px solid #006DB3;*/
}

.Allquestiontab .columnstylings {
    /*border-right: 5px solid #006DB3;*/
    /*border-top: 5px solid #006DB3;*/
}

.Allquestiontab .columnstylings:before {
    /*content: "";*/
    border-right: 5px solid white;
    position: absolute;
    left: 15px;
    z-index: 9;
    height: 35%;
    top: 102px;
    border-bottom-left-radius: 2px;
}

.Allquestiontab .columnstylings:after {
    /*content: "";*/
    border-right: 5px solid white;
    position: absolute;
    right: 15px;
    z-index: 9;
    height: 35%;
    top: 102px;
    border-bottom-right-radius: 2px;
}
.answerBox .answerBox:before {content: "ANSWER HERE:";background: white;top: -13px;position: absolute;width: 25%;text-align: center;left: 15px;font-weight: bold;font-size: 20px;}
.resultcolumns {
    background: white;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px 10px;
    border-left: 5px solid #006DB3;
    margin-bottom: 15px;
    margin-top: 21px;
    box-shadow: 0px 0px 27px 0px #dddcdc;
}

.resultcolumns:after {content: "";display: table;clear: both;}

.resultcolumns h4 {
    float: left;
    width: 25%;
    text-align: left;
    margin: 0px;
    padding: 10px;
    font-size:16px;
}

.resultcolumns h4 span {
    font-weight: bold;
    color: #006DB3;
}


@media (min-width: 992px){
    .setsarea .col-md-2 {
        width: 20%;
    }
}
.answerBox .ms2side__div {
    border: 3px solid #ccc;
    padding: 22px;
    position: relative;
    margin-top: 20px;
}
.answerBox .ms2side__div:before {content: "ANSWER HERE:";background: white;top: -13px;position: absolute;width: 19%;text-align: center;left: 15px;font-weight: bold;font-size: 20px;}
.DragImage {
    border: 3px solid #ccc;
    border: 3px solid #ccc;
    /*padding: 22px;*/
    position: relative;
    margin-top: 20px;
    overflow-y: unset !important;
}

.DragImage:before {
    content: "ANSWER HERE:";
    background: white;
     top: -13px; 
    position: absolute;
    width: 19%;
    text-align: center;
    left: 15px;
    font-weight: bold;
    font-size: 20px;
    z-index: 999;
}
div#HotImage_4 {
    /*border: 4px solid #ccc;*/
    /*padding: 0px;*/
    /*position: relative;*/
    /* margin-top: 20px; */
}
.HotImage:nth-last-child(3) {
    border: 4px solid #ccc;
    padding: 0px;
    position: relative;
    /* margin-top: 20px; */
}

.HotImage:nth-last-child(3):before {
    content: "ANSWER HERE:";
    background: white;
     top: -13px; 
    position: absolute;
    width: 13%;
    text-align: center;
    left: 15px;
    font-weight: bold;
    font-size: 20px;
    z-index: 999;
}






.demogifarea {
    position: absolute;
    top: 12%;
    left:2%;
    /*z-index: -9;*/
}
.ndarea {
    position: absolute;
    top: 12%;
    right: -3%;
    /*z-index: -9;*/
}

.ExamStartOptions {
    position: relative;
}

.demogifarea img,.ndarea img {
    width: 277px;
    /*z-index: -9999999999999999999999999999999999999;*/
}

.textdivtopnav h2 a {
    position: absolute;
    /* top: -9px; */
    right: -30px;
    color: white;
    animation: color_changes 1s infinite alternate;
}

@keyframes color_changes {
    from { background: #006DB3 }
    to { background: #ffd200 }
}
@-webkit-keyframes color_change {
    from { background: #006DB3 }
    to { background: #ffd200 }
}
@-moz-keyframes color_change {
    from {background: #006DB3 }
    to {background: #ffd200 }
}

@-o-keyframes color_change {
    from { color: #006DB3 }
    to { color: #ffd200 }
}

.imagetopnav form button {
    background: transparent;
    border: 0px;
}
.textdivtopnav h2 a:hover {
    color: white;
}









div#menu1 h3 {
    margin: 40px 0px 40px;
}
div#menu1 h3 span{
    color: #006DB3}


.doThisOnCheck .timeallowedarea {
    margin: 20px auto 30px !important;
}






.imagetopnav form {
    float: left;
}

.imagetopnav h6
 {
    float: left;
    font-size: 16px;
    font-weight: bold;
    margin-top: 19px;
    color:#006DB3;
}
.maintopmarginbtn {
    margin-top: 12px;
    padding: 6px 32px;
    border-radius: 23px;
}




.mainexamarea input[type=checkbox]:checked ~ .checkmark:before {
    content: "\f00c";
    font-family: fontawesome;
    color: white;
    font-size: 12px;
    padding-left: 0px;
    padding-right: 8px;
    margin-right: 0px;
}
.mainexamarea input[type=checkbox]:checked ~ span:last-child {
    padding-left: 2px;
}





@media (max-width: 1060px){
    .btnnxtarea .btn {
        border-radius: 23px;
        padding: 8px 16px;
        font-size: 14px;
        height: 40px;
        margin-right: 10px;
    }
    .timmerarea button {
        padding: 12px 16px;
        font-size: 12px;
        font-weight: bold;
        margin-top: 3px;
    }
}

.imagetopnav{
width: 200px;
height: 60px;
overflow: hidden;
}
.imagetopnav img {
width: 60%;
height: 100%;
margin-top: 0px;
}

</style>



      <!--<link rel="stylesheet" href="css/style.css">-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.js" ></script>
        <meta name="robots" content="noindex, nofollow">  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
      <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
      <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.magnific-popup.js" ></script>
      <link rel="stylesheet" href="css/magnific-popup.css">
      <script type="text/javascript">
         jQuery.browser = {};
         (function () {
             jQuery.browser.msie = false;
             jQuery.browser.version = 0;
             if (navigator.userAgent.match(/MSIE ([0-9]+)\./)) {
                 jQuery.browser.msie = true;
                 jQuery.browser.version = RegExp.$1;
             }
         })();
      </script>
      <script>
         (function(jQuery){
             jQuery(window).on("load",function(){
                 // jQuery(".questionBox").mCustomScrollbar();
         jQuery(".caseStudyItem").mCustomScrollbar();
         //jQuery("#ExamResult").mCustomScrollbar();
         
         //$(".HotImage").mCustomScrollbar({axis:"x"});
             });
         })(jQuery);
         
         $(document).ready(function(){
         $('a.imageCSA').fancybox();
         
         $('.openReviewPopup').magnificPopup({
         type:'inline',
         });
         
         $(".mfp-content .reviewQList").mCustomScrollbar();
         })
         
      </script>
      <link rel="stylesheet" href="css/jquery.multiselect2side.css" type="text/css" media="screen" />
      <script type="text/javascript" src="js/jquery.multiselect2side.js" ></script>
      <script type="text/javascript" src="js/common.js" ></script>
      <script type="text/javascript" src="js/jquery.countdownTimer.js"></script>
      <link rel="stylesheet" type="text/css" href="css/jquery.countdownTimer.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
      <script src="js/jquery.mCustomScrollbar.js"></script>
      <link rel="stylesheet" href="css/jquery.fancybox.css">
      <script src="js/jquery.fancybox.js"></script>
      <style>
            body {
                background: #F6F8F9 !important;
                overflow-x: hidden;
            }
      </style>
   </head>
   <body class="practice-test">
      <div class="wrapper">
      <div class="ExamStartOptions">
                <!--header-->
       <div class="mainnav fixed">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="imagetopnav">
                      <form action="" method="post">
                          <input type="hidden" name="exam_code" value="AZ-400">
                          <input type="hidden" name="site" value="Study4Exam">
                          <input type="hidden" name="siteurl" value="https://www.study4exam.com/">
                            <button type="submit"><img src="https://www.study4exam.com/assets/site/image/1619507533_study4examslogo.webp" class="img-responsive" alt="" ></button>
                      </form>
                      <!--<h6>Demo Version</h6>-->
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-5 col-sm-5">
                        
                  <div class="textdivtopnav">
                     <h2>Microsoft AZ-400 Web-Based Practice Exam Demo</h2>
                     <p>Designing and Implementing Microsoft DevOps Solutions</p>
                  </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-4">
                    <!--<a class="btn btn-red pull-right btn-danger maintopmarginbtn" class="background:#FD0000" href="https://www.study4exam.com/AZ-400-exam-questions.html" target="_blank">Get Full Access</a>-->
                    <form action="https://www.study4exam.com/carts" method="post" class="pdf_form" style="float:right">
            <input type="hidden" value="Online Practice Exam" name="product_name" />
            <input type="hidden" value="AZ-400" name="exam_code" />
            <input type="hidden" value="" id="cartqry" name="cart_qty" />
            <input type="hidden" value="" id="cartsub" name="subscription" />
            <input type="hidden" value="3" name="ptype_id" />
            <input type="hidden" value="single" name="shop_type" />
            <button type="submit" class="btn btn-red pull-right btn-danger maintopmarginbtn" class="background:#FD0000"> Get Full Access</button>
          </form>
               
               </div>
            </div>
         </div>
      </div>
            <!--header End-->
      <br><br><br><br>
         <div class="container">
            <div class="row" style="display:none">
               <div class="col-lg-offset-3 col-lg-6 col-md-offset-3 col-md-6 col-sm-12 col-xs-12 tabscustomsize">
                  <div class="liner"></div>
                  <div class="liner2"></div>
                  <ul class="nav nav-pills mainpills">
                     <li class="active">
                        <a data-toggle="pill">1</a>
                        <p>Test type</p>
                     </li>
                     <li class="active">
                        <a data-toggle="pill" >2</a>
                        <p>Exam Options </p>
                     </li>
                     <li class="disabled">
                        <a data-toggle="pill" >3</a>
                        <p>Start Test</p>
                     </li>
                  </ul>
               </div>
               <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"></div>
            </div>
            
                        
            <div class="tab-content margtop100">
               <div id="menu1" class="tab-pane fade in active">
                  <!--<h3 class="text-center"><span>Step 2 -</span> What exam options that you want?</h3>-->
                  <h3 class="text-center"><span>Demo Version Limited Functionality</span><br> Customize your Practice Attempt(Optional)</h3>
                  <div class="row">
                     <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <form method="post" action="practice_test.php">
                           <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                   <input type="hidden" name="case_studies[]" value="1" />
                                 <div class="form-group Questype">
                                    <h4>Available Case Studies:</h4>
                                    <div class="qCSTypes">
                                                                                                                                                                                                   <div class="col-lg-3 col-md-4 col-sm-4">
                                       <label  class="checkbox-inline">
                                           <input type="checkbox" checked="checked"  data-val="14" value="1" name="case_studies[]" id="cs1" disabled/>
                                       Case Study 1                                       (14)
                                       <span class="checkmark"></span>
                                       </label></div>
                                       <style>
                                           .Allquestiontab {
                                                 position: relative; 
                                                 top: 0px; 
                                                 /*z-index: 1; */
                                                 left: 0; 
                                                 transform: none; 
                                            }
                                            .Allquestiontab .columnstylings{
                                                border-top:0px;
                                                border-right:0px;
                                            }
                                            .Allquestiontab .columnstylings:before,.Allquestiontab .columnstylings:after{
                                                border:0px;
                                                position:relative;
                                                left: 0;
                                                z-index: 90 
                                                height: 0px; 
                                                top: 0; 
                                                border-bottom-left-radius: 0px; 
                                            }
                                            @media (min-width: 1200px){
                                                .casestudycss {
                                                    /* margin-top: 24px; */
                                                    /*margin-left: 25%;*/
                                                }
                                            }
                                            .casestudypercentage{
                                                /*margin-bottom:21px;*/
                                            }
                                            .casestudycss .columnstylings {
                                                /*margin-top: 0px;*/
                                            }
                                            .HotImage:nth-last-child(3):before {
                                                width: 16%;
                                            }
                                       </style>
                                                                                                                     <div class="col-lg-3 col-md-4 col-sm-4">
                                       <label  class="checkbox-inline">
                                           <input type="checkbox"  disabled="disabled" data-val="10" value="2" name="case_studies[]" id="cs2" disabled/>
                                       Case Study 2                                       (10)
                                       <span class="checkmark"></span>
                                       </label></div>
                                       <style>
                                           .Allquestiontab {
                                                 position: relative; 
                                                 top: 0px; 
                                                 /*z-index: 1; */
                                                 left: 0; 
                                                 transform: none; 
                                            }
                                            .Allquestiontab .columnstylings{
                                                border-top:0px;
                                                border-right:0px;
                                            }
                                            .Allquestiontab .columnstylings:before,.Allquestiontab .columnstylings:after{
                                                border:0px;
                                                position:relative;
                                                left: 0;
                                                z-index: 90 
                                                height: 0px; 
                                                top: 0; 
                                                border-bottom-left-radius: 0px; 
                                            }
                                            @media (min-width: 1200px){
                                                .casestudycss {
                                                    /* margin-top: 24px; */
                                                    /*margin-left: 25%;*/
                                                }
                                            }
                                            .casestudypercentage{
                                                /*margin-bottom:21px;*/
                                            }
                                            .casestudycss .columnstylings {
                                                /*margin-top: 0px;*/
                                            }
                                            .HotImage:nth-last-child(3):before {
                                                width: 16%;
                                            }
                                       </style>
                                                                                                                     <div class="col-lg-3 col-md-4 col-sm-4">
                                       <label  class="checkbox-inline">
                                           <input type="checkbox"  disabled="disabled" data-val="4" value="3" name="case_studies[]" id="cs3" disabled/>
                                       Case Study 3                                       (4)
                                       <span class="checkmark"></span>
                                       </label></div>
                                       <style>
                                           .Allquestiontab {
                                                 position: relative; 
                                                 top: 0px; 
                                                 /*z-index: 1; */
                                                 left: 0; 
                                                 transform: none; 
                                            }
                                            .Allquestiontab .columnstylings{
                                                border-top:0px;
                                                border-right:0px;
                                            }
                                            .Allquestiontab .columnstylings:before,.Allquestiontab .columnstylings:after{
                                                border:0px;
                                                position:relative;
                                                left: 0;
                                                z-index: 90 
                                                height: 0px; 
                                                top: 0; 
                                                border-bottom-left-radius: 0px; 
                                            }
                                            @media (min-width: 1200px){
                                                .casestudycss {
                                                    /* margin-top: 24px; */
                                                    /*margin-left: 25%;*/
                                                }
                                            }
                                            .casestudypercentage{
                                                /*margin-bottom:21px;*/
                                            }
                                            .casestudycss .columnstylings {
                                                /*margin-top: 0px;*/
                                            }
                                            .HotImage:nth-last-child(3):before {
                                                width: 16%;
                                            }
                                       </style>
                                                                                                                     <div class="col-lg-3 col-md-4 col-sm-4">
                                       <label  class="checkbox-inline">
                                           <input type="checkbox"  disabled="disabled" data-val="292" value="4" name="case_studies[]" id="cs4" disabled/>
                                       Case Study 4                                       (292)
                                       <span class="checkmark"></span>
                                       </label></div>
                                       <style>
                                           .Allquestiontab {
                                                 position: relative; 
                                                 top: 0px; 
                                                 /*z-index: 1; */
                                                 left: 0; 
                                                 transform: none; 
                                            }
                                            .Allquestiontab .columnstylings{
                                                border-top:0px;
                                                border-right:0px;
                                            }
                                            .Allquestiontab .columnstylings:before,.Allquestiontab .columnstylings:after{
                                                border:0px;
                                                position:relative;
                                                left: 0;
                                                z-index: 90 
                                                height: 0px; 
                                                top: 0; 
                                                border-bottom-left-radius: 0px; 
                                            }
                                            @media (min-width: 1200px){
                                                .casestudycss {
                                                    /* margin-top: 24px; */
                                                    /*margin-left: 25%;*/
                                                }
                                            }
                                            .casestudypercentage{
                                                /*margin-bottom:21px;*/
                                            }
                                            .casestudycss .columnstylings {
                                                /*margin-top: 0px;*/
                                            }
                                            .HotImage:nth-last-child(3):before {
                                                width: 16%;
                                            }
                                       </style>
                                                                           </div>
                                 </div>
                                                               </div>
                                                                                                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 Allquestiontab">
                                             <div class="form-group hideifSpecific columnstylings">
                                                <!--<h4>No. of Questions: (per Exam)</h4>-->
                                                
                                                                                                   <h4>Based on Selection above, you can practice with All <span id="showss">320</span> Questions </h4>
                                                <!--<h4 class="text-center">OR</h4>-->
                                                <h4>or Create Multiple Practice tests with Limited Questions </h4>
                                                <input type="range" min="1" max="5" onchange="return updateExamSets(this.value);" oninput="QuestionNoRangevalue.value = QuestionNoRange.valueAsNumber" value="5" class="slider" name="QuestionNoRange" id="QuestionNoRange">
                                                <div  id="show" class="qRangeOutput"><output name="QuestionNoRangevalue" for="QuestionNoRange" >5 </output> / 320</div>
                                                
                                                   <!--<h4 class="h4lastchild">Total Questions: 320</h4>-->
                                             </div>
                                          </div>
                                                                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 casestudypercentage">
                                 <div class="columnstyl">
                                    <!--<h4>Pass Percentage:</h4>-->
                                    <h4>Set your Desired Pass Percentage:</h4>
                                    <input type="range" min="10" max="100" oninput="PassRangevalue.value = PassRange.valueAsNumber" value="70" class="slider" name="PassRange" id="PassRange">
                                    <div class="pRangeOutput"><output name="PassRangevalue" for="PassRange">70</output>/100</div>
                                    
                                 </div>
                                 
                              </div>
                              
                                                                                          
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="">
                                <div class="form-group Questype setsarea">
                                    <!--<h4>Exam Sets:</h4>-->
                                    <h4>Available Practice sets:</h4>
                                    <div class="examSetsTypes">
                                                                                <div class="col-lg-3 col-md-3 col-sm-4">
                                            <label class="checkbox-inlines    newdisabled">
                                                                                                <input type="radio" checked="checked" value="1" name="exam_set" id="es1 " disabled> Practice Set 1                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                                                            </div>
                                </div>
                            </div>
                              
                              
                                                            <div class="col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 col-xs-12  doThisOnCheck">
                                 <div class="form-group timeallowedarea" style="    margin: 0px">
                                    <div class="shoehidediconexams">    
                                        <label>Allocate Time (Hours : Minutes)</label>
                                        <select  class="form-control" name="tHour" id="tHour">
                                           <option value="00">00</option>
                                           <option value="01" selected="selected">01</option>
                                           <option value="02">02</option>
                                        </select>
                                          
                                        <select  class="form-control" name="tMinutes" id="tMinutes">
                                           <option value="00">00</option>
                                           <option value="01">01</option>
                                           <option value="02">02</option>
                                           <option value="03">03</option>
                                           <option value="04">04</option>
                                           <option value="05">05</option>
                                           <option value="06">06</option>
                                           <option value="07">07</option>
                                           <option value="08">08</option>
                                           <option value="09">09</option>
                                           <option value="10" >10</option><option value="11" >11</option><option value="12" >12</option><option value="13" >13</option><option value="14" >14</option><option value="15" >15</option><option value="16" >16</option><option value="17" >17</option><option value="18" >18</option><option value="19" >19</option><option value="20" >20</option><option value="21" >21</option><option value="22" >22</option><option value="23" >23</option><option value="24" >24</option><option value="25" >25</option><option value="26" >26</option><option value="27" >27</option><option value="28" >28</option><option value="29" >29</option><option value="30" selected="selected">30</option><option value="31" >31</option><option value="32" >32</option><option value="33" >33</option><option value="34" >34</option><option value="35" >35</option><option value="36" >36</option><option value="37" >37</option><option value="38" >38</option><option value="39" >39</option><option value="40" >40</option><option value="41" >41</option><option value="42" >42</option><option value="43" >43</option><option value="44" >44</option><option value="45" >45</option><option value="46" >46</option><option value="47" >47</option><option value="48" >48</option><option value="49" >49</option><option value="50" >50</option><option value="51" >51</option><option value="52" >52</option><option value="53" >53</option><option value="54" >54</option><option value="55" >55</option><option value="56" >56</option><option value="57" >57</option><option value="58" >58</option><option value="59" >59</option>                                        </select>
                                    </div>
                                        <div class="Questype withouttime"> 
                                        <label class="checkbox-inline">
                                            <input type="checkbox"  id="withouttimer" name="without_timer" value="1">Practice without Timer
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                     </div>
                                     
                              </div>
                           </div>
                           <p class="text-center">
                               <!--$site = $_REQUEST['site'];-->
   <!--$siteurl = $_REQUEST['siteurl'];-->
   
                               <input type="hidden" class="form-control" value="Study4Exam" name="site">
                               <input type="hidden" class="form-control" value="https://www.study4exam.com/" name="siteurl">
                              <button type="submit" class="btn btn-primary btn-lg  roundedbuttonclass" id="StartExam">Start Exam</button>
                              <!--<button type="submit" class="btn btn-primary btn-lg  roundedbuttonclass" id="StartExam" onclick="return startExam();">Start Exam</button>-->
                              <!--<a href="javascript:void(0);" class="btn btn-warning attemptHistory">Attempt History</a>-->
                           </p>
                        </form>
                     </div>
                  </div>
               </div>
               <div id="menu2" class="tab-pane fade">
                  <h3>Menu 2</h3>
                  <p>Some content in menu 2.</p>
               </div>
            </div>
         </div>
         <div style="display:none">
             <div class="demogifarea">
                 <img src="images/demo.gif" alt="image">
             </div>
             <div class=" ndarea">
                 <a href="https://www.study4exam.com/product-detail/AZ-400"><img src="images/demo2.gif" alt="image"></a>
             </div>
        </div>
      </div>
      <input type="hidden" id="site" value="Study4Exam" />  
      <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
      <script type="text/javascript" src="js/functions.js" ></script>
      <script>
         $(document).ready(function(){
             $('.withouttime input[type="checkbox"]').click(function(){
                if($(this).prop("checked") == true){
                    //alert("Checkbox is checked.");
                }
                else if($(this).prop("checked") == false){
                    //alert("Checkbox is unchecked.");
                }
            });
             
             
             $('.qTypes input[type="checkbox"]').click(function(){
                
                //alert(this.value);
                var totalNumQuestions = 0;
                $('.qTypes input[type="checkbox"]:checked').each(function() {
                   var CheckItemVal = $(this).attr('data');
                   totalNumQuestions = parseInt(totalNumQuestions) + parseInt(CheckItemVal); 
                }); 
                 console.log(totalNumQuestions);
                 var halfTotalQs = totalNumQuestions /2;
                 halfTotalQs = parseInt(halfTotalQs);
                 console.log(halfTotalQs);
                 if(halfTotalQs < 1)
                 {
                    halfTotalQs = 1;
                 }
                 $('#QuestionNoRange').val(halfTotalQs);
                 $('#QuestionNoRange').attr('max',totalNumQuestions);
                 $('#show').html('<output name="QuestionNoRangevalue" for="QuestionNoRange">'+halfTotalQs+'</output> / '+totalNumQuestions);
                 $('#showss').html("");
                 $('#showss').html(totalNumQuestions);
                
                var remainder = totalNumQuestions % halfTotalQs;
                var number = totalNumQuestions / halfTotalQs;
                number = number+'';
                number = number.split('.');
                var endNumber = number[0];
                if(remainder > 0)
                {
                    endNumber = parseInt(endNumber) + 1;
                } 
                
                var options = '';
        for (var i = 1; i <= endNumber; i++) {
            if(i == 1)
              {
                  var checked= 'checked="checked"';
              }
              else
              {
                 var checked= ''; 
              }
          options += '<div class="col-md-2"><label class="checkbox-inlines"><input '+checked+' type="radio" value="'+i+'" name="exam_set" id="es'+i+'"> Practice Set '+i+'<span class="checkmark"></span></label></div>';
        }
        $('.examSetsTypes').html(options); 
                 
                //if ($('.qTypes input[type="checkbox"]').not(':checked').length == 0) {
                     //$('.hideifSpecific').show();
                //} else {
                     //$('.hideifSpecific').hide();
                //} 
                 
                 if ($('.qTypes input[type="checkbox"]:checked').length == 0) {
                     $('#StartExam').attr('disabled','disabled');
                 } else {
                     $('#StartExam').removeAttr('disabled','disabled');
                 } 
             })
             
             $('.qCSTypes input[type="checkbox"]').click(function(){
                if ($('.qCSTypes input[type="checkbox"]').not(':checked').length == 0) {
                     $('.hideifSpecific').show();
                 } else {
                     $('.hideifSpecific').hide();
                 } 
                 
                 if ($('.qCSTypes input[type="checkbox"]:checked').length == 0) {
                     $('#StartExam').attr('disabled','disabled');
                 } else {
                     $('#StartExam').removeAttr('disabled','disabled');
                 } 
             })
             
             var question_id = $('#current_qid').val();
             var question_type = $('#question_type').val();
             
             if(question_type == 'Hotspot')
          {
            var HotImageIDArray = [];
            $("#QN_"+question_id+" .HotImage").each(function() {
              var HotImageID = $(this).attr('id');
              HotImageID = HotImageID.replace("HotImage_","");
              HotImageIDArray.push(HotImageID);
            })
            var HotImageOrig = Math.max.apply(null, HotImageIDArray);
            var Hindex = HotImageIDArray.indexOf(HotImageOrig);
            HotImageIDArray.splice(Hindex, 1);
            $.each(HotImageIDArray, function( ind, val ) {
              $('#HotImage_'+val+' .hotAnswerBox').remove();
            });
                  
            var hotspotImageHTML = $('#QN_'+question_id+' #HotImage_'+HotImageOrig).html();
            $('#QN_'+question_id+' .hotspotAnswerBox').html(hotspotImageHTML);
          }
                
                
          if(question_type == 'DragDrop')
          {
                  
            var DragImageIDArray = [];
            $("#QN_"+question_id+" .DragImage").each(function() {
                
              var DragImageID = $(this).attr('id');
              console.log(DragImageID);
              DragImageID = DragImageID.replace("DragImage_","");
              DragImageIDArray.push(DragImageID);
            })
            var DragImageOrig = Math.max.apply(null, DragImageIDArray);
            console.log("Line 694");
            console.log(DragImageOrig);
                  
            var dragDropAnswerBox = $('#QN_'+question_id+' #DragImage_'+DragImageOrig).html();
            $('#QN_'+question_id+' .dragDropAnswerBox').html(dragDropAnswerBox);
                  
            var targetCounterANS = 1;
            $("#QN_"+question_id+" .dragDropAnswerBox .targetBox").each(function() {
                        
              var thisClass = $(this).attr('class');
              thisClass = thisClass.replace(" ui-droppable","");
              thisClass = thisClass.replace("targetBox ","");
              thisClass = thisClass.replace("target_","");
                        
              var styleCSS = $(this).attr('style');
                        
              var targetCounterSB = 1;
              $("#QN_"+question_id+" .dragDropAnswerBox .SB_"+thisClass).each(function() {
                $(this).addClass('SB_'+thisClass+'_'+targetCounterSB);
                targetCounterSB++;
              })
                        
                $('#QN_'+question_id+' .dragDropAnswerBox .SB_'+thisClass+'_'+targetCounterANS).attr('style',styleCSS);
                targetCounterANS++;
            })
            var Aindex = DragImageIDArray.indexOf(DragImageOrig);
            DragImageIDArray.splice(Aindex, 1);
            $.each(DragImageIDArray, function( index, value ) {
              $('#DragImage_'+value+' .targetBox').remove();
              $('#DragImage_'+value+' .sourceBox').remove();
              $('#DragImage_'+value+' .source_parent').remove();
            });
          }
         })   
      </script>
      <script>
         $("#nextbtn").click(function(){
          // alert("clicked")
          $('.mainpills li:nth-child(2)').addClass("active");
          $('.liner2').css("opacity","1");
          $('.tab-content').removeClass("margtop100");
         });
         $('.columnstylings input').on('change', function () {
             var v = $(this).val();
             // $('div').css('font-size', v + 'px')
             $('.columnstylings #show span').html(v);
         });
         $('.columnstyl input').on('change', function () {
             var v = $(this).val();
             // $('div').css('font-size', v + 'px')
             $('.columnstyl #show span').html(v);
         });
         // function updateRangeInput(elem,quesrange) {
         //   $(quesranges).next().html($(quesrange).val());
         // }
         
        //  $("#showAnswer").click(function(){
        //  $(".correctAnswers").toggleClass("hideThis");
        //  })
        
        function updateExamSets(questionsPerSet){
            console.log(questionsPerSet);
            var totalNumQuestions = $('#QuestionNoRange').attr('max');
            var halfTotalQs = questionsPerSet;
            if(halfTotalQs < 1)
            {
                halfTotalQs = 1;
            }
            var remainder = totalNumQuestions % halfTotalQs;
            var number = totalNumQuestions / halfTotalQs;
            number = number+'';
            number = number.split('.');
            var endNumber = number[0];
            if(remainder > 0)
            {
                endNumber = parseInt(endNumber) + 1;
            } 
                
            var options = '';
      for (var i = 1; i <= endNumber; i++) {
          if(i == 1)
          {
              var checked= 'checked="checked"';
          }
          else
          {
             var checked= ''; 
          }
        options += '<div class="col-md-2"><label class="checkbox-inlines"><input type="radio" '+checked+' value="'+i+'" name="exam_set" id="es'+i+'" disabled> Practice Set '+i+'<span class="checkmark" ></span></label></div>';
      }
      $('.examSetsTypes').html(options); 
        }
        $('#withouttimer').click(function(){
            if($(this).prop("checked") == true){
                $(".shoehidediconexams").css("display","none");
                $(".doThisOnCheck").removeClass("col-lg-8 col-lg-offset-2");
                $(".doThisOnCheck").addClass("col-lg-4 col-lg-offset-4");
            }
            else if($(this).prop("checked") == false){
                $(".shoehidediconexams").css("display","block");
                $(".doThisOnCheck").removeClass("col-lg-4 col-lg-offset-4");
                $(".doThisOnCheck").addClass("col-lg-8 col-lg-offset-2");
            }
        });
        
        // $.removeCookie('checkboxValues', { path: '/' });
        // var checkboxValues = JSON.parse(localStorage.getItem('checkboxValues')) || {},
        //     $checkboxes = $(".Questype :checkbox");
        //     // $checkboxes = $(".qTypes :checkbox");

        // $checkboxes.on("change", function() {
        //     $checkboxes.each(function() {
        //         checkboxValues[this.id] = this.checked;
        //     });

        //     localStorage.setItem("checkboxValues", JSON.stringify(checkboxValues));
        // });

        // // On page load
        // $.each(checkboxValues, function(key, value) {
        //     $("#" + key).prop('checked', value);
        // });
        
        // var cookies = $.cookie();
        // for(var cookie in cookies) {
        //   $.removeCookie(cookie);
        // }
        
        
      </script>


<!-- Function.js -->
<script type="text/javascript">
  $(document).ready(function() {

    $( ".accordion" ).accordion({
      collapsible: true
    });
    
    $(".DragImage .sourceBox").draggable();
    $(".DragImage .targetBox").droppable({
      drop: function( event, ui ) {
        //$( this ).addClass( "ui-state-highlight" );
    var clsName = event.originalEvent.target.className;
    console.log($(this).attr('class'));
    console.log('Dragable Class ='+clsName);
    $(this).attr('id',clsName);
        //$( this ).addClass( "ui-state-highlight" ).find( "p" ).html( "Dropped!" );
      }
    });
  
  var question_type = $('#question_type').val();
  if(question_type == 'Hotspot')
  {
    var hotspotImageHTML = $('.HotImage').html();
    $('.hotspotAnswerBox').html(hotspotImageHTML);
  }
  
  var question_type = $('#question_type').val();
  if(question_type == 'DragDrop')
  {
    var dragDropAnswerBox = $('.DragImage').html();
    $('.dragDropAnswerBox').html(dragDropAnswerBox);
    
    var targetCounterANS = 1;
    $(".dragDropAnswerBox .targetBox").each(function() {
      
      var thisClass = $(this).attr('class');
      thisClass = thisClass.replace(" ui-droppable","");
      thisClass = thisClass.replace("targetBox ","");
      thisClass = thisClass.replace("target_","");
      
      var styleCSS = $(this).attr('style');
      
      var targetCounterSB = 1;
      $(".dragDropAnswerBox .SB_"+thisClass).each(function() {
        $(this).addClass('SB_'+thisClass+'_'+targetCounterSB);
        targetCounterSB++;
      })
      
      $('.dragDropAnswerBox .SB_'+thisClass+'_'+targetCounterANS).attr('style',styleCSS);
      
    targetCounterANS++;
    })
  }
  
  
  $('.markcheck').click(function(){
    var current_mark = $(this).attr('id');
    var curr_question = current_mark.replace("_mark", "");
    curr_question = curr_question.replace("QN_", "");
    console.log(current_mark);
    console.log(curr_question);
    var num = $('#QN_'+curr_question+' #CurrentQNo').html();
    var current_q_rev = current_mark.replace("_mark", "_rev");
    
    $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      //swiper.slideNext();
      //swiper.slidePrev();
    
    if(!($('.examscountinnserarea ul #QN_'+curr_question+'_rev').length))
      {
          $('.examscountinnserarea ul').append('<li><div onclick="return gotoQuestion(\''+curr_question+'\');" id="QN_'+curr_question+'_rev" numid="'+num+'" class="revQItem" >'+num+'</div></li>');
      }
    
    if($('#'+current_mark).is(":checked"))
    {

      $('.swiper-slide #'+current_q_rev).removeClass('completed');
      $('.swiper-slide #'+current_q_rev).addClass('marked');
      
      $('ul li #'+current_q_rev).removeClass('completed');
      $('ul li #'+current_q_rev).addClass('marked');
    }
    else
    {
      $('.swiper-slide #'+current_q_rev).removeClass('marked');
      $('ul li #'+current_q_rev).removeClass('marked');
    }
  })
  
  
  });
  
  
  function gotoQuestion(curr_question){
    console.log(curr_question);
    
    
    if($('#QN_'+curr_question).length)
      {
            $('.swiper-slide').removeClass('activeSlide');
        $('.swiper-slide #QN_'+curr_question+'_rev' ).parent( ".swiper-slide" ).addClass('activeSlide');
      }
      else
      {
          if(!$('.swiper-slide #QN_'+curr_question+'_rev').hasClass('defaultbtn')){
            $('.swiper-slide').removeClass('activeSlide');
            $('.swiper-slide #QN_'+curr_question+'_rev' ).parent( ".swiper-slide" ).addClass('activeSlide');
        }
      }
    
    var num = $('#QN_'+curr_question+'_rev').attr('numid');
    console.log(num);
    var nxt_question_id = $('#NXT_'+curr_question).val();
    var prv_question_id = $('#PRV_'+curr_question).val();
    var newCaseStudy = $('#caseStudyNumber'+curr_question).val();
    console.log(nxt_question_id);
    console.log(prv_question_id);
    console.log(newCaseStudy);
    $.magnificPopup.close();
    
    if($('#QN_'+curr_question).length)
    {
      $('.questionBox').hide();
      $('#QN_'+curr_question).show();
      $('.caseStudyItem').show();
      $('#CSBX'+newCaseStudy).show();
      //$('#CurrentQNo').html(num);
      return false;
    }
    
    //getQuestion(curr_question,'next',nxt_question_id,caseStudy,num);
  }
  
  function endExamwithConfirm(){
      $.confirm({
          title: 'End Exam',
          content: 'Are you sure you want to end the exam?',
          buttons: {
            confirm: {
              text: 'Yes',
              btnClass: 'btn-blue',
              keys: ['enter', 'shift'],
              action: function(){
                endExam();
              }
            },
            cancel: {
              text: 'No',
              btnClass: 'btn-default',
              keys: ['enter', 'shift'],
              action: function(){
                  //return false;
              }
            }
          }
      });
  }
  
  function fetchQuestion(curr_question,mode,question_id,caseStudy,num){
    if ($('#nextQuestion'+curr_question).hasClass("lastQuestion")) {
      $.confirm({
          title: 'End Exam',
          content: 'Are you sure you want to end the exam?',
          buttons: {
            confirm: {
              text: 'Yes',
              btnClass: 'btn-blue',
              keys: ['enter', 'shift'],
              action: function(){
                getQuestion(curr_question,mode,question_id,caseStudy,num);
              }
            },
            cancel: {
              text: 'No',
              btnClass: 'btn-default',
              keys: ['enter', 'shift'],
              action: function(){
                  //return false;
              }
            }
          }
      });
  }
  else
  {
      getQuestion(curr_question,mode,question_id,caseStudy,num);
  }
  }
  
  
  function getQuestion(curr_question,mode,question_id,caseStudy,num){
  console.log(curr_question);
  //$('#nextQuestion'+curr_question).attr('disabled','disabled');
  //$('#nextQuestion'+question_id).attr('disabled','disabled');
  
  var swiper = document.querySelector('.swiper-container').swiper;
  $('.swiper-slide').removeClass('activeSlide');
    $('.swiper-slide #QN_'+question_id+'_rev' ).parent( ".swiper-slide" ).addClass('activeSlide');
    var numid = $('.swiper-slide #QN_'+question_id+'_rev' ).attr('numid');
    if(numid > 9)
    {
        console.log("Hello Slide:"+numid);
        swiper.slideNext();
    }
  
  if(!($('.examscountinnserarea ul #QN_'+curr_question+'_rev').length))
  {
      $('.examscountinnserarea ul').append('<li><div onclick="return gotoQuestion(\''+curr_question+'\');" id="QN_'+curr_question+'_rev" numid="'+num+'" class="revQItem" >'+num+'</div></li>');
  }
   
   $('.DragImage img').removeClass('mCS_img_loaded');
   
   var CurrentQNo = $('#QN_'+curr_question+' #CurrentQNo').html();
   var totalQNo = $('#totalQNo').html();
       //alert(totalQNo); 
    //var numItems = $('.examscountinnserarea .swiper-slide').length; 
    //console.log(numItems+" NO OF QS");
   var lastQuestion = false;
  if(question_id == '')
  {
    lastQuestion = true;
    $('#nextQuestion'+curr_question).removeAttr('disabled');
    $('#nextQuestion'+question_id).removeAttr('disabled');
  }
  
  var exam_code = $('#QN_'+curr_question+' #exam_code').val();
  var user_id = $('#QN_'+curr_question+' #user_id').val();
  var attempt_id = $('#QN_'+curr_question+' #attempt_id').val();
  var question_type = $('#QN_'+curr_question+' #question_type').val();
  var correctAnswer = $('#QN_'+curr_question+' #correctAnswer').val();
  
  console.log(user_id);
  console.log(attempt_id);
  console.log(question_type);
  console.log(correctAnswer);
  
  if(question_type == 'SingleChoice')
  {
    if ($("input[name='"+curr_question+"_QA']:checked").val()) {
      
      $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      $('.swiper-slide #QN_'+curr_question+'_rev').addClass('completed');
      $('ul li #QN_'+curr_question+'_rev').addClass('completed');
    
       var user_answer = $("input[name='"+curr_question+"_QA']:checked").val();
       if(user_answer == correctAnswer)
       {
        var answer_status = 'true';
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer); 
       }
       else
       {
        var answer_status = 'false';
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer); 
       }
    }
    else
    {
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
      $('ul li #QN_'+curr_question+'_rev').removeClass('completed');
      
      var answer_status = 'skip';
      var user_answer = '';
      addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
    }
  }
  else if(question_type == 'MultipleChoice')
  {
    var answers = [];
    $("input[name='"+curr_question+"_QA[]']:checked").each( function () {
       answers.push($(this).val());
    });
    if(answers.length > 0){
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      $('.swiper-slide #QN_'+curr_question+'_rev').addClass('completed');
      $('ul li #QN_'+curr_question+'_rev').addClass('completed');
      
      var user_answer = answers.join(", ");
      console.log(correctAnswer);
      console.log(user_answer);
      if(user_answer == correctAnswer)
      {
        var answer_status = 'true';
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer); 
      }
      else
      {
        var answer_status = 'false';
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer); 
      }
    }
    else
    {
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
      $('ul li #QN_'+curr_question+'_rev').removeClass('completed');
      
      var answer_status = 'skip';
      var user_answer = '';
      addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
    }
  }
  else if(question_type == 'DragDrop')
  {
    var errorCheck = 0;
    var counterDrag = 0;
    var user_answer = [];
    var correctAnswer = [];
    
    $("#QN_"+curr_question+" .DragImage .targetBox").each(function() {
      
      var thisID = $(this).attr('id');
      if(thisID)
      {
        thisIDINT = thisID.replace("DragSI_","");
      }
      else
      {
        thisIDINT = '';
      }
      
      
      var thisClass = $(this).attr('class');
      thisClass = thisClass.replace(" ui-droppable","");
      thisClass = thisClass.replace("targetBox ","");
      thisClass = thisClass.replace("target_","");
      thisClass = thisClass.replace("mCS_img_loaded","");
      thisClass = thisClass.replace(" mCS_img_loaded","");
       
      
      
      correctAnswer[counterDrag] = thisClass;
      user_answer[counterDrag] = thisIDINT;
      
      if($(this).hasClass('target_'+thisIDINT))
      {
        
      }
      else
      {
        errorCheck++;
      }
      counterDrag++;
    })
    console.log(counterDrag);
    user_answer_check = user_answer.join(", ");
    user_answer_check = user_answer_check.replace(/,/g, '');
    user_answer_check = user_answer_check.replace(/\s/g, '')
    console.log(user_answer_check);
    
    if(counterDrag > 0 && user_answer_check != '')
    {
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      $('.swiper-slide #QN_'+curr_question+'_rev').addClass('completed');
      $('ul li #QN_'+curr_question+'_rev').addClass('completed');
      if(errorCheck == 0)
      {
        var answer_status = 'true';
        user_answer = user_answer.join(", ");
        correctAnswer = correctAnswer.join(", ");
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
      }
      else
      {
        var answer_status = 'false';
        user_answer = user_answer.join(", ");
        correctAnswer = correctAnswer.join(", ");
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
      }
    }
    else
    {
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
      $('ul li #QN_'+curr_question+'_rev').removeClass('completed');
      
      var answer_status = 'skip';
      var user_answer = '';
      correctAnswer = correctAnswer.join(", ");
      addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
    }
    
    
  }
  else if(question_type == 'Hotspot')
  {
    console.log('Hotspot');
    
    
    var mainCounter = 0;
    var checkVariable = 0;
    var countDots = 0;
    
    $("#QN_"+curr_question+" .HotImage .dotClass").each(function() {
        countDots++;
    });
    
    
    
    $("#QN_"+curr_question+" .HotImage .hotAnswerBox").each(function(index) {
      var ansLeft = parseFloat($(this).css("left"));
      var ansTop = parseFloat($(this).css("top"));
      var ansWidth = parseFloat($(this).css("width"));
      var ansHeight = parseFloat($(this).css("height"));
      
      var checkAreaWidth = parseFloat(ansLeft) + parseFloat(ansWidth);
      var checkAreaHeight = parseFloat(ansHeight) + parseFloat(ansTop);
      
      $("#QN_"+curr_question+" .HotImage .dotClass").each(function() {
        var hotSpotTop = $(this).attr('top');
        var hotSpotLeft = $(this).attr('left');
        
        if((hotSpotLeft > ansLeft && hotSpotLeft < checkAreaWidth) && (hotSpotTop > ansTop && hotSpotTop < checkAreaHeight))
        {
          checkVariable++;
        }
      });
    mainCounter++;
    });
    
    console.log(mainCounter);
    console.log(checkVariable);
    console.log(countDots);
    
    if(countDots > 0)
    {
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      $('.swiper-slide #QN_'+curr_question+'_rev').addClass('completed');
      $('ul li #QN_'+curr_question+'_rev').addClass('completed');
      
      if(isEqual(mainCounter,checkVariable,countDots))
      {
        var answer_status = 'true';
        var user_answer = countDots;
        var correctAnswer = mainCounter;
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
      }
      else
      {
        var answer_status = 'false';
        var user_answer = countDots;
        var correctAnswer = mainCounter;
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
      }
      
    }
    else
    {
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
      $('ul li #QN_'+curr_question+'_rev').removeClass('completed');
      
      var answer_status = 'skip';
      var user_answer = '';
      var correctAnswer = mainCounter;
      addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
    }
    
    
    //return false;
  }
  else if(question_type == 'OrderList')
  {
    var answers = [];
    var counter = 0;
     $('#orderlist_'+curr_question+' :selected').each(function(){
       answers[counter] = $(this).text();
       counter++;
      });
    console.log(answers);
    correctAnswer = correctAnswer.split(', ');
    
    console.log(answers);
    console.log(correctAnswer);
    if(counter > 0)
    {
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      $('.swiper-slide #QN_'+curr_question+'_rev').addClass('completed');
      $('ul li #QN_'+curr_question+'_rev').addClass('completed');
      
      if (JSON.stringify(answers) == JSON.stringify(correctAnswer))
      {
        console.log('Yes Same!');
        var correctAnswer = JSON.stringify(correctAnswer);
        var user_answer = JSON.stringify(answers);
        console.log(JSON.stringify(correctAnswer));
        var answer_status = 'true';
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer); 
      }
      else
      {
        console.log('Not Same!');
        var correctAnswer = JSON.stringify(correctAnswer);
        var user_answer = JSON.stringify(answers);
        console.log(JSON.stringify(correctAnswer));
        var answer_status = 'false';
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer); 
      }
    }
    else
    {
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
      $('ul li #QN_'+curr_question+'_rev').removeClass('completed');
      
      var answer_status = 'skip';
      var user_answer = '';
      var correctAnswer = JSON.stringify(correctAnswer);
      addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer);
    }
    //return false;
    
  }
  else if(question_type == 'FillInTheBlank')
  {
    
  }
  else if(question_type == 'DropDown')
  {
    var counterDD = 0;
    var userAnsweredDD = 0;
    var wrongAnswer = 0;
    var answers = [];
    var correct_answers = [];
    $("#QN_"+curr_question+" .fullDDTable .ddSelect").each(function(index) {
      var DDSelectID = $(this).attr("id");
      var selectedVal = $('#'+DDSelectID+' :selected').val();
      DDSelectID = DDSelectID.replace("ddSelect_","");
      if(selectedVal)
      {
        var correctAns = $('#ddSelectHidden_'+DDSelectID).val();
        answers.push(selectedVal);
        correct_answers.push(correctAns);
        userAnsweredDD++;
      }
      else
      {
        
      }
      counterDD++;
    })
    
    if(counterDD == userAnsweredDD)
    {
      console.log(answers);
      console.log(correct_answers);
            
            $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      $('.swiper-slide #QN_'+curr_question+'_rev').addClass('completed');
      $('ul li #QN_'+curr_question+'_rev').addClass('completed');
      
      if (JSON.stringify(answers) == JSON.stringify(correct_answers))
      {
        console.log('Yes Same!');
        var correct_answers = correct_answers.join(', ');
        var user_answer = answers.join(', ');
        var answer_status = 'true';
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correct_answers); 
      }
      else
      {
        console.log('Not Same!');
        var correct_answers = correct_answers.join(', ');
        var user_answer = answers.join(', ');
        var answer_status = 'false';
        addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correct_answers); 
      }
    }
    else
    {
        $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
      $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
      $('ul li #QN_'+curr_question+'_rev').removeClass('completed');
      
      var answer_status = 'skip';
      var user_answer = '';
      var correct_answers = correct_answers.join(', ');
      addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correct_answers);
    }
    //return false;
  }
  else if(question_type == 'CorrectText')
  {
    
  }
  
  if($('#QN_'+curr_question+'_mark').is(":checked"))
  {
      $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('defaultbtn');
    $('.swiper-slide #QN_'+curr_question+'_rev').removeClass('completed');
    $('.swiper-slide #QN_'+curr_question+'_rev').addClass('marked');
    $('ul li #QN_'+curr_question+'_rev').addClass('marked');
  }
  
  if(lastQuestion == true)
  {
    endExam();
    //console.log('last Question');
    /*$.magnificPopup.open({
      items: {
      src: '#ReviewBox'
      },
      type: 'inline'
    });
    $('.openReviewPopup').show();
    $(".mfp-content .examcountdiv").mCustomScrollbar();*/
    return false;
  }
  
  
  if($('#QN_'+question_id).length)
  {
    $.magnificPopup.close();
    $('.questionBox').hide();
    var newCaseStudy = $('#caseStudyNumber'+question_id).val();
    
    $('.swiper-slide').removeClass('activeSlide');
    $('#QN_'+question_id+'_rev' ).parent( ".swiper-slide" ).addClass('activeSlide');
    
        if(caseStudy == newCaseStudy)
    {
      $('#QN_'+question_id).show();
    }
    else
    {
      $('#QN_'+question_id).show();
      console.log('#QN_'+question_id);
      $('.caseStudyItem').show();
      $('#CSBX'+newCaseStudy).show();
    }
    
    $('#nextQuestion'+curr_question).removeAttr('disabled');
    $('#nextQuestion'+question_id).removeAttr('disabled');
    return false;
  }
  //return false;
    
  var URL = 'getQuestion.php';
  
  var data = {'previous_question':curr_question,'question_id':question_id,'case_study':caseStudy,'num':num,'mode':mode, 'exam_code':exam_code};
  $(".loadingimg").show();
  $.ajax({
    type: 'POST',
    url: URL,
    data: data,
    dataType: 'html',
    success: function (response) {
      $(".QuestionMainBox").append(response);
      $('.openReviewPopup').show();
      //CurrentQNo = parseInt(CurrentQNo) + 1;
        //$('#QN_'+question_id+' #CurrentQNo').html(CurrentQNo);
      $('#QN_'+question_id+' #totalQNo').html(totalQNo);
      
      
      
      var numItems = $('.questionBox').length;
      var totalNoQuestions = $('#QuestionNoRange').val();
      if(numItems == totalNoQuestions)
      {
          $('#QN_'+question_id+' .nextQuestionBtn').html('End Exam');
          $('#QN_'+question_id+' .nextQuestionBtn').removeClass('btn-primary');
          $('#QN_'+question_id+' .nextQuestionBtn').removeClass('btn-danger');
          $('#QN_'+question_id+' .nextQuestionBtn').removeClass('lastQuestion');
          $('#QN_'+question_id+' .nextQuestionBtn').addClass('btn-danger');
          $('#QN_'+question_id+' .nextQuestionBtn').addClass('lastQuestion');
      }
      
      
      $( ".accordion" ).accordion({
              collapsible: true
            });
      
      
      
      $('.questionBox').hide();
      
      var newCaseStudy = $('#caseStudyNumber'+question_id).val();
      if(caseStudy == newCaseStudy)
      {
        $('#QN_'+question_id).show();
      }
      else
      {
        $('#QN_'+question_id).show();
        console.log('#QN_'+question_id);
        //$('#QN_'+question_id).hide();
        $('.caseStudyItem').show();
        $('#CSBX'+newCaseStudy).show();
      }
      
      $('#QN_'+question_id+' .DragImage .sourceBox').draggable();
      $('#QN_'+question_id+' .DragImage .targetBox').droppable({
        drop: function( event, ui ) {
        var clsName = event.originalEvent.target.className;
        console.log($(this).attr('class'));
        console.log('Dragable Class ='+clsName);
        $(this).attr('id',clsName);
        }
      });
      
      var HotImageIDArray2 = [];
      $("#QN_"+question_id+" .HotImage").each(function() {
        var HotImageID2 = $(this).attr('id');
        HotImageID2 = HotImageID2.replace("HotImage_","");
            
        HotImageIDArray2.push(HotImageID2);
      })
      var HotImageOrig2 = Math.max.apply(null, HotImageIDArray2);
      
      
       //$('.hotAnswerBox').remove();
       $('#QN_'+question_id+' #HotImage_'+HotImageOrig2+' img').click(function (ev) {
          console.log(ev);
          var yxis = ev.offsetY - 4;
          var xxis = ev.offsetX - 5;
          console.log(yxis);
          console.log(xxis);
          var randID = generate(5);
          $('#QN_'+question_id+' #HotImage_'+HotImageOrig2).append(            
            $('<div class="dotClass" id="dotClass'+randID+'" top="'+yxis+'" left="'+xxis+'"></div>').css({
              top: yxis + 'px',
              left: xxis + 'px'
            })              
          );
          $('#QN_'+question_id+' .dotClass').click(function(dc){
             var ItemID = $(this).attr('id');
            $('#QN_'+question_id+' .dotClass#'+ItemID).remove();
          })
        });
        
        $('#QN_'+question_id+' .orderlistSel').multiselect2side({
            selectedPosition: 'right',
            moveOptions: true,
            labelsx: '',
            labeldx: '',
            autoSort: false,
            autoSortAvailable: false
          });
        
        console.log(question_id);
        var question_type = $('#QN_'+question_id+' #question_type').val();
        
        if(question_type == 'Hotspot')
        {
          
          var HotImageIDArray = [];
          $("#QN_"+question_id+" .HotImage").each(function() {
            var HotImageID = $(this).attr('id');
            HotImageID = HotImageID.replace("HotImage_","");
            
            HotImageIDArray.push(HotImageID);
          })
          var HotImageOrig = Math.max.apply(null, HotImageIDArray);
          
          var Hindex = HotImageIDArray.indexOf(HotImageOrig);
          HotImageIDArray.splice(Hindex, 1);
          $.each(HotImageIDArray, function( ind, val ) {
            $('#HotImage_'+val+' .hotAnswerBox').remove();
          });
          
          
          var hotspotImageHTML = $('#QN_'+question_id+' #HotImage_'+HotImageOrig).html();
          $('#QN_'+question_id+' .hotspotAnswerBox').html(hotspotImageHTML);
        }
        
        
        if(question_type == 'DragDrop')
        {
          
          var DragImageIDArray = [];
          $("#QN_"+question_id+" .DragImage").each(function() {
            var DragImageID = $(this).attr('id');
            DragImageID = DragImageID.replace("DragImage_","");
            
            DragImageIDArray.push(DragImageID);
          })
          var DragImageOrig = Math.max.apply(null, DragImageIDArray);
          console.log(DragImageOrig);
          
          var dragDropAnswerBox = $('#QN_'+question_id+' #DragImage_'+DragImageOrig).html();
          $('#QN_'+question_id+' .dragDropAnswerBox').html(dragDropAnswerBox);
          
          var targetCounterANS = 1;
          $("#QN_"+question_id+" .dragDropAnswerBox .targetBox").each(function() {
                
                var thisClass = $(this).attr('class');
                thisClass = thisClass.replace(" ui-droppable","");
                thisClass = thisClass.replace("targetBox ","");
                thisClass = thisClass.replace("target_","");
                
                var styleCSS = $(this).attr('style');
                
                var targetCounterSB = 1;
                $("#QN_"+question_id+" .dragDropAnswerBox .SB_"+thisClass).each(function() {
                  $(this).addClass('SB_'+thisClass+'_'+targetCounterSB);
                  targetCounterSB++;
                })
                
                $('#QN_'+question_id+' .dragDropAnswerBox .SB_'+thisClass+'_'+targetCounterANS).attr('style',styleCSS);
                
              targetCounterANS++;
          })
          
          console.log(DragImageIDArray);
          var Aindex = DragImageIDArray.indexOf(DragImageOrig);
          console.log(DragImageIDArray);
          DragImageIDArray.splice(Aindex, 1);
          console.log(DragImageOrig);
          console.log(DragImageIDArray);
          $.each(DragImageIDArray, function( index, value ) {
            $('#DragImage_'+value+' .targetBox').remove();
            $('#DragImage_'+value+' .sourceBox').remove();
            $('#DragImage_'+value+' .source_parent').remove();
          });
          
        }
      $(".loadingimg").hide();
      
  //      jQuery(".questionBox").mCustomScrollbar();
      jQuery(".caseStudyItem").mCustomScrollbar();
      
      //jQuery(".HotImage").mCustomScrollbar();
      $('.DragImage img').removeClass('mCS_img_loaded');
      $('a.imageCSA').fancybox();
      
      $('#nextQuestion'+curr_question).removeAttr('disabled');
      $('#nextQuestion'+question_id).removeAttr('disabled');
    },
    
    error: function () {
      console.log('something went wrong please try again');
      $(".loadingimg").hide();
    }
  });
  
  }
  
  
    function previousQuestion(question_id,caseStudy,curr_question_id){
      $('.questionBox').hide();
      $('#QN_'+question_id).show();
      $('.caseStudyMainBox').show();
      $('.caseStudyItem').show();
      $('.QuestionMainBoxBig').show();
      
      var swiper = document.querySelector('.swiper-container').swiper;
      $('.swiper-slide').removeClass('activeSlide');
        $('#QN_'+question_id+'_rev' ).parent( ".swiper-slide" ).addClass('activeSlide');
        swiper.slidePrev();
      
      //var CurrentQNo = $('#QN_'+curr_question_id+' #CurrentQNo').html();
      //CurrentQNo = parseInt(CurrentQNo) - 1;
      //$('#CurrentQNo').html(CurrentQNo);
      console.log('#nextQuestion'+question_id);
      $('#nextQuestion'+question_id).removeAttr('disabled');
      var newCaseStudy = $('#caseStudyNumber'+question_id).val();
  //      if(caseStudy == newCaseStudy)
  //      {
  //        $('.caseStudyItem').hide();
  //        $('#CSBX'+caseStudy).show();
  //      }
  //      else
  //      {
  //        $('.caseStudyItem').hide();
  //        $('#CSBX'+newCaseStudy).show();
  //      }
  }
  
  function toggleShowAnswers(question_id){
    if($('#QN_'+question_id+' .correctAnswers').hasClass('showThis'))
    {
      $('#QN_'+question_id+' .correctAnswers').removeClass('showThis');
      $('#QN_'+question_id+' .correctAnswers').addClass('hideThis');
      $('#showAnswer'+question_id).html('<i class="fa fa-eye"></i> Show Answer');
    }
    else
    {
      $('#QN_'+question_id+' .correctAnswers').removeClass('hideThis');
      $('#QN_'+question_id+' .correctAnswers').addClass('showThis');
      $('#showAnswer'+question_id).html('Hide Answer');
      
      //$('#QN_'+question_id).scrollTop($('#QN_'+question_id)[0].scrollHeight);
    }
  }
  
  
  function isEqual() {
        var val = arguments[0],
            equal = true;
        for (var i = 0; i < arguments.length; i++) {
            equal = (arguments[i] === val);
            if (!equal) return false;
        }
        return equal;
    }
  
  
  function addAnswertoQuestion(exam_code,curr_question,question_type,user_id,attempt_id,user_answer,answer_status,correctAnswer){
    
    var site = $('#site').val();
    var URL = 'addAnswertoQuestion.php';
    var data = {'exam_code':exam_code,'question_id':curr_question,'question_type':question_type,'user_id':user_id,'attempt_id':attempt_id,'user_answer':user_answer,'result':answer_status,'correct_answer':correctAnswer,'site':site};
    $.ajax({
      type: 'POST',
      url: URL,
      data: data,
      dataType: 'json',
      success: function (response) {
        console.log(response);
      },
      error: function () {
        console.log('There is some issue while adding your answer.');
      }
    });
      
      
  }
  
  
  function endExam(){
    $('.QuestionMainBoxBig').hide();
    $('.caseStudyMainBox').hide();
    $('.ExamNoTime').hide();
    $('#ExamResult').show();
    $('.examResultSidebar').show();
    $('#resultNav').show();
    //$("#ExamResult").mCustomScrollbar();
    $.magnificPopup.close();
    
    var exam_code = $('#exam_code').val();
    var exam_set = $('#exam_set').val();
    exam_set = 'Exam '+exam_set;
    var user_id = $('#user_id').val();
    var attempt_id = $('#attempt_id').val();
    var pass_per = $('#pass_per').val();
    var site = $('#site').val();
    var selected_questions = $('#totalQNo').html();
    
    var tHour = $('#tHour').val();
    var tMinutes = $('#tMinutes').val();
    var selected_time = tHour+':'+tMinutes+':59';
    var spend_time = $('#timeRem').html();
      
    var URL = 'getExamResult.php';
    var data = {'exam_code':exam_code,
    'user_id':user_id,
    'exam_set':exam_set,
    'attempt_id':attempt_id,
    'pass_per':pass_per,
    'site':site, 
    'selected_questions': selected_questions,
    'selected_time' : selected_time,
    'spend_time':spend_time
        
    };
    $.ajax({
      type: 'POST',
      url: URL,
      data: data,
      dataType: 'html',
      success: function (response) {
        // console.log(response);
        $("#ExamResult").html(response);
        $('#resultTable').DataTable();
        // $("#ExamResult").mCustomScrollbar();
      },
      error: function () {
        console.log('There is some issue while getting your result.');
      }
    });
  }
  
  $('#resultTable').dataTable( {
  "stripeClasses": [ 'strip1', 'strip2', 'strip3' ]
  } );
  
  
  $(document).ready(function() {
      /* $(window).scroll(function() {
          var height = $(".QuestionMainBox").height();
          if(height > 500){
              $(".QuestionMainBox").css({ 'overflow-y': 'scroll'});
          } else{
              $(".QuestionMainBox").css({ 'overflow-y': 'hidden'});
          }
            
        });  */ 

    });
  
  function timeisUp() {
    //Code to be executed when timer expires.
    $.confirm({
      title: 'Time Out!',
      content: 'You have run out of time, Would you like end the exam?',
      buttons: {
        confirm: {
          text: 'Yes',
          btnClass: 'btn-blue',
          keys: ['enter', 'shift'],
          action: function(){
            endExam()
            //$.alert('Something else?');
          }
        },
        cancel: {
          text: 'No',
          btnClass: 'btn-default',
          keys: ['enter', 'shift'],
          action: function(){
            //$.alert('Something else?');
          }
        }
      }
    });
  }
  
  
  function startExam(){
    var QuestionNoRange = $('#QuestionNoRange').val();
    var PassRange = $('#PassRange').val();
    
    $('#pass_per').val(PassRange);
    
    $('#CurrentQNo').html(1);
    $('#totalQNo').html(QuestionNoRange);
    
    var tHour = $('#tHour').val();
    var tMinutes = $('#tMinutes').val();

    
    
    if ( $("#CSBX1").length ) {
      
      $('.ExamNoTime').hide();
      $('.ExamStartOptions').hide();
      $('.caseStudyMainBox').hide();
      $('.QuestionMainBoxBig').show();
      $('#CSBX1').show();
    }
    else
    {
      tHour = parseInt(tHour);
      tMinutes = parseInt(tMinutes);
      /*$("#timeRem").countdowntimer({
        'hours' : tHour, 
        'minutes' : tMinutes,
        'timeUp' : timeisUp
      });*/
      
      $('.ExamNoTime').show();
      $('.ExamStartOptions').hide();
      $('.QuestionMainBoxBig').show();
    }
    startFirstQuestion();
  }
  
  function startFirstQuestion(){
    var QuestionNoRange = $('#QuestionNoRange').val();
    var PassRange = $('#PassRange').val();
    var without_timer = $('#without_timer').val();
    $('#pass_per').val(PassRange);
    
    
    $('#CurrentQNo').html(1);
    $('#totalQNo').html(QuestionNoRange);
    
    if(without_timer != 1)
    {
        var tHour = $('#tHour').val();
        var tMinutes = $('#tMinutes').val();
        tHour = parseInt(tHour);
        tMinutes = parseInt(tMinutes);
        $("#timeRem").countdowntimer({
          'hours' : tHour, 
          'minutes' : tMinutes,
          'timeUp' : timeisUp
        });
        $('.ExamNoTime').show();
    }
    else
    {
        $('.timeBox').hide();
    }
    
      
      //$('.caseStudyItem').hide();
      $('.ExamStartOptions').hide();
      $('.QuestionMainBoxBig').show();
      $('.questionBox').show();
  }
  
  
  function showCaseStudy(csID,preQID,currQID,nxtQID)
  {
    var preBtn = '';
    var nxtBtn = '';
    if(preQID)
    {
      preBtn = '<button id="previousQuestion'+preQID+'" onclick="return previousQuestion(\''+preQID+'\');"><span class="fa fa-angle-left"></span></button>';
    }
    if(currQID)
    {
      nxtBtn = '<button id="showQuestion'+currQID+'" onclick="return showCurrQuestion(\''+currQID+'\');">Save & Next</button>';
    }
    
    $('.csActionBtns').html('');
    $('.csActionBtns').append(preBtn);
    $('.csActionBtns').append(nxtBtn);
    $('.questionBox').hide();
    $('.caseStudyItem').hide();
    $('.QuestionMainBoxBig').show();
    $('#CSBX'+csID).show();
  }
  
  
  function showCurrQuestion(currQID){
    
    $('.caseStudyMainBox').hide();
    $('.caseStudyItem').hide();
    $('.QuestionMainBoxBig').show();
    $('#QN_'+currQID).show();
  }
  
  
  
  function showUserQuestionResult(qid){
      console.log(qid);
      $.magnificPopup.open({
          items: {
            src: '#'+qid, // can be a HTML string, jQuery object, or CSS selector
            type: 'inline'
          }
        });
        $('.mfp-content .questionBox').removeAttr('style');
        $('.mfp-content .questionBox').attr('style','width: 80%;margin-left: 10%;background:white;margin-top: 0%');
  }
  
  function showUserQuestionResultAjax(qid,user_id,exam_code,siteurl,site,attempt_id,question_type){
      var question_id  = qid;
      var URL = 'getQuestionDetailAjax.php';
    var data = {'question_id':qid,'user_id':user_id,'exam_code':exam_code,'siteurl':siteurl,'site':site,'attempt_id':attempt_id};
      console.log(qid);
      $.ajax({
        type: 'POST',
        url: URL,
        data: data,
        dataType: 'html',
        success: function (response) {
            console.log(response);
            $.magnificPopup.open({
                  items: {
                    src: '<div>'+response+'</div>',
                    type: 'inline'
                  }
                });
                
      
      $('#QN_'+question_id+' .DragImage .sourceBox').draggable();
      $('#QN_'+question_id+' .DragImage .targetBox').droppable({
        drop: function( event, ui ) {
        var clsName = event.originalEvent.target.className;
        console.log($(this).attr('class'));
        console.log('Dragable Class ='+clsName);
        $(this).attr('id',clsName);
        }
      });
      
      var HotImageIDArray2 = [];
      $("#QN_"+question_id+" .HotImage").each(function() {
        var HotImageID2 = $(this).attr('id');
        HotImageID2 = HotImageID2.replace("HotImage_","");
            
        HotImageIDArray2.push(HotImageID2);
      })
      var HotImageOrig2 = Math.max.apply(null, HotImageIDArray2);
      
      $('#QN_'+question_id+' .orderlistSel').multiselect2side({
        selectedPosition: 'right',
        moveOptions: true,
        labelsx: '',
        labeldx: '',
        autoSort: false,
        autoSortAvailable: false
      });
        
        console.log(question_id);
        
        if(question_type == 'Hotspot')
        {
          
          var HotImageIDArray = [];
          $("#QN_"+question_id+" .HotImage").each(function() {
            var HotImageID = $(this).attr('id');
            HotImageID = HotImageID.replace("HotImage_","");
            
            HotImageIDArray.push(HotImageID);
          })
          var HotImageOrig = Math.max.apply(null, HotImageIDArray);
          
          var Hindex = HotImageIDArray.indexOf(HotImageOrig);
          HotImageIDArray.splice(Hindex, 1);
          $.each(HotImageIDArray, function( ind, val ) {
            $('#HotImage_'+val+' .hotAnswerBox').remove();
          });
          
          
          var hotspotImageHTML = $('#QN_'+question_id+' #HotImage_'+HotImageOrig).html();
          $('#QN_'+question_id+' .hotspotAnswerBox').html(hotspotImageHTML);
        }
        
        
        if(question_type == 'DragDrop')
        {
          
          var DragImageIDArray = [];
          $("#QN_"+question_id+" .DragImage").each(function() {
            var DragImageID = $(this).attr('id');
            DragImageID = DragImageID.replace("DragImage_","");
            
            DragImageIDArray.push(DragImageID);
          })
          var DragImageOrig = Math.max.apply(null, DragImageIDArray);
          console.log(DragImageOrig);
          
          var dragDropAnswerBox = $('#QN_'+question_id+' #DragImage_'+DragImageOrig).html();
          $('#QN_'+question_id+' .dragDropAnswerBox').html(dragDropAnswerBox);
          
          var targetCounterANS = 1;
          $("#QN_"+question_id+" .dragDropAnswerBox .targetBox").each(function() {
                
                var thisClass = $(this).attr('class');
                thisClass = thisClass.replace(" ui-droppable","");
                thisClass = thisClass.replace("targetBox ","");
                thisClass = thisClass.replace("target_","");
                
                var styleCSS = $(this).attr('style');
                
                var targetCounterSB = 1;
                $("#QN_"+question_id+" .dragDropAnswerBox .SB_"+thisClass).each(function() {
                  $(this).addClass('SB_'+thisClass+'_'+targetCounterSB);
                  targetCounterSB++;
                })
                
                $('#QN_'+question_id+' .dragDropAnswerBox .SB_'+thisClass+'_'+targetCounterANS).attr('style',styleCSS);
                
              targetCounterANS++;
          })
          
          console.log(DragImageIDArray);
          var Aindex = DragImageIDArray.indexOf(DragImageOrig);
          console.log(DragImageIDArray);
          DragImageIDArray.splice(Aindex, 1);
          console.log(DragImageOrig);
          console.log(DragImageIDArray);
          $.each(DragImageIDArray, function( index, value ) {
            $('#DragImage_'+value+' .targetBox').remove();
            $('#DragImage_'+value+' .sourceBox').remove();
            $('#DragImage_'+value+' .source_parent').remove();
          });
          
        }
      $(".loadingimg").hide();
      
  //      jQuery(".questionBox").mCustomScrollbar();
      jQuery(".caseStudyItem").mCustomScrollbar();
      
      //jQuery(".HotImage").mCustomScrollbar();
      $('.DragImage img').removeClass('mCS_img_loaded');
      $('a.imageCSA').fancybox(); 
                
        },
        error: function () {
          console.log('something went wrong please try again');
        }
      });
      
  }
  
</script>

   </body>
</html>