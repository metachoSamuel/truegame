<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="librerias/plotly-2.12.1.min.js" ></script>
    <title>Document</title>
</head>

<body>
    <div id="graficaLineal"></div>

    <script type="text/javascript">
        var trace1 = {
            x: [1, 2, 3, 4],
            y: [10, 15, 30, 17],
            type: 'scatter'
        }

        var trace2 = {
            x: [1, 2, 3, 4],
            y: [16, 5, 11, 9],
            type: 'scatter'
        }

        var data = [trace1, trace2];

        Plotly.newPlot('graficaLineal', data);
    </script>
</body>

</html>