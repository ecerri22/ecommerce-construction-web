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
    console.log("Search function called");
    var search = $('#searcher').val();
    var Categories = [];
    for (var i = 0; i < document.getElementsByClassName("sidebar-link").length; i++){
        if (document.getElementsByClassName("sidebar-link")[i].style.backgroundColor == "green"){
            Categories.push(document.getElementsByClassName("sidebar-link")[i].innerHTML);
        }
    }
    $.ajax({
        url: '/../WebsiteProject/app/Models/search.php', // The PHP script that generates the new element
        type: 'POST',
        data: {
             dat : search,
             page : JSON.stringify(page),
             categories : Categories,
            },
        success: function(response) {
            $('#products').replaceWith(response);
        }
    });
}

function toggleButtonColorOnPress(button){
    if (button.style.backgroundColor == "green"){
        button.style.backgroundColor = "#0615388c";
    } else {
        button.style.backgroundColor = "green";   
    }
    Search();
   
}

function clearSearch(){
    for (var i = 0; i < document.getElementsByClassName("sidebar-link").length; i++){
        document.getElementsByClassName("sidebar-link")[i].style.backgroundColor = "#0615388c";
    }
    $('#searcher').val("");
    Search();
}