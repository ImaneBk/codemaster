<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="overflow-x:hidden">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <link rel="stylesheet" href="{{asset('css/app.css')}}">

       <style>
         .modal-backdrop {
    position: relative !important;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #000;
}
.modal.fade {
    position: relative !important;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1040;
    background-color: #000;
}
         .bar {
  list-style: none;
  color:#595dab;
}
.bar >li {
  position: relative;
}
.bar>li:before {
  content: '\25CF';
  margin-right: 10px;
  font-size: 20px;
}
.bar>li:after {
  position: absolute;
  left: 0;
  top: 0;
  content: '';
  border-left: 2px solid #595dab;
  margin-left: 5px;
  height: 100%;
}
.bar >li:first-of-type:after {
  top: 50%;
}
.bar >li:last-of-type:after {
  top: -50%;
}
         #hello {
	text-transform: uppercase;
	letter-spacing: .5em;
	display: inline-block;
	border: 4px double rgba(255,255,255,.25);
	border-width: 4px 0;
	padding: 1.5em 0em;
	position: relative;
	top: 18%;
	left: 50%;
	width: 40em;
	margin: 0 0 0 -20em;
         }
  
}

/* Animate Background Image */

@-webkit-keyframes aitf {
	0% { background-position: 0% 50%; }
	100% { background-position: 100% 50%; }
}
         .card.wiggle {
  background-color: white;
  margin-bottom: 1em;
  padding: 1em;
  border: 1px solid #ccc;
  border-radius: 3px;
  box-shadow: 1px 2px 3px #ccc;
  width: 250px;
  height: 307px;
  transition: all ease-in-out 0.7s;
  display: inline-block;
}

.card.wiggle:hover {
  box-shadow: 3px 4px 8px #ccc;
}

@keyframes wiggle {
  30% {
    transform: rotate( -5deg);
  }
  60% {
    transform: rotate( 5deg);
  }
  100% {
    transform: rotate( 0deg);
  }
}

.wiggle:hover {
  -webkit-animation-name: wiggle;
  -webkit-animation-duration: 400ms;
  -webkit-animation-count: 1;
  -webkit-animation-function: ease-in-out;
}
           .circle {
    position: absolute;
    top: 0;
    /* background: red; */
    /* background-color: red; */
    width: 100%;
    height: 100%;
	background: rgb(90,93,170);
background: linear-gradient(225deg, rgba(90,93,170,1) 0%, rgba(67,68,150,1) 8%, rgba(49,34,50,1) 63%);

  clip-path: ellipse(39% 28% at 85% 5%);
}
.crs {
    position: absolute;
    /* background: red; */
    /* background-color: red; */
    width: 100%;
    height: 100%;
	
	background: rgb(90,93,170);
background: linear-gradient(225deg, rgba(90,93,170,1) 0%, rgba(67,68,150,1) 8%, rgba(49,34,50,1) 63%);
	
-webkit-clip-path: ellipse(50% 65% at 70% 50%);
clip-path: ellipse(15% 14% at 77% 35%);    
}

.hi {
    position: absolute;
    /* background: red; */
    /* background-color: red; */
    width: 100%;
    height: 100%;
	
	background: rgb(90,93,170);
background: linear-gradient(225deg, rgba(90,93,170,1) 0%, rgba(67,68,150,1) 8%, rgba(49,34,50,1) 63%);
	
-webkit-clip-path: ellipse(50% 65% at 70% 50%);
clip-path: ellipse(7% 6% at 76% 49%);   
}

body{
    
}

footer{
	background: linear-gradient(225deg, rgba(90,93,170,1) 0%, rgba(67,68,150,1) 8%, rgb(89 92 169) 63%);
  position: relative;
}


footer a {
    color: #9993c2;
    text-decoration: none;
    background-color: transparent;
}

footer a:hover {
    color:#262550;
    text-decoration: none;
    
}
.navbar-light .navbar-nav .nav-link {
    color: rgb(169 163 204);
}

   
#flag {
      width: 110px;
      height: 56px;
      box-sizing: content-box;
      padding-top: 15px;
      position: relative;
      background: red;
      color: white;
      font-size: 11px;
      letter-spacing: 0.2em;
      text-align: center;
      text-transform: uppercase;
    }
    #flag:after {
      content: "";
      position: absolute;
      left: 0;
      bottom: 0;
      width: 0;
      height: 0;
      border-bottom: 13px solid #eee;
      border-left: 55px solid transparent;
      border-right: 55px solid transparent;
    }
body{
  
  background:#7277b9;
	
	background-image: linear-gradient(#f1f1f8 , rgba(255,255,255,0));
	transition: background-color 1s;
	
	animation: gradient 15s ease infinite;
}
@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
.animated-button1 {
    background: linear-gradient(-30deg, #443d8d 50%, #262550 50%);
    padding: 20px 40px;
    margin: 12px;
    display: inline-block;
    -webkit-transform: translate(0%, 0%);
    transform: translate(0%, 0%);
    overflow: hidden;
    color: #f1f1f8;
    font-size: 15px;
    letter-spacing: 2.5px;
    text-align: center;
    text-transform: uppercase;
    text-decoration: none;
    -webkit-box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
}

.animated-button1::before {
  content: '';
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 100%;
  background-color: #ad8585;
  opacity: 0;
  -webkit-transition: .2s opacity ease-in-out;
  transition: .2s opacity ease-in-out;
}

.animated-button1:hover::before {
  opacity: 0.2;
}

.animated-button1 span {
  position: absolute;
}

.animated-button1 span:nth-child(1) {
    top: 0px;
    left: 0px;
    width: 100%;
    height: 2px;
    background: -webkit-gradient(linear, right top, left top, from(rgba(43, 8, 8, 0)), to(#d92626));
    background: linear-gradient(to left, rgba(43, 8, 8, 0), rgb(90 93 172));
    -webkit-animation: 2s animateTop linear infinite;
    animation: 2s animateTop linear infinite;
}

@keyframes animateTop {
  0% {
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }
  100% {
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
}

.animated-button1 span:nth-child(2) {
    top: 0px;
    right: 0px;
    height: 100%;
    width: 2px;
    background: -webkit-gradient(linear, left bottom, left top, from(rgba(43, 8, 8, 0)), to(#d92626));
    background: linear-gradient(to top, rgba(43, 8, 8, 0), #42459d);
    -webkit-animation: 2s animateRight linear -1s infinite;
    animation: 2s animateRight linear -1s infinite;
}

@keyframes animateRight {
  0% {
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
  }
  100% {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
}

.animated-button1 span:nth-child(3) {
    bottom: 0px;
    left: 0px;
    width: 100%;
    height: 2px;
    background: -webkit-gradient(linear, left top, right top, from(rgba(43, 8, 8, 0)), to(#d92626));
    background: linear-gradient(to right, rgba(43, 8, 8, 0), #262550);
    -webkit-animation: 2s animateBottom linear infinite;
    animation: 2s animateBottom linear infinite;
}

@keyframes animateBottom {
  0% {
    -webkit-transform: translateX(-100%);
            transform: translateX(-100%);
  }
  100% {
    -webkit-transform: translateX(100%);
            transform: translateX(100%);
  }
}

.animated-button1 span:nth-child(4) {
    top: 0px;
    left: 0px;
    height: 100%;
    width: 2px;
    background: -webkit-gradient(linear, left top, left bottom, from(rgba(43, 8, 8, 0)), to(#d92626));
    background: linear-gradient(to bottom, rgba(43, 8, 8, 0), #262550);
    -webkit-animation: 2s animateLeft linear -1s infinite;
    animation: 2s animateLeft linear -1s infinite;
}

@keyframes animateLeft {
  0% {
    -webkit-transform: translateY(-100%);
            transform: translateY(-100%);
  }
  100% {
    -webkit-transform: translateY(100%);
            transform: translateY(100%);
  }
}

#page2{

background-color: #42459d;

}

#page3{
	background:#7277b9;
	
	background-image: linear-gradient(  rgba(255,255,255,0),#f1f1f8);
	transition: background-color 1s;
  border-top: 20px solid #000;
  width: 100%;
  height: 100%;
  margin: 0;
  padding: 0;
  
}
.piw {
    position: absolute;
    /* background: red; */
    background-color:  #2c2953;
    width: 100%;
    height: 100%;
    /* -webkit-clip-path: ellipse(25% 64% at -6% 36%); */
    clip-path: ellipse(9% 59% at 0% 48%);

}

#diamond {
  position: absolute;
    /* background: red; */
    background-color:  #2c2953;
    width: 100%;
    height: 100%;
    clip-path: circle(7.2% at 0 50%);    
            }
            #diamondr {
  position: absolute;
    /* background: red; */
    background-color:  #2c2953;
    width: 100%;
    height: 100%;
    clip-path: circle(7.2% at 100% 84%);           }
#diamond-narrow {
  position: absolute;
    /* background: red; */
    background-color:  #2c2953;
    width: 100%;
    height: 100%;
    clip-path: polygon(80% 0%, 101% 0%, 104% 127%, 82% 95%, 96% 44%);
        }

        #flags{
          position: absolute;
    /* background: red; */
    background-color:  #2c2953;
    width: 100%;
    height: 100%;
    clip-path: polygon(86% 34%, 100% 0, 100% 20%, 100% 80%, 100% 100%, 87% 66%, 66% 54%, 66% 44%);

        }
        #sket{
          position: absolute;
    /* background: red; */
    background-color:  #2c2953;
    width: 100%;
    height: 100%;
    clip-path: polygon(20% 41%, 5% 54%, 19% 69%, 0 100%, 0% 50%, 0 1%);

        }
        #skets{
          position: absolute;
    /* background: red; */
    background-color: #8387c2;
    width: 100%;
    height: 100%;
    clip-path: polygon(27% 0, 75% 0, 74% 0, 50% 8%, 27% 0);

        }


.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
.container, .container-fluid, .container-xl, .container-lg, .container-md, .container-sm {
    width: 100%;
     padding-right: 0px; 
     padding-left: 0px; 
    margin-right: auto;
    margin-left: auto;
}

#team .card {
    border: none;
    background: #e8e7f3;
}

.frontside .card .card-title, .backside .card .card-title {
    color: #3d3976 !important;
}
.deconstructed {
  position: relative;
  margin: auto;
  height: 1.71em;
  color: transparent;
  font-family: 'Cambay', sans-serif;
  font-size: 2vw;
  font-weight: 700;
  letter-spacing: -0.02em;
  line-height: 1.03em;
}

.deconstructed > div {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  color: #e8e7f3;
  pointer-events: none;
}

.deconstructed > div:nth-child(1) {
  -webkit-mask-image: linear-gradient(black 25%, transparent 25%);
  mask-image: linear-gradient(black 25%, transparent 25%);
  animation: deconstructed1 5s infinite;
}

.deconstructed > div:nth-child(2) {
  -webkit-mask-image: linear-gradient(transparent 25%, black 25%, black 50%, transparent 50%);
  mask-image: linear-gradient(transparent 25%, black 25%, black 50%, transparent 50%);
  animation: deconstructed2 5s infinite;
}

.deconstructed > div:nth-child(3) {
   -webkit-mask-image: linear-gradient(transparent 50%, black 50%, black 75%, transparent 75%);
  mask-image: linear-gradient(transparent 50%, black 50%, black 75%, transparent 75%);
  animation: deconstructed3 5s infinite;
}

.deconstructed > div:nth-child(4) {
   -webkit-mask-image: linear-gradient(transparent 75%, black 75%);
  mask-image: linear-gradient(transparent 75%, black 75%);
  animation: deconstructed4 5s infinite;
}

@keyframes deconstructed1 {
  0% {
    transform: translateX(100%);
  }
  26% {
    transform: translateX(0%);
  }
  83% {
    transform: translateX(-0.1%);
  }
  100% {
    transform: translateX(-120%);
  }
}

@keyframes deconstructed2 {
  0% {
    transform: translateX(100%);
  }
  24% {
    transform: translateX(0.5%);
  }
  82% {
    transform: translateX(-0.2%);
  }
  100% {
    transform: translateX(-125%);
  }
}

@keyframes deconstructed3 {
  0% {
    transform: translateX(100%);
  }
  22% {
    transform: translateX(0%);
  }
  81% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-130%);
  }
}

@keyframes deconstructed4 {
  0% {
    transform: translateX(100%);
  }
  20% {
    transform: translateX(0%);
  }
  80% {
    transform: translateX(0%);
  }
  100% {
    transform: translateX(-135%);
  }
}
.btn-primary {
    color: #fff;
    background-color: #3d3976;
    border-color: #3d3976;
}

.bg, .bg2{
  width: 100%;
  height: 100%;
  position: absolute;
}

.bg{
 -webkit-clip-path: polygon(72% 74%, 100% 27%, 100% 100%, 5% 100%);
clip-path: polygon(72% 84%, 100% 27%, 100% 100%, 5% 100%);;
  z-index: -1;
  background-color: #262550;

}

.btn-default {
  font-family: Raleway-SemiBold;
  font-size: 13px;
  color: rgba(108, 88, 179, 0.75);
  letter-spacing: 1px;
  line-height: 15px;
  border: 2px solid rgba(108, 89, 179, 0.75);
  border-radius: 40px;
  background: transparent;
  transition: all 0.3s ease 0s;
}

.btn-default:hover {
  color: #FFF;
  background: rgba(108, 88, 179, 0.75);
  border: 2px solid rgba(108, 89, 179, 0.75);
}

.bg2{
  z-index: -2;
  background-color: #464799;

  -webkit-clip-path: polygon(64% 100%, 100% 27%, 62% 67%, 4% 100%);
  clip-path: polygon(64% 103%, 100% 27%, 64% 87%, 4% 100%);
}



#sketchy {
  padding: 2rem 8rem;
    display: inline-block;
    border: 3px solid #b5b8da;
    font-size: 1.5rem;
    border-radius: 36% 52% 5% 17% / 7% 26% 0% 40%;
    box-shadow: 0 8px 6px -6px black;
        letter-spacing: 0.3ch;
    background:#bebcd4;
    -webkit-box-shadow: 0 35px 20px #777;
  -moz-box-shadow: 0 35px 20px #777;
  box-shadow: 0 4px 20px #bdc0de;
 
    position: relative;
    
    
}

.effect5
{
  position: relative;
}
.effect5:before, .effect5:after
{
  z-index: -1;
  position: absolute;
  content: "";
  bottom: 25px;
  left: 10px;
  width: 50%;
 
  max-width:300px;
  background: #777;
  -webkit-box-shadow: 0 35px 20px #777;
  -moz-box-shadow: 0 35px 20px #777;
  box-shadow: 0 35px 20px #777;
  -webkit-transform: rotate(-8deg);
  -moz-transform: rotate(-8deg);
  -o-transform: rotate(-8deg);
  -ms-transform: rotate(-8deg);
  transform: rotate(-8deg);
}
.effect5:after
{
  -webkit-transform: rotate(8deg);
  -moz-transform: rotate(8deg);
  -o-transform: rotate(8deg);
  -ms-transform: rotate(8deg);
  transform: rotate(8deg);
  right: 10px;
  left: auto;
}
       </style>
    
    </head>
    <body >

        <div class="circle">

        </div>
        <div class="crs">
        
        </div>
        <div class="hi">
        
        </div>
       
        
<div id="app">
 
    <nav class="navbar navbar-expand-lg navbar-light bg-#F1F1F8 static-top" >
        <div class="container-fluid" >
          <a class="navbar-brand" href="#">
          <img src="{{ asset('front_end')}}/logo_57.png" alt="IMG-LOGO" >
              </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <router-link class="nav-link" to="/">Acceuil
                      <span class="sr-only">(current)</span>
                     
                </router-link>
              </li>
              <span style="color:#45479E;margin-top: 6px;">|</span>
      
              <li class="nav-item">
                <a href="#team" class="nav-link" v-smooth-scroll="{ duration: 1500, offset: -50 }">Qui sommes-nous?</a>
              </li>
              <span style="color:#45479E;margin-top: 6px;">|</span>
              <li class="nav-item">
                <a href="#team2" class="nav-link" v-smooth-scroll="{ duration: 1500, offset: -50 }">Nos services</a>

              </li>
              <span style="color:#45479E;margin-top: 6px;">|</span>
              <li class="nav-item">
                <a href="#realisation" class="nav-link" v-smooth-scroll="{ duration: 1500, offset: -50 }">Réalisations</a>
              </li>
              <span style="color:#45479E;margin-top: 6px;">|</span>
              <li class="nav-item">
                <a href="#contact" class="nav-link" v-smooth-scroll="{ duration: 1500, offset: -50 }">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="content">

        <router-view></router-view>
    </div>
    
<br>
    <footer class="page-footer font-small blue pt-4" >

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
      
          <!-- Grid row -->
          <div class="row">
      
            <!-- Grid column -->
            <div class="col-md-5 mt-md-0 mt-3">
      
              <!-- Content -->
            <br>
      
              <div class="row">
              <div class="col-md-2">
              </div>
      
             <div class="col-md-4">
             <img src="{{ asset('front_end')}}/logo_57.png" alt="IMG-LOGO" >
      
             </div>
      
             
      
              </div>
      
            </div>
            <!-- Grid column -->
      
            <hr class="clearfix w-100 d-md-none pb-3">
      
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
      
              <!-- Links -->
              <img src="{{ asset('front_end')}}/lgg.png" alt="IMG-LOGO" >
      
      
      
      <ul class="list-unstyled">
                <li>
                  
                  <a href="#team1"  v-smooth-scroll="{ duration: 1500, offset: -50 }">Acceuil</a>

                </li>
                <li>
                  <a href="#team"  v-smooth-scroll="{ duration: 1500, offset: -50 }">Qui sommes-nous?</a>

                </li>
                <li>
                  
                  <a href="#team2"  v-smooth-scroll="{ duration: 1500, offset: -50 }">Nos services</a>

                </li>
                <li>
                  <router-link to="/realisation">Realisation</router-link>
                </li>
                <li>
                  <a href="#contact"  v-smooth-scroll="{ duration: 1500, offset: -50 }">Contact</a>

                </li>
              </ul>
      
      
              
      
            </div>
            <!-- Grid column -->
      
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
      
              <!-- Links -->
              <h5 class="text-uppercase"></h5>
      
              <ul class="list-unstyled">
                <li>
                <img src="{{ asset('front_end')}}/mobile-phone_60.png" alt="IMG-LOGO" >
                <a href="#!">(+212)6 26 35 82 33</a>
                </li>
                <li>
              <br>
                </li>
                <li>
                &nbsp; <img src="{{ asset('front_end')}}/email_60.png" alt="IMG-LOGO" >
                &nbsp;
                <a href="#!">contact_trustUS@gmail.com</a>
                </li>
                <li>
                  
                </li>
              </ul>
      
            </div>
            <!-- Grid column -->
      
          </div>
          <!-- Grid row -->
      
        </div>
        <!-- Footer Links -->
      
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3" style="background-color:#262550; color:#a9a3cc">© 2020 Copyright:
          <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
      
      </footer>

</div>


<div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered  modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>
          There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra and the mountain
          zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus Dolichohippus. The latter
          resembles an ass, to which it is closely related, while the former two are more horse-like. All three belong to the
          genus Equus, along with other living equids.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script src="{{asset('js/app.js')}}"> </script>


  <!-- Footer -->
    </body>
</html>
