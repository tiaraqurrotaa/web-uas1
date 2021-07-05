<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>To Get Here Hotel</title>
    <link rel="stylesheet" type="text/css" href="css/front-end/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    
     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="dist/jquery.scrollUp.js"></script>
 <script type="text/javascript" src="dist/demo.js"></script>
    
    </head>
    
<body>
    <header class="tm-header">
        <img class="tm-logo" src="images/togethere.png" alt="To Get Here Hotel">
        <nav class="tm-nav">
       <div>
            <ul>
                <li class="tm-list"><a href="home">Home</a></li>
                <li class="tm-list"><a href="explore">Explore</a></li>
                <li class="tm-list"><a href="rooms">Rooms</a></li>
                <li class="tm-list"><a href="booking">Booking</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>    
            </div>
        </nav>
    </header>
 
    @yield('content-frontend')
    @include('front-end.template-frontend.footer')  
