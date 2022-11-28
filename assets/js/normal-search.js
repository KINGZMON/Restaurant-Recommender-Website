
// Finding all Restaurant Entries
let restaurants = document.querySelectorAll('#Restaurant-Entry')
    
    function liveSearch() {

    // Finding element that contains search query
    let search_query = document.getElementById("searchbox").value;
        
        // Going through entries, if heading matches query then OK,
        // If not, then it gets hidden
        for (var i = 0; i < restaurants.length; i++) {
            if(restaurants[i].textContent.toLowerCase()
                    .includes(search_query.toLowerCase())) {
                restaurants[i].classList.remove("is-hidden");
            } else {
              restaurants[i].classList.add("is-hidden");
            }
        }
    }

    // Delay for search query
    let typingTimer;               
    let typeInterval = 500;  
    var searchInput = document.getElementById("searchbox")

    // Detect input on searchbox, call liveSearch() function
    searchInput.addEventListener('keyup', () => {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(liveSearch, typeInterval);
    });