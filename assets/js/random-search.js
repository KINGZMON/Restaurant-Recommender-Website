
// (Works like simple filter curretly, needs to detect number of results, provide only 1.)

// Finding all Restaurant Entries
let restaurants_r = document.querySelectorAll('#Restaurant-Entry')
    
    function randomSearch() {

    // Finding element that contains search query
    let search_query = document.getElementById("r_city").value;


    // Finding Selected Cuisine
    var cuisines_options = document.getElementsByName('radio_cuisine');

    for(i = 0; i < cuisines_options.length; i++) {
        if(cuisines_options[i].checked)
        var selected_cuisine = cuisines_options[i].value;
    }
    
    // Finding Selected Price Range
    var price_options = document.getElementsByName('radio_price');

    for(i = 0; i < price_options.length; i++) {
        if(price_options[i].checked)
        var selected_price = price_options[i].value;
    }
    
        
        // console.log(selected_cuisine); 
        // console.log(selected_price);


        for (var i = 0; i < restaurants_r.length; i++) {
            // Checking to match:
            // 1) Heading
            // 2) Cuisine
            // 3) Price
            if(restaurants_r[i].textContent.toLowerCase().includes(search_query.toLowerCase()) && restaurants_r[i].textContent.toLowerCase().includes(selected_cuisine.toLowerCase()) && restaurants_r[i].textContent.toLowerCase().includes(selected_price.toLowerCase())) {
                restaurants_r[i].classList.remove("is-hidden");
            } else {
              restaurants_r[i].classList.add("is-hidden");
            }
        }


        // Closing Popup
        hide('popup1');


    }