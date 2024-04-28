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
function callPHPFunction(text) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "../Products/search.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText); // Output the result returned by the PHP function
        }
    };
    xhr.send("data=" + text); // Send the data to the PHP script
}