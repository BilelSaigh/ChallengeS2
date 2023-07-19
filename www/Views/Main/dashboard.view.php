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
    var chartData = <?php echo json_encode($formattedData); ?>;

    // Créer un graphique amCharts
    var chart = am4core.create("chartdiv", am4charts.PieChart);
    chart.data = chartData;

    // Créer un titre pour le graphique
    var title = chart.titles.create();
    title.text = "Répartition des pages Publiée/Brouillon";
    title.fontSize = 18;
    title.marginBottom = 15;

    // Ajouter et configurer les séries
    var series = chart.series.push(new am4charts.PieSeries());
    series.dataFields.value = "count";
    series.dataFields.category = "status";
    series.slices.template.tooltipText = "Statut: {category}\nNombre de pages: {value}";

    // Modifier les libellés
    series.labels.template.adapter.add("text", function(text, target) {
      var category = target.dataItem.category;
      if (category === "true") {
        return "Publié";
      }
      if (category === "false") {
        return "Brouillon";
      }
      return text;
    });

    // Ajouter une légende
    chart.legend = new am4charts.Legend();

    // Appliquer un thème animé au graphique
    chart.hiddenState.properties.opacity = 0;
    chart.legend = new am4charts.Legend();
    chart.legend.useDefaultMarker = true;

    chart.colors.step = 2;

    series.hiddenState.properties.radius = am4core.percent(0);

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