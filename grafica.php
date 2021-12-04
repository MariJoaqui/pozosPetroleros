<script type="text/javascript">

                        var lineDiv = document.getElementById('line-chart');

                        var tracer1 = {
                            x: [1, 2, 3, 4],
                            y: [10, 15, 13, 17],
                            type: 'scatter'
                        };

                        var data = [tracer1];

                        var layout = {
                            xaxis: {
                            type: 'log',
                            autorange: true
                        },
                            yaxis: {
                            type: 'log',
                            autorange: true
                            }
                        };

                        Ploty.newPlot('line-chart', data), layout;

                    </script>