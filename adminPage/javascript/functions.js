removedstack = [];
function removeStatisticAndAnimate(event,deleteButton,statisticID) {
    //statisticID is here so when i remove the statistic i can use the id to remove it from the database
    var statisticDiv = deleteButton.parentElement;
    statisticDiv.classList.remove('fadeIn');
    statisticDiv.classList.add('fadeOut');
    
    statisticDiv.style.transition = 'opacity 0.2s';
    statisticDiv.style.opacity = 0;
        // Prevent the default behavior of the <a> tag
        //this is so the <a> tag does not redirect to another page after you press the X button
    event.preventDefault();

    removedstack.push(statisticDiv);
    statisticDiv.addEventListener('animationend', function() {
        
    });
    

}

function undoRemoveStatistic() {
    if(removedstack.length == 0) return;
    var statisticDiv = removedstack.pop();
    statisticDiv.classList.remove('fadeOut');
    statisticDiv.classList.add('fadeIn');
    statisticDiv.style.opacity = 1;
}
function removeGraphAndAnimate(graphDiv) {

    graphDiv.classList.add('fadeOut');

    graphDiv.addEventListener('animationend', function() {
        graphDiv.remove();});
}

function addClickEventToDiv(destination, divId) {
    var div = document.getElementById(divId);
    div.addEventListener('click', function() {
        //this used to have another purpose but im leaving it here in case we want the statistics to do something when clicked.
    });
}