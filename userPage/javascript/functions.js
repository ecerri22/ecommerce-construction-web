<<<<<<< Updated upstream:userPage/javascript/functions.js
function changefocus(tab) {
    document.getElementsByClassName("tab-link-active")[0].classList.remove("tab-link-active");
    tab.classList.add("tab-link-active");
}
function makesticky(prod){
    var sticky = prod.parentElement.parentElement.parentElement;
    if (sticky.classList.contains("stickydiv")){
        prod.style.backgroundColor = "#061538";
        sticky.classList.remove("stickydiv");
    } else {
        prod.style.backgroundColor = "green";
        sticky.classList.add("stickydiv");
    }
}
function Search() {
    var search = $('#searcher').val();
    var Categories = [];
    for (var i = 0; i < document.getElementsByClassName("sidebar-link").length; i++){
        if (document.getElementsByClassName("sidebar-link")[i].style.backgroundColor == "green"){
            Categories.push(document.getElementsByClassName("sidebar-link")[i].innerHTML);
        }
    }
    $.ajax({
        url: 'search.php', // The PHP script that generates the new element
        type: 'POST',
        data: {
             dat : search,
             categories : Categories
            },
        success: function(response) {
            $('#products').replaceWith(response);
        }
    });
}
function toggleButtonColorOnPress(button){
    if (button.style.backgroundColor == "green"){
        button.style.backgroundColor = "#061538";
    } else {
        button.style.backgroundColor = "green";   
    }
    Search();
   
}
function clearSearch(){
    for (var i = 0; i < document.getElementsByClassName("sidebar-link").length; i++){
        document.getElementsByClassName("sidebar-link")[i].style.backgroundColor = "#061538";
    }
    $('#searcher').val("");
    Search();
=======
function changefocus(tab) {
    document.getElementsByClassName("tab-link-active")[0].classList.remove("tab-link-active");
    tab.classList.add("tab-link-active");
}

function makesticky(prod){
    var sticky = prod.parentElement.parentElement.parentElement;
    if (sticky.classList.contains("stickydiv")){
        prod.style.backgroundColor = "#061538";
        sticky.classList.remove("stickydiv");
    } else {
        prod.style.backgroundColor = "green";
        sticky.classList.add("stickydiv");
    }
}

function Search(page) {
    console.log(page);
    console.log("Search function called");
    var search = $('#searcher').val();
    var Categories = [];
    for (var i = 0; i < document.getElementsByClassName("sidebar-link").length; i++){
        if (document.getElementsByClassName("sidebar-link")[i].style.backgroundColor == "green"){
            Categories.push(document.getElementsByClassName("sidebar-link")[i].innerHTML);
        }
    }
    $.ajax({
        url: '/Thanas/javascript/search.php',
        type: 'POST',
        data: {
             dat : search,
             page : JSON.stringify(page), // Use the serialized productsArray
             categories : Categories,
             maxprice : document.getElementById("mySlider").value,
        },
        success: function(response) {
            $('#products').replaceWith(response);
        }
    });
}

function toggleButtonColorOnPress(button, page){
    if (button.style.backgroundColor == "green"){
        button.style.backgroundColor = "#0615388c";
    } else {
        button.style.backgroundColor = "green";   
    }
    Search(page);
   
}

function clearSearch(page){
    for (var i = 0; i < document.getElementsByClassName("sidebar-link").length; i++){
        document.getElementsByClassName("sidebar-link")[i].style.backgroundColor = "#0615388c";
    }
    $('#searcher').val("");
    document.getElementById("mySlider").value = 50;
    document.getElementById("sliderValue").innerHTML = "500$";
    Search(page);
}

function addtocart(userid,productid){
    $.ajax({
        url: '/Thanas/javascript/addtocart.php',
        type: 'POST',
        data: {
             userid : userid,
             productid : productid,
        },
        success: function(response) {
           alert(response);
        }
    });
>>>>>>> Stashed changes:WebsiteProject/public/Thanas/javascript/functions2.js
}