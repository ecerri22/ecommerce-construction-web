function changefocus(tab) {
    document.getElementsByClassName("tab-link-active")[0].classList.remove("tab-link-active");
    tab.classList.add("tab-link-active");
}

function makesticky(prod){
    var sticky = prod.parentElement.parentElement.parentElement;
    if (sticky.classList.contains("stickydiv")){
        prod.style.backgroundColor = "#061538";
        sticky.classList.remove("stickydiv");
        sticky.style.boxShadow = "0px 0px 20px 1px rgb(230, 228, 228)";
    } else {
        prod.style.backgroundColor = "green";
        sticky.style.boxShadow = "0px 0px 20px 1px rgb(140, 255, 140)";
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

