// Finding all Restaurant Entries
let restaurants_filters = document.querySelectorAll('#Restaurant-Entry')
let total_filtered_restaurant = 0
    
    function filterSearch() {

    // Finding Selected Cuisine
    var cuisines_options = document.getElementsByName('radio_cuisine_side');

    for(i = 0; i < cuisines_options.length; i++) {
        if(cuisines_options[i].checked)
        var selected_cuisine = cuisines_options[i].value;
    }
    
    // Finding Selected Price Range
    var price_options = document.getElementsByName('radio_price_side');

    for(i = 0; i < price_options.length; i++) {
        if(price_options[i].checked)
        var selected_price = price_options[i].value;
    }

        // console.log(selected_cuisine); 
        // console.log(selected_price);

        // If Both Inputs Selected
        if(selected_cuisine != null && selected_price != null){
            for (var i = 0; i < restaurants_filters.length; i++) {
                // Checking to match:
                // 1) Cusine
                // 2) Price
                if(restaurants_filters[i].textContent.toLowerCase().includes(selected_cuisine.toLowerCase()) && restaurants_filters[i].textContent.toLowerCase().includes(selected_price.toLowerCase())) {
                    restaurants_filters[i].classList.remove("is-hidden");
                    ++total_filtered_restaurant;
                } else {
                  restaurants_filters[i].classList.add("is-hidden");
                }
            }
        }

        // If Only Cuisine Selected
        if(selected_cuisine != null && selected_price === undefined){
            for (var i = 0; i < restaurants_filters.length; i++) {
                // Checking to match:
                // 1) Cusine
                if(restaurants_filters[i].textContent.toLowerCase().includes(selected_cuisine.toLowerCase())) {
                    restaurants_filters[i].classList.remove("is-hidden");
                    ++total_filtered_restaurant;
                } else {
                  restaurants_filters[i].classList.add("is-hidden");
                }
            }
        }

        // If Only Price Selected
        if(selected_cuisine === undefined && selected_price != null){
            for (var i = 0; i < restaurants_filters.length; i++) {
                // Checking to match:
                // 1) Price
                if(restaurants_filters[i].textContent.toLowerCase().includes(selected_price.toLowerCase())) {
                    restaurants_filters[i].classList.remove("is-hidden");
                    ++total_filtered_restaurant;
                } else {
                  restaurants_filters[i].classList.add("is-hidden");
                }
            }
        }
        //window.alert("We found " + total_restaurant + " restaurants");
        var text_total = document.getElementById('restaurant-filtered');
        text_total.innerHTML='Found '+ total_filtered_restaurant + ' matched restaurants' ;
        total_filtered_restaurant = 0;
    }

 