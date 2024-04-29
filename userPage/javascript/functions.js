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
    $.ajax({
        url: 'search.php', // The PHP script that generates the new element
        type: 'POST',
        data: {
             dat : search
            },
        success: function(response) {
            $('#products').replaceWith(response);
        }
    });
}
function toggleButtonColorOnPress(button){
    if (button.style.backgroundColor == "green"){
        button.style.backgroundColor = "#061538";
        $.ajax({
            url: 'removeFromCategories.php', // The PHP script that generates the new element
            type: 'POST',
            data: {
                 ccccategory:button.innerHTML
                },

        });
    } else {
        button.style.backgroundColor = "green";
        $.ajax({
            url: 'addToCategories.php', // The PHP script that generates the new element
            type: 'POST',
            data: {
                 dddat:button.innerHTML
                },
            success: function(response) {
               
            }
        });
        
    }
    Search();
   
}
function clearSearch(){
    for (var i = 0; i < document.getElementsByClassName("sidebar-link").length; i++){
        document.getElementsByClassName("sidebar-link")[i].style.backgroundColor = "#061538";
    }
    $('#searcher').val("");
    Search();
}