<!DOCTYPE html>

<html lang="en">
  <head>
    <!--jQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--Main Styles Sheet-->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!--Fonts-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Created date-->
    <meta name="date-created" content="2022-04-10">
    <!--Author-->
    <meta name="authors" content="Katrin Dianov, Povilas Jasvilis, Ali Jalilli, Turan Garashli, Muhammad Yousuf Farooq">
    <!--KeyWords-->
    <meta name="keywords" content="FOOD , Easy recipes">
    <!--Other-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <!--Including Header+Footer-->
      <script> 
      $(function(){
        $("#header").load("headfooter/header.html"); 
        $("#footer").load("headfooter/footer.html"); 
      });
      </script>
    <!--Showing Popup-->
    <script>
    find_element = function(id) {
      return document.getElementById(id);
    }

    var show = function(id) {
      find_element(id).style.display ='block';
    }
    var hide = function(id) {
      find_element(id).style.display ='none';
    }
    </script>
    <!--Filtered Search + Random Search + Side Filter Search-->
    <script>
      $(document).ready(function() {
          $.getScript("/assets/js/normal-search.js");
          $.getScript("/assets/js/random-search.js");
          $.getScript("/assets/js/side-filters.js");
      });
    </script>

    <!--Showing Popup for random selection-->
    <script>
    find_element = function(id) {
      return document.getElementById(id);
    }
    var show = function(id) {
      find_element(id).style.display ='block';
    }
    var hide = function(id) {
      find_element(id).style.display ='none';
    }
    </script>
    
    </head>

<!--After page and scripts fully loaded, call main user panel function-->
<body>
  
<div id="container">

  <!--Header-->
  <div id="header"></div>

  <!--Map-->
  <iframe src="https://my.atlistmaps.com/map/4291758d-0319-48d4-a8ce-895a913be823?share=true" 
    allow="geolocation" width="100%" height="400px" frameborder="0" scrolling="no" allowfullscreen></iframe>

  <!--Search box-->
  <div class="container1">
    <div id="form-container">
      <i class="fa-solid fa-location-pin"></i>
      <input type="search" id="searchbox" placeholder="In which city do you want to eat?">
      <button class="search-button" onclick="liveSearch()">Search</button>
      <a class="random-button" onclick="show('popup1')"><i class="fa-solid fa-dice"></i></a>
    </div>
  </div>

  <!--Hidden Popup-->
  <div class="popup" id="popup1">
    <div class="survey-heading-container">
      <h4>Survey</h4>
      <a class="close-popup" href="#" onclick="hide('popup1')"><i class="fa-solid fa-xmark"></i></a>
    </div>
    <form class="randomizer_form">
      <legend><span class="legend_number">1</span>Location</legend>
      <label for="r_city">City</label><br>
      <input type="text" name="r_city" id="r_city"><br><br>
      <legend><span class="legend_number">2</span>Preferences</legend>
      <p>Cuisine</p>
         <input type="radio" id="Mexican" name="radio_cuisine" value="Mexican">
         <label for="Asian">Mexican</label><br>
         <input type="radio" id="Italian" name="radio_cuisine" value="Italian">
         <label for="Italian">Italian</label><br>
         <input type="radio" id="European" name="radio_cuisine" value="European">
         <label for="European">European</label>
         <br> 
         <br>

      <p>Price</p>
         <input type="radio" id="age1" name="radio_price" value="1">
         <label for="age1">Cheap Eats</label><br>
         <input type="radio" id="age2" name="radio_price" value="2">
         <label for="age2">Mid-Range</label><br>  
         <input type="radio" id="age3" name="radio_price" value="3">
         <label for="age3">Fine Dining</label><br><br>

         <a class="suggestions-button" onclick="randomSearch()">Get Suggestion <i class="fa-solid fa-dice random-dice-icon"></i></a>
    </form>
	</div>
   

    <!--Filter-->
    <div id="main">
      <div id="sidebar">
        <h4> Filter by</h4>
        <p>Cuisine</p>
         <input type="radio" id="Mexican" name="radio_cuisine_side" value="Mexican">
         <label for="Asian">Mexican</label><br>
         <input type="radio" id="Italian" name="radio_cuisine_side" value="Italian">
         <label for="Italian">Italian</label><br>
         <input type="radio" id="European" name="radio_cuisine_side" value="European">
         <label for="European">European</label>
        <br>  
        <br> 
        <p>Price</p>
        <input type="radio" id="age1" name="radio_price_side" value="price=1">
        <label for="age1">Cheap Eats</label><br>
        <input type="radio" id="age2" name="radio_price_side" value="price=2">
        <label for="age2">Mid-Range</label><br>  
        <input type="radio" id="age3" name="radio_price_side" value="price=3">
        <label for="age3">Fine Dining</label><br><br>
        <input class="filter-button" type="submit" value="Apply" onclick="filterSearch()">
      </div>


    <!--Main Entries Container-->
    <div id="Second">
      <div id="Main-Entries">
      <?php
        include "restaurants.php";
      ?>
      </div>
    </div>
  </div>

  <!--Footer-->
  <div id="footer"></div>
  </div>


  
</body>