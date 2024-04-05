function linechart(){}
            linechart.cnt = 0;//to keep track of how many line graphs there are so that i can 
            //access them through javascript, i will be using closures to stimulate
            //static variables in javascript (remember what static variables are in c++)

            linechart.createchart = function(data,x_axis,labels_){
            // Create and update the chart with the fetched data
            var ctx = document.getElementsByClassName('myLineChart')[linechart.cnt].getContext('2d');

             var datasets = [];

    // Loop through each dataset in the data array
    for (var i = 0; i < data.length; i++) {
        datasets.push({
            label: labels_[i] || 'Dataset ' + (i + 1), // Use label from labels_ array or generate a default one
            data: data[i],
            borderColor: getRandomColor(), // Generate a random color for each dataset (optional)
            tension: 0.1
        });
    }

    var myChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: x_axis,
            datasets: datasets
        },
        options: {
            animation: {
                duration: 2000,
                easing: 'easeInOutQuart'
            }
        }
    });
    // Increment the counter
    linechart.cnt++;
};

// Function to generate a random color
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

function piechart(){}
    piechart.cnt = 0;//to keep track of how many line graphs there are so that i can 
    //access them through javascript, i will be using closures to stimulate
    //static variables in javascript (remember what static variables are in c++)
        piechart.createchart = function(data,name){
                // Extract labels and data from the fetched data
                var labels = Object.keys(data);
                var values = Object.values(data);

                // Create pie chart with the fetched data
                var ctx = document.getElementsByClassName('myPieChart')[piechart.cnt].getContext('2d');
                var myPieChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: name,
                            data: values,
                            backgroundColor: [
                                'rgb(255, 99, 132)',
                                'rgb(54, 162, 235)',
                                'rgb(255, 205, 86)',
                                'rgb(75, 192, 192)'
                                // Add more colors as needed
                            ]
                        }]
                    },
                    options: {
                        animation: {
                            duration: 2000,
                            easing: 'easeInOutQuart'
                        }
                    }
                });
        xhr.send();
        piechart.cnt++;//increment the counter
    }