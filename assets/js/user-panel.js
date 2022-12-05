

// AJAX function
function read_txt() {
    const xhttp = new XMLHttpRequest();
    xhttp.responseType = 'text';

    xhttp.onload = function() {
        append_txt_message(this);
    }
    // GET Request for .txt file
    xhttp.open("GET", "../assets/txt/user-message.txt");
    xhttp.send();
}

function append_txt_message(xhttp){
    var user_message = document.getElementById("user-message");
    var text_node = document.createElement('a');
    text_node.innerHTML = xhttp.responseText;
    user_message.appendChild(text_node);
}


// Function to find defined cookie value
function find_cookie() {
    var name = "User_Cookie";
    // Splitting the array of cookies, formatting result if needed cookie found
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2){
        return  parts.pop().split(';').shift();
    }
}

// Main Function
function control_user_panel(){
    // Cookie check
    var cookie_check = find_cookie();
    if(cookie_check != undefined){
        //alert("cookie found");
        // Hide login button
        var login_button = document.getElementById("header-login-button");
        login_button.classList.add("is-hidden");

        // Unhide user panel
        var user_panel = document.getElementById("user-panel");
        user_panel.classList.remove("is-hidden");
        
        // Add username to element
        var username_element = document.getElementById("user-name");
        var username_node = document.createElement('a');
        username_node.innerHTML = cookie_check;
        username_element.appendChild(username_node);

    }
    read_txt();
}




