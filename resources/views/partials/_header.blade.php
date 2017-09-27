<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.css" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/business-frontpage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    @yield('scripts')
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
     <style media="screen">
       body{
         background:url(../images/background.jpg);
       }
       #jumbo{

         box-shadow: 10px 10px 60px;

       }
       #map {
       height: 400px;
       width: 100%;
       box-shadow: 0px 0px 60px;


      }
       textarea {
          overflow: auto;
        }
        .business-header {
              height: 50vh;
              min-height: 300px;
              background: url(../images/banner.JPG) center center no-repeat scroll;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              background-size: cover;
              -o-background-size: cover;
              box-shadow: 0px 10px 30px #888888;

        }
        @font-face {font-family:"Coca Cola ii";src:url("../font/cocacolaii.eot?") format("eot"),url("../font/cocacolaii.woff") format("woff"),url("../font/cocacolaii.ttf") format("truetype"),url("../font/cocacolaii.svg#CocaColaii") format("svg");
        font-weight:normal;font-style:normal;}
     </style>
  </head>
