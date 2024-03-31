var xhr = new XMLHttpRequest();
xhr.open('GET', 'graphdata.php', true);
xhr.onload = function () {
    if (xhr.status >= 200 && xhr.status < 300) {
        var data = JSON.parse(xhr.responseText);
        // Separate the datasets from the fetched data
        var data1 = data[0];
        var data2 = data[1];
        var data3 = data[2];
        // Create and update the chart with the fetched data
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Sales',
                    data: data1, // Use the first dataset
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                },
                {
                    label: 'Orders',
                    data: data2, // Use the second dataset
                    borderColor: 'rgb(255, 99, 132)',
                    tension: 0.1
                },
                {
                    label: 'Users',
                    data: data3, // Use the third dataset
                    borderColor: 'rgb(0, 255, 0)',
                    tension: 0.1
                }
            ]
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
