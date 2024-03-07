<?php $htmlString= 'testing'; ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Registration Page</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
		
		<script type="text/javascript">
		var htmlString="<?php echo $htmlString; ?>";
		alert(htmlString);
		
        $(document).ready(function () {
            var options = {
                chart: {
                    renderTo: 'container',
                    type: 'column'
                },
                title: {
                    text: 'People registered'
                },
                xAxis: {
                    categories: []
                },
                yAxis: {
                    title: {
                        text: 'Units'
                    }
                },
                series: []
            };

            $.get('data.csv', function (data) {
                // Split the lines
                var lines = data.split('\n');
                // Iterate over the lines and add categories or series
                $.each(lines, function (lineNo, line) {
                    var items = line.split(',');

                    // header line containes categories
                    if (lineNo == 0) {
                        $.each(items, function (itemNo, item) {
                            if (itemNo > 0) options.xAxis.categories.push(item);
                        });
                    }
                        // the rest of the lines contain data with their name in the first
                        // position
                    else {
                        var series = {
                            data: []
                        };
                        $.each(items, function (itemNo, item) {
                            if (itemNo == 0) {
                                series.name = item;
                            } else {
                                series.data.push(parseFloat(item));
                            }
                        });

                        options.series.push(series);
                    }

                });

                // Create the chart
                var chart = new Highcharts.Chart(options);
            });
        });

    </script>
	
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="index.html">Singapore's 50th Birthday</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="index.html">Home</a></li>
											<li><a href="generic.html">Registration page</a></li>
											<li><a href="elements.html">Administrator page</a></li>
											<li><a href="generic.php">Dynamic data page</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
		<div id="main-wrapper">
            <div id="container" style="width: 800px; height: 400px; margin: 0 auto">
            </div>

            

        </div>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
						</ul>
						<ul class="copyright">
							<li>&copy; KangMin</li><li>Design: <a href="">KangMin</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>