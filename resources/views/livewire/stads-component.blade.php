<style>
    .container-stads{ display: flex;
                        flex-direction: row;
                        margin: 20px;
                        }
    .bar-lateral{margin-right: 10px;display: flex;
        flex-direction: column;
        height: 42vh;
        flex-wrap: wrap;
        align-content: space-between;
        justify-content: space-around;
    }
    .container-charts{margin-right: 10px;}
    .btn{width: 100%;
        background-color: rgb(60, 57, 73);
        border-radius: 40px;
        color: aliceblue;
        padding: 7px;}

    #chartdiv {
      width: 100%;
      height: 500px;
    }
</style>
<div class="container-componente" >
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg flex flex-1 div-contenedor-caja" >
        <div class="flex flex-col mt-8">
            <div class="container-stads">
                <div class="bar-lateral">
                <button class="btn todas">Todas las Estadisticas</button>
                <button class="btn mensuales">ventas mensuales</button>
                <button class="btn anuales">ventas anuales</button>
                <button class="btn comparacion">comparacion</button>
                </div>
                <div class="h-60 mb-20 container-charts" id="chartdiv">hhhh</div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<script>
    am5.ready(function() {
    var root = am5.Root.new("chartdiv");

    root.setThemes([
      am5themes_Animated.new(root)
    ]);

    var chart = root.container.children.push(am5xy.XYChart.new(root, {
      panX: true,
      panY: true,
      wheelX: "panX",
      wheelY: "zoomX",
      pinchZoomX: true,
      paddingLeft:0,
      paddingRight:1
    }));

    var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
    cursor.lineY.set("visible", false);

    var xRenderer = am5xy.AxisRendererX.new(root, {
      minGridDistance: 30,
      minorGridEnabled: true
    });

    xRenderer.labels.template.setAll({
      rotation: -90,
      centerY: am5.p50,
      centerX: am5.p100,
      paddingRight: 15
    });

    xRenderer.grid.template.setAll({
      location: 1
    })

    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
      maxDeviation: 0.3,
      categoryField: "country",
      renderer: xRenderer,
      tooltip: am5.Tooltip.new(root, {})
    }));

    var yRenderer = am5xy.AxisRendererY.new(root, {
      strokeOpacity: 0.1
    })

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
      maxDeviation: 0.3,
      renderer: yRenderer
    }));

    var series = chart.series.push(am5xy.ColumnSeries.new(root, {
      name: "Series 1",
      xAxis: xAxis,
      yAxis: yAxis,
      valueYField: "value",
      sequencedInterpolation: true,
      categoryXField: "country",
      tooltip: am5.Tooltip.new(root, {
        labelText: "{valueY}"
      })
    }));

    series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5, strokeOpacity: 0 });
    series.columns.template.adapters.add("fill", function (fill, target) {
      return chart.get("colors").getIndex(series.columns.indexOf(target));
    });

    series.columns.template.adapters.add("stroke", function (stroke, target) {
      return chart.get("colors").getIndex(series.columns.indexOf(target));
    });


    // Set data
    var data = [{
      country: "Enero",
      value: 2025
    }, {
      country: "Febrero",
      value: 1882
    }, {
      country: "Marzo",
      value: 1809
    }, {
      country: "Abril",
      value: 1322
    }, {
      country: "Mayo",
      value: 1809
    }, {
      country: "Junio",
      value: 1122
    }, {
      country: "Julio",
      value: 1114
    }, {
      country: "Agosto",
      value: 984
    }, {
      country: "Septiembre",
      value: 711
    }, {
      country: "Octubre",
      value: 665
    }, {
      country: "Noviembre",
      value: 443
    }, {
      country: "Diciembre",
      value: 441
    }];

    xAxis.data.setAll(data);
    series.data.setAll(data);


    series.appear(1000);
    chart.appear(1000, 100);
    });
</script>
