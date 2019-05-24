<!DOCTYPE HTML>
<html>
<head>
<title>Face Recognation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<script src="js/simpleCart.min.js"> </script>
<script src="js/amcharts.js"></script>
<script src="js/serial.js"></script>
<script src="js/light.js"></script>
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
	 <!--pie-chart--->
	 
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="js/pie-chart.js" type="text/javascript"></script>
<script src="js/moment-2.2.1.js"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });


        });

    </script>
</head>
<?php include_once('koneksi.php'); ?>
<body>

   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			
				
					<!-- //header-ends -->

				<!--content-->
			<div class="content">
<div class="women_main">
	<!-- start content -->

   <div class="w_content">
		<div class="women">	
		     <div class="clearfix"></div>
		</div>
		<!-- grids_of_4 -->
		<?php	
			if(isset($_GET['page'])){
				include_once($_GET['page'].'.php');
			}else{
					include_once('home.php');
			}
		?>
		<!-- end grids_of_4 -->


	</div>
   <div class="clearfix"></div>
	<!-- end content -->
<div class="footer">
					<div class="clearfix"> </div>
						<p>© 2019 Team Face Recognation <a href="https://nusa.net.id">Nusanet</a></p>
			</div>
</div>

</div>
			<!--content-->
		</div>
</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a>
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                <div class="menu">
									<ul id="menu" >
										<li><a href="?page=home"><i class="fa fa-home"></i> <span>Home</span></a></li>
										 <li id="employee" ><a href="?page=employee"><i class="fa fa-user"></i> <span>Employee</span></a></li>
										 <li id="event" ><a href="?page=event"><i class="fa fa-table"></i> <span>Event</span></a></li>
										 <li id="Log" ><a href="?page=logs"><i class="fa fa-file-text-o"></i> <span>Logs</span></a></li>
										 </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>
							</div>

							
							<script>
							var toggle = true;

							$(".sidebar-icon").click(function() {
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }

											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
   <!-- real-time -->
	<script type="text/javascript">

	$(function() {

		// We use an inline data source in the example, usually data would
		// be fetched from a server

		var data = [],
			totalPoints = 300;
		// Set up the control widget

		// Add the Flot version string to the footer
	});

	</script>
<!-- /real-time -->
<script src="js/jquery.fn.gantt.js"></script>
		   <script src="js/menu_jquery.js"></script>
</body>
</html>
