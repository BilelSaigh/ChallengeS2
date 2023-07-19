<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Graphique amCharts</title>
    <script src="https://cdn.amcharts.com/lib/4/core.js" type="text/javascript"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js" type="text/javascript"></script>

    <style>
        #chartdiv, #chartdiv2{
            width: 1000px;
            height: 500px;
        }
        </style>
</head>
<body>
    <div id="chartdiv"></div>
    <div id="chartdiv2"></div>
    <script type="text/javascript">
        var chartData = <?php echo json_encode($formattedChartData); ?>;

        // Créer un graphique amCharts
        var chart1 = am4core.create("chartdiv", am4charts.XYChart);
        chart1.data = chartData;

        // Créer un titre pour le graphique 1
        var title1 = chart1.titles.create();
        title1.text = "Nombre d'utilisateurs par prénom";
        title1.fontSize = 18;
        title1.marginBottom = 15;

        // Créer des axes
        var categoryAxis = chart1.xAxes.push(new am4charts.CategoryAxis());
        categoryAxis.dataFields.category = "prenom";

        var valueAxis = chart1.yAxes.push(new am4charts.ValueAxis());

        // Créer une série de colonnes
        var series = chart1.series.push(new am4charts.ColumnSeries());
        series.dataFields.valueY = "nombre_utilisateurs";
        series.dataFields.categoryX = "prenom";
        series.name = "Nombre d'utilisateurs";
        series.columns.template.tooltipText = "Prénom: {categoryX}\nNombre d'utilisateurs: {valueY}";

        // Configurer l'apparence du graphique
        chart1.cursor = new am4charts.XYCursor();
        chart1.cursor.lineX.disabled = true;
        chart1.cursor.lineY.disabled = true;
        chart1.cursor.behavior = "none";
        chart1.cursor.fullWidthLineX = true;
        chart1.cursor.fullWidthLineY = true;
        chart1.cursor.xAxis = categoryAxis;
        chart1.cursor.yAxis = valueAxis;

        // Ajouter un curseur de survol pour mettre en évidence les colonnes
        series.columns.template.adapter.add("fill", function(fill, target) {
            if (target.dataItem && target.dataItem.index === chart1.cursor.lineX.pixelX) {
                return am4core.color("#36B5A1");
            }
            return fill;
        });

        //Graph 2
        var chartData2 = <?php echo json_encode($chartData); ?>;

        // Créer un deuxième graphique amCharts
        var chart2 = am4core.create("chartdiv2", am4charts.PieChart);
        chart2.data = chartData2;
        chart2.innerRadius = am4core.percent(40);
        chart2.radius = am4core.percent(80);
        chart2.startAngle = 180;
        chart2.endAngle = 360;

        // Créer un titre pour le graphique 2
        var title2 = chart2.titles.create();
        title2.text = "Répartition des utilisateurs par rôle";
        title2.fontSize = 18;
        title2.marginBottom = 15;

        // Ajouter et configurer les séries
        var series2 = chart2.series.push(new am4charts.PieSeries());
        series2.dataFields.value = "count";
        series2.dataFields.category = "role";
        series2.slices.template.tooltipText = "Rôle: {category}\nNombre d'utilisateurs: {value}";

        series2.hiddenState.properties.startAngle = 90;
        series2.hiddenState.properties.endAngle = 90;

    </script>
</body>
</html>