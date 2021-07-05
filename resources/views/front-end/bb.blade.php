<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>To Get Here Hotel</title>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="dist/pickmeup.min.js"></script>
    <script type="text/javascript" src="dist/handleCounter.js"></script>
    <link rel="stylesheet" type="text/css" href="css/front-end/pickmeup.css">
    <link rel="stylesheet" type="text/css" href="css/front-end/handle-counter.min.css">
    <link rel="stylesheet" type="text/css" href="css/front-end/main.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
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
    
    
    <section class="tm-main">
           <p>Booking</p>
    </section>
    
    
    
    <section class="tm-booking">
    
    <form method="post" action="{{route('bo.store')}}">
    @csrf
        <div class="tm-form1">
    <input type="text" name="name" placeholder="Name">  
    <input type="email" name="email" placeholder="E-mail"> 
    <label  for="rooms" id="inlinelable">Rooms</label>
    <select name="rooms" id="rooms">
        <option value="luxurys">Luxury Suite</option>
        <option value="deluxs">Delux Suite</option>
        <option value="premiers">Premier Suite</option>
        <option value="Luxuryr">Luxury Room</option>
        <option value="deluxs">Delux Room</option>
        <option value="premierr">Premier Room</option>
    </select> 
            
            
            

            
            
    <div class="tm-num1" id="handleCounter1">    
    <label for="number1" >Number of Rooms</label><br/>
        <button type="button" class="counter-minus btn btn-primary">- </button>
        <input type="text" name="number1" id="number1" value="1">
         <button type="button" class="counter-plus btn btn-primary">+  </button>
        </div>
    <div class="tm-num2" id="handleCounter2">      
        <label for="number2">Number of Guests</label><br/>
        <button type="button" class="counter-minus btn btn-primary">-</button>
        <input type="text" name="number2" id="number2" value="1">
            <button type="button" class="counter-plus btn btn-primary">+</button>
            </div>
              
            
            
  
    
    </div>
        
        <div class="vertical-line"> </div>
        
    <div class="tm-form2">
   <div class="tm-cl">
        <label for="date1" class="arrival">Visiting Dates from Arrival to Departure</label>

     <input type="text" name="date1" class="range" readonly="readonly"> 
        

     <input type="submit" id="sub" value="Proceed">
    </div>
    </div>
        </form>
  </section>
    
  @include('front-end.template-frontend.footer')  
    

    