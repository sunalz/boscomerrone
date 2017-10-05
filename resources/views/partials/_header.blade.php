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
    <link rel="stylesheet" type="text/css" href="../css/business-frontpage.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/dropzone.min.css" integrity="sha256-e47xOkXs1JXFbjjpoRr1/LhVcqSzRmGmPqsrUQeVs+g=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/min/basic.min.css" integrity="sha256-RvDmZ4ZtPtrWmZdibCa80jCE32m21xuR5SuW6zfJaW4=" crossorigin="anonymous" />
    <link rel="stylesheet" href="../jquery-ui-1.12.1/jquery-ui.min.css">
    <link rel="stylesheet" href="../timepicker/jquery.timepicker.min.css">
    @yield('scripts')
     <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
     <style media="screen">
       body{
         background:url(/images/background.jpg);
       }
       .coca{
         font-family: "Coca Cola ii" , cursive;

       }
       .thumbs{
         object-fit:cover;
         object-position: center;
         margin: 5px;
       }
       .sliderimg{
       width: 100%;
       height: 600px;
       object-fit: cover;

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
        .container {
    position: relative;
}


.topright {
    position: absolute;
    top: 10px;
    right: 16px;
    font-size: 20px;

}
.pointer{cursor:pointer}

img {
    width: 100%;
    height: auto;
}
     </style>
  </head>
