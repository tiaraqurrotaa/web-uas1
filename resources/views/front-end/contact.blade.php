    
@extends('front-end/template-frontend.layout')

@section('content-frontend')

<section class="tm-main">
           <p>Contact</p>
    </section>
    
    
    
    <section class="tm-booking">
    
    <form>
        <div class="tm-form1">
    <input type="text" name="name" placeholder="Name">  
    <input type="email" name="email" placeholder="E-mail"> 
            <textarea  placeholder="Your message..." rows="4" ></textarea>
   
            <input type="submit" id="sub2" value="Send">

    </div>
        </form> 
        
        <div class="vertical-line"> </div>
        
    <div class="tm-form2">
   <div class="tm-cl">
        <p class="here">We are situated over here</p><img id="place" src="images/placeholder.png">

        <div id="map"></div>

     
    </div>
    </div>
        
  </section>

@endsection