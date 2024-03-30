// Purpose: To create a line graph using Chart.js and fetch data from graphdata.php
var xhr = new XMLHttpRequest();
    xhr.open('GET', 'graphdata.php', true);
    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            var data = JSON.parse(xhr.responseText);

            // Create and update the chart with the fetched data
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                    datasets: [{
                        label: 'My Dataset',
                        data: data, // Use the fetched data
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                    }]
                },
                options: {
                    animation: {
                        duration: 2000,
                        easing: 'easeInOutQuart'
                    }
                }
            });
        } else {
            console.error('Failed to load data from data.php');
        }
    };
    xhr.send();