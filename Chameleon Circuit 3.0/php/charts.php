<?php
if(isset($_GET['sidebar'])){
    include('s_header.php');
} else {
    include('header.php');
}
?>

<ul class="breadcrumbs first">
    <li><a href="#">Admin Panel</a></li>
    <li><a href="#">Home</a></li>
    <li class="active"><a href="#">Dashboard</a></li>
</ul>

    <div class="grid_16 widget first">
        <div class="widget_title clearfix">
            <h2>Interacting with Data Points</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">

                <p><a href="http://code.google.com/p/flot/">Flot</a> is a pure Javascript plotting library for jQuery. It produces graphical plots of arbitrary datasets on-the-fly client-side. The focus is on simple usage (all settings are optional), attractive looks and interactive features like zooming and mouse tracking.</p>
                <p>The plugin works with Internet Explorer 6+, Firefox 2.x+, Safari 3.0+, Opera 9.5+ and Konqueror 4.x+ with the HTML canvas tag</p>

                <div id="sincos" style="width:920px;height:300px" class="centered"></div>
                <script type="text/javascript">
                    $(function () {
                        var sin = [], cos = [];
                        
                       for (var i = 0; i < 14; i += 0.5) {
                            sin.push([i, Math.sin(i)/i]);
                            cos.push([i, Math.cos(i)]);
                       }

                        var plot = $.plot($("#sincos"),
                               [ { data: sin, label: "sin(x)/x"}, { data: cos, label: "cos(x)" } ], {
                                   series: {
                                       lines: { show: true  },
                                       points: { show: true }
                                   },
                                   grid: { hoverable: true, clickable: true, backgroundColor: { colors: ["#fff", "#eee"] } },
                                   yaxis: { min: -1.2, max: 1.2 },
                                   colors: ["#539F2E", "#3C67A5"]
                                 });

                        function showTooltip(x, y, contents) {
                            $('<div id="tooltip">' + contents + '</div>').css( {
                                position: 'absolute',
                                display: 'none',
                                top: y + 5,
                                left: x + 5,
                                border: '1px solid #fdd',
                                padding: '2px',
                                'background-color': '#dfeffc',
                                opacity: 0.80
                            }).appendTo("body").fadeIn(200);
                        }

                        var previousPoint = null;
                        $("#sincos").bind("plothover", function (event, pos, item) {
                            $("#x").text(pos.x.toFixed(2));
                            $("#y").text(pos.y.toFixed(2));

                                if (item) {
                                    if (previousPoint != item.dataIndex) {
                                        previousPoint = item.dataIndex;

                                        $("#tooltip").remove();
                                        var x = item.datapoint[0].toFixed(2),
                                            y = item.datapoint[1].toFixed(2);

                                        showTooltip(item.pageX, item.pageY,
                                                    item.series.label + " of " + x + " = " + y);
                                    }
                                }
                                else {
                                    $("#tooltip").remove();
                                    previousPoint = null;
                                }
                        });

                        $("#sincos").bind("plotclick", function (event, pos, item) {
                            if (item) {
                                $("#clickdata").text("You clicked point " + item.dataIndex + " in " + item.series.label + ".");
                                plot.highlight(item.series, item.datapoint);
                            }
                        });
                    });
                </script>
                <p id="hoverdata">Mouse hovers at (<span id="x">0</span>, <span id="y">0</span>). <span id="clickdata"></span></p>
        </div>
        </div>
    </div>

    <div class="clear"></div>
    <div class="grid_16 widget first">
        <div class="widget_title clearfix">
            <h2>Graphs with Stacking</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content center">
                <div id="stacked" style="height:280px; width: 920px" class="centered"></div>
                    <p class="stackControls">
                        <input type="button" value="With stacking" class="btn blue" />
                        <input type="button" value="Without stacking" class="btn blue" />
                    </p>

                    <p class="graphControls">
                        <input type="button" value="Bars" class="btn orange" />
                        <input type="button" value="Lines" class="btn orange" />
                        <input type="button" value="Lines with steps" class="btn orange" />
                    </p>

                <script id="source">
                    $(function () {
                        var d1 = [];
                        for (var i = 0; i <= 10; i += 1)
                            d1.push([i, parseInt(Math.random() * 30)]);

                        var d2 = [];
                        for (var i = 0; i <= 10; i += 1)
                            d2.push([i, parseInt(Math.random() * 30)]);

                        var d3 = [];
                        for (var i = 0; i <= 10; i += 1)
                            d3.push([i, parseInt(Math.random() * 30)]);

                        var stack = 0, bars = true, lines = false, steps = false;

                        function plotWithOptions() {
                            $.plot($("#stacked"), [ d1, d2, d3 ], {
                                series: {
                                    stack: stack,
                                    lines: { show: lines, fill: true, steps: steps },
                                    bars: { show: bars, barWidth: 0.6 },
                                    grid: {backgroundColor: { colors: ["#fff", "#eee"] } }
                                }
                            });
                        }

                        plotWithOptions();

                        $(".stackControls input").click(function (e) {
                            e.preventDefault();
                            stack = $(this).val() == "With stacking" ? true : null;
                            plotWithOptions();
                        });
                        $(".graphControls input").click(function (e) {
                            e.preventDefault();
                            bars = $(this).val().indexOf("Bars") != -1;
                            lines = $(this).val().indexOf("Lines") != -1;
                            steps = $(this).val().indexOf("steps") != -1;
                            plotWithOptions();
                        });
                    });
                    </script>
            </div>
        </div>
    </div>


    <div class="clear"></div>


    <div class="grid_16 widget first">
        <div class="widget_title clearfix">
            <h2>Multiple Graph Types In One</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">
                <div id="multiple" style="width:920px;height:300px" class="centered"></div>
                    <script type="text/javascript">
                    $(function () {
                        var d1 = [];
                        for (var i = 0; i < 14; i += 0.5)
                            d1.push([i, Math.sin(i)]);

                        var d2 = [[0, 3], [4, 8], [8, 5], [9, 13]];

                        var d3 = [];
                        for (var i = 0; i < 14; i += 0.5)
                            d3.push([i, Math.cos(i)]);

                        var d4 = [];
                        for (var i = 0; i < 14; i += 0.1)
                            d4.push([i, Math.sqrt(i * 10)]);

                        var d5 = [];
                        for (var i = 0; i < 14; i += 0.5)
                            d5.push([i, Math.sqrt(i)]);

                        var d6 = [];
                        for (var i = 0; i < 14; i += 0.5 + Math.random())
                            d6.push([i, Math.sqrt(2*i + Math.sin(i) + 5)]);

                        $.plot($("#multiple"), [
                            {
                                data: d1,
                                lines: { show: true, fill: true }
                            },
                            {
                                data: d2,
                                bars: { show: true }
                            },
                            {
                                data: d3,
                                points: { show: true }
                            },
                            {
                                data: d4,
                                lines: { show: true }
                            },
                            {
                                data: d5,
                                lines: { show: true },
                                points: { show: true }
                            },
                            {
                                data: d6,
                                lines: { show: true, steps: true }
                            }
                        ]);
                    });
                    </script>
            </div>
        </div>
    </div>

    <div class="clear"></div>

    <div class="grid_8 widget first">
        <div class="widget_title clearfix">
            <h2>Pie Chart</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">
                <div id="graph0" style="width:400px; height: 300px" class="centered"></div>
            </div>
        </div>
    </div>

    <div class="grid_4 widget">
        <div class="widget_title clearfix">
            <h2>Donut</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">
                <div id="donut" style="width:100%; height: 300px" class="centered"></div>
            </div>
        </div>
    </div>

    <div class="grid_4 widget">
        <div class="widget_title clearfix">
            <h2>Interactive</h2>
        </div>
        <div class="widget_body">
            <div class="widget_content">
                <div id="interactive" style="width:100%; height: 300px" class="centered"></div>
            </div>
        </div>
    </div>

<script type="text/javascript">
$(function () {
	// data
	var data = [
		{ label: "Series1",  data: 10},
		{ label: "Series2",  data: 30},
		{ label: "Series3",  data: 90},
		{ label: "Series4",  data: 70},
		{ label: "Series5",  data: 80},
		{ label: "Series6",  data: 110}
	];


	var series = Math.floor(Math.random()*10)+1;
	for( var i = 0; i<series; i++)
	{
		data[i] = { label: "Series"+(i+1), data: Math.floor(Math.random()*100)+1 }
	}

        $.plot($("#graph0"), data,
            {
                    series: {
                        pie: {
                            show: true
                        }
                    }
            });

	// DONUT
        $.plot($("#donut"), data,
            {
                    series: {
                            pie: {
                                    innerRadius: 0.5,
                                    show: true
                            }
                    },
                    legend: {
                        show: false
                    }
            });

	// INTERACTIVE
        $.plot($("#interactive"), data,
            {
                    series: {
                            pie: {
                                    show: true
                            }
                    },
                    grid: {
                            hoverable: true,
                            clickable: true
                    },
                    legend: {
                        show: false
                    }
            });
            $("#interactive").bind("plothover", pieHover);

    });

    function pieHover(event, pos, obj)
    {
            if (!obj)
                    return;
            percent = parseFloat(obj.series.percent).toFixed(2);
            $("#hover").html('<span style="font-weight: bold; color: '+obj.series.color+'">'+obj.series.label+' ('+percent+'%)</span>');
    }
</script>


<?php include("footer.php") ?>