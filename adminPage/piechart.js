function piechart(){
var xhr = new XMLHttpRequest();
        xhr.open('GET', 'piechartdata.php', true);
        xhr.onload = function () {
            if (xhr.status >= 200 && xhr.status < 300) {
                var data = JSON.parse(xhr.responseText);

                // Extract labels and data from the fetched data
                var labels = Object.keys(data);
                var values = Object.values(data);

                // Create pie chart with the fetched data
                var ctx = document.getElementById('myPieChart').getContext('2d');
                var myPieChart = new Chart(ctx, {
                    type: 'pie',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Costs',
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
            } else {
                console.error('Failed to load data from costs.php');
            }
        };
        xhr.send();
    }