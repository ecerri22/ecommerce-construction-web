removedstack = [];
removedstack2=[];
function removeStatisticAndAnimate(event,deleteButton,name,value,prevvalue,icon,type,dest,id) {
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
        statisticDiv.style.position= 'absolute';
    });
    event.preventDefault();
    statistic = {
        name: name,
        value: value,
        prevvalue: prevvalue,
        icon: icon,
        type: type,
        dest: dest,
        id: id
    };
    event.preventDefault();
    $.ajax({
        url: 'Thanas/javascript/removestatistic.php',
        type: 'post',
        data: {id: id},
        success: function(response) {
            console.log(response);
        }
    });
    event.preventDefault();
    removedstack2.push(statistic);

}

function undoRemoveStatistic() {
    if(removedstack.length == 0) return;
    var statisticDiv = removedstack.pop();
    statisticDiv.style.position = 'relative';
    statisticDiv.classList.remove('fadeOut');
    statisticDiv.classList.add('fadeIn');
    statisticDiv.addEventListener('animationend', function() {
        statisticDiv.style.position = 'relative';
    });
    statisticDiv.style.opacity = 1;
    var statistic=removedstack2.pop();
    $.ajax({
        url: 'Thanas/javascript/addstatistic2.php',
        type: 'post',
        data: {name: statistic.name, value: statistic.value, prevvalue: statistic.prevvalue, icon: statistic.icon, type: statistic.type, dest: statistic.dest, id: statistic.id},
        success: function(response) {
            $('#second-zone').append(response);
        }
    });
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

function createform2()
{
    $.ajax({
        url: 'Thanas/javascript/form2.php',
        type: 'post',
        data: {name: 'test'},
        success: function(response) {
            document.getElementById('form2').innerHTML = response;
        }
    });

}

function removeform(deleteButton)
{
        //statisticID is here so when i remove the statistic i can use the id to remove it from the database
        var statisticDiv = deleteButton.parentElement;
        statisticDiv.classList.add('fadeOut');
        
        statisticDiv.style.transition = 'opacity 0.2s';
        statisticDiv.style.opacity = 0;
        statisticDiv.parentElement.style.opacity = 0;

    
        setTimeout(function() {
            statisticDiv.parentElement.parentElement.innerHTML="";
        }, 500);
        
    
}
function updateTypeOptions() {
    const categoryDropdown = document.getElementById('category');
    const typeDropdown = document.getElementById('type');
    const categoryOptions = {
    '1': ['All','Cancelled', 'Pending', 'Delivered', 'DELIVERING'], // Orders
    '2': ['All','Windows','Electrical','Steel Profiles','Wood Materials','Hydraulics','Professional Work Tools','Building Materials','Roof Covers','Isolation','Packaging Materials'], // Products
    // Add more categories as needed
};
    if(!categoryDropdown.value || categoryDropdown.value === '3' || categoryDropdown.value === '4' || categoryDropdown.value === '') {
        // If no category is selected, hide the "type" dropdown
        typeDropdown.innerHTML = '<option value="All"></option>';
        typeDropdown.parentElement.hidden = true;
        return;
    }
    typeDropdown.parentElement.hidden = false;
    typeDropdown.innerHTML = '';
    document.getElementById('hiddentext').hidden = false;
    const selectedCategory = categoryDropdown.value;
    const typeOptions = categoryOptions[selectedCategory] || [];

    // Add new options
    typeOptions.forEach(option => {
        const optionElement = document.createElement('option');
        optionElement.value = option;
        optionElement.textContent = option;
        typeDropdown.appendChild(optionElement);
    });
}

function addstatistic(form)
{
    var name = document.getElementById('statistic-name').value;
    var category = document.getElementById('category').value;
    var type = document.getElementById('type').value;
    var fileInput = document.getElementById('prod-img');
    var selectedFile = fileInput.files[0]; // Get the first selected file (if any)

    if(!name || !category || !type || !selectedFile) {
        alert('Please fill in all fields.');
        return;
    }

    // Create a FormData object and append the file
    var formData = new FormData();
    formData.append('name', name);
    formData.append('category', category);
    formData.append('type', type);
    formData.append('icon', selectedFile);

    // Send the data to the backend using AJAX
    $.ajax({
        url: 'Thanas/javascript/addstatistic.php',
        type: 'post',
        data: formData,
        processData: false, // Prevent jQuery from processing the data
        contentType: false, // Let the browser set the content type
        success: function(response) {
            $('#second-zone').append(response);
        },
        error: function() {
            alert('Error uploading file.');
        }
    });

    removeform(form);



    removeform(form);
}