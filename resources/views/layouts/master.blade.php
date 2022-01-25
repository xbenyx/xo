
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Ebidem application to connect to SAGE200 and Sicon">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Twitter meta-->


    <meta property="twitter:card" content="summary_large_image">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Admin">
    <meta property="og:title" content="EBIDEM Admin">
    <meta property="og:description" content="Ebidem application to connect to SAGE200 and Sicon">
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="app sidebar-mini rtl">
<!-- Navbar-->
<!-- Sidebar menu-->

@yield('content')

<!-- Essential javascripts for application to work-->
<script src="{{asset('/')}}js/jquery-3.2.1.min.js"></script>
<script src="{{asset('/')}}js/popper.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.min.js"></script>
<script src="{{asset('/')}}js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="{{asset('/')}}js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<script type="text/javascript" src="{{asset('/')}}js/plugins/chart.js"></script>
<script type="text/javascript">
    var data = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [
            {
                label: "My First dataset",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(220,220,220,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [65, 59, 80, 81, 56]
            },
            {
                label: "My Second dataset",
                fillColor: "rgba(151,187,205,0.2)",
                strokeColor: "rgba(151,187,205,1)",
                pointColor: "rgba(151,187,205,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 86]
            }
        ]
    };
    var pdata = [
        {
            value: 300,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Complete"
        },
        {
            value: 50,
            color:"#F7464A",
            highlight: "#FF5A5E",
            label: "In-Progress"
        }
    ]

    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);

    var ctxp = $("#pieChartDemo").get(0).getContext("2d");
    var pieChart = new Chart(ctxp).Pie(pdata);
</script>
@stack('js')
</body>
</html>