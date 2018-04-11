    <!Doctype html>

    <html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    </head>

    <!--Now, we can create a chart. We add a script to our page:-->

    <body>

    <canvas id="bar-chart" width="800" height="350"></canvas>
    <script type="text/javascript">new Chart(document.getElementById("bar-chart"), {
            type: 'bar',
            data: {
                labels: ["Salle Pixel", "Salle Hashtag", "Salle Giga"],
                datasets: [
                    {
                        label: "Taux d'occupation des salles",
                        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f"],
                        data: [5478,2267,734]
                    }
                ]
            },
            options: {
                legend: { display: false },
                title: {
                    display: true,
                    text: 'Taux d\'occupation des 3 salles'
                }
            }
        });</script>


    <canvas id="pie-chart" width="800" height="350"></canvas>

    <script>new Chart(document.getElementById("pie-chart"), {
            type: 'pie',
            data: {
                labels: ["Africa", "Asia", "Europe", "Latin America", "North America"],
                datasets: [{
                    label: "Population (millions)",
                    backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850"],
                    data: [5478,5267,734,784,433]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Predicted world population (millions) in 2050'
                }
            }
        });
    </script>




    </body>

    </html>