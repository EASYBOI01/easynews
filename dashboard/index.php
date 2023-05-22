<?php
include('session.php');
include('blogger_conn.php');
$id= 1;
$sql="SELECT * FROM register WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $session_fullname; ?>| Dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

   <?php include("menu.php") ?>
            <div class="row wrapper border-bottom white-bg page-heading">
               
                <div class="col-sm-9">
                        <h2>WELCOME <strong style="font-size: 35px; font-style: italic;"><?php echo $session_fullname; ?></strong> TO YOUR <span>
                            <img alt="image" class="img-square" src="img/new1.png" height="100px" width="auto" />
                             </span> ADMIN DASHBOARD</h2>
                        <br>
                        
                </div>
                  
            </div>
       
            <div class="wrapper wrapper-content animated fadeInRight white-bg row ">
        <div class="row">
       
            <a href="uploadnews.php"> <div class="col-lg-4">
                <div class="widget style1 red-bg">
                    <div class="row">
                       <div class="col-xs-4">
                            <i class="fa fa-newspaper-o fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-left">
                            <span> Upload News</span>
                            <h2 class="font-bold">NEWS</h2>
                        </div>
                    </div>
                </div>
            </div></a>
           <a href="">
            <div class="col-lg-4">
                <div class="widget style1 yellow-bg ">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-file-photo-o fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-left">
                            <span>Upload Photo News</span>
                            <h2 class="font-bold">PHOTO NEWS</h2>
                        </div>
                    </div>
                </div>
            </div></a> 
            
           <a href="newsinventory.php"><div class="col-lg-4">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                        <div class="col-xs-4">
                            <i class="fa fa-database fa-5x"></i>
                        </div>
                        <div class="col-xs-8 text-left">
                            <span> News Inventory </span>
                            <h2 class="font-bold">INVENTORY</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div></a> 
        </div>
<!-- TOTAL NEWS UPLOADED -->
        <div class="row">
            <div class="col-lg-12">
                <div class="widget navy-bg no-padding">
                    <div class="p-m">
                        <h1 class="m-xs" style="font-family: Times New Roman; text-align: center;">TOTAL NUMBER OF NEWS UPLOADED</h1>
                    </div>

                    <div class="col-lg-12 lazur-bg">

                    <div class="col-lg-4">
                    <div class="widget style1 black-bg">
                        <div class="row vertical-align"  style="font-family: Times New Roman;">
                            <h2 class="col-xs-6 font-bold" style="font-family: Times New Roman; font-size: x-large;">
                                Total No Of Posts
                            </h2>
                            <div class="col-xs-6 text-right">
                            <h2 class="font-bold">
                            <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate ";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	
?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></h2>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-lg-2">
                    <div class="widget style1 red-bg">
                        <div class="row vertical-align">
                            <h2 class="col-xs-3 font-bold" style="font-family: Times New Roman;">
                                Sports
                            </h2>
                            <div class="col-xs-9 text-right">
                            <h2 class="font-bold">
                            <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='sport'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	
?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></h2>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-lg-2">
                    <div class="widget style1 black-bg">
                        <div class="row vertical-align">
                            <h2 class="col-xs-3 font-bold" style="font-family: Times New Roman;">
                                Business
                            </h2>
                            <div class="col-xs-9 text-right">
                            <h2 class="font-bold">
                            <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='business'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	
?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></h2>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-lg-2">
                    <div class="widget style1 blue-bg">
                        <div class="row vertical-align">
                            <h2 class="col-xs-3 font-bold" style="font-family: Times New Roman;">
                                Lifestyle
                            </h2>
                            <div class="col-xs-9 text-right">
                            <h2 class="font-bold">
                            <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='lifestyle'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	
?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="widget style1 yellow-bg">
                        <div class="row vertical-align">
                            <h2 class="col-xs-3 font-bold" style="font-family: Times New Roman;">
                                Technology
                            </h2>
                            <div class="col-xs-9 text-right">
                            <h2 class="font-bold">
                            <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Technology'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	
?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="widget style1 blue-bg">
                        <div class="row vertical-align">
                            <h2 class="col-xs-3 font-bold" style="font-family: Times New Roman;">
                                Politics
                            </h2>
                            <div class="col-xs-9 text-right">
                            <h2 class="font-bold">
                            <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Politics'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	
?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="widget style1 yellow-bg">
                        <div class="row vertical-align">
                            <h2 class="col-xs-3 font-bold" style="font-family: Times New Roman;">
                                Fashion
                            </h2>
                            <div class="col-xs-9 text-right">
                            <h2 class="font-bold">
                            <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Fashion'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	
?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="widget style1 red-bg">
                        <div class="row vertical-align">
                            <h2 class="col-xs-3 font-bold" style="font-family: Times New Roman; ">
                                Entertainment
                            </h2>
                            <div class="col-xs-9 text-right">
                            <h2 class="font-bold">
                            <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Entertainment'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	
?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-3">
                    <div class="widget style1 black-bg">
                        <div class="row vertical-align">
                            <h2 class="col-xs-3 font-bold" style="font-family: Times New Roman;">
                                Education
                            </h2>
                            <div class="col-xs-9 text-right">
                            <h2 class="font-bold">
                            <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Education'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	
?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="widget style1 black-bg">
                        <div class="row vertical-align">
                            <h2 class="col-xs-3 font-bold" style="font-family: Times New Roman; font">
                                Religion
                            </h2>
                            <div class="col-xs-9 text-right">
                            <h2 class="font-bold">
                            <?php

$sql = "SELECT COUNT( * ) AS TOTALPOST FROM newsupdate WHERE category='Religion'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {
	
?><span><?php echo $row['TOTALPOST']; ?></span><?php } ?></h2>
                            </div>
                        </div>
                    </div>
                </div>


                </div>
                    
                </div>
            </div>
<!-- END OF TOTAL NEWS UPLOADED -->

<!-- ALL VISITORS -->
         
            <div class="col-lg-12 widget">
            <div class="row">
                <div class="black-bg no-padding">
                    <div class="p-m">
                        <h1 class="m-xs" style="font-family: Times New Roman; text-align: center; color: white;">VISITORS</h1>
                    </div>

                    <div class="col-lg-12 black-bg">
 

                    
                    <div class="col-lg-6">
                    <div class="widget style1 blue-bg">
                        <div class="row vertical-align"  style="font-family: Times New Roman; color: white;">
                            <h2 class="col-xs-6 font-bold" style="font-family: Times New Roman; font-size: x-large;">
                             ALL VISITORS
                            </h2>
                            <div class="col-xs-6 text-right">
                            <h2 class="font-bold">
                            <?php
$sql = "SELECT COUNT( * ) AS ALLVISITORS FROM visitors_ip";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?>
        <span>
           <?php echo $row['ALLVISITORS']; ?>
        </span>
        <?php 
        }
        ?>
        </h2> 
       
        
                            </div>
                             <!-- <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart2"></div>
                    </div> -->
                        </div>
                        <!-- chart begin--- -->
                        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Bar Chart Example</h5>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="barChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
                        <!-- ---chart end--- -->
                    </div>
                </div>
                  
                
                <div class="col-lg-6">
                    <div class="widget style1 blue-bg">
                        <div class="row vertical-align"  style="font-family: Times New Roman; color: white;">
                            <h2 class="col-xs-6 font-bold" style="font-family: Times New Roman; font-size: x-large;">
                             NEW VISITORS
                            </h2>
                            <div class="col-xs-6 text-right">
                            <h2 class="font-bold">


<?php

include("blogger_conn.php");
$ip=$_SERVER['REMOTE_ADDR'];
$device=$_SERVER['HTTP_USER_AGENT'];


$check=mysqli_query($conn,"SELECT * FROM new_visitors WHERE allvisitorsip='$ip' OR visitorsphone='$device'");
$checkrows=mysqli_num_rows($check);
if($checkrows > 0){
    // echo "<script>alert('FORMER')</script>";
}
else{
$sql="INSERT INTO new_visitors (allvisitorsip, visitorsphone) VALUES ('$ip', '$device')";

mysqli_query($conn, $sql) or die (mysqli_error($conn));
$num=mysqli_insert_id($conn);
if(mysqli_affected_rows($conn)!=1){
$message="error inserting record to DB";
}} 	
?>





                            <?php
$sql = "SELECT COUNT( * ) AS NEWVISITORS FROM new_visitors";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)) {

?>
        <span>
           <?php echo $row['NEWVISITORS']; ?>
        </span>
        <?php 
        }  
        ?>
        </h2>
                            </div>
                            <!-- <div class="flot-chart">
                        <div class="flot-chart-content" id="flot-chart2"></div>
                    </div> -->
                        </div>
                        <!-- chart begin--- -->
            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Line Chart Example
                                <small>With custom colors.</small>
                            </h5>
                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="lineChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
                        <!-- ---chart end--- -->
                    </div>
                </div>

                
            <!-- ----- -->
            </div>
                    </div>
                </div>  
                  <!-- END OF VISITORS -->
            






                  
      <!-- TOTAL END TAG  --> </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/jquery-ui-1.10.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- Jvectormap -->
    <script src="js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script>
        $(document).ready(function(){
            var d1 = [[1262304000000, 6], [1264982400000, 3057], [1267401600000, 20434], [1270080000000, 31982], [1272672000000, 26602], [1275350400000, 27826], [1277942400000, 24302], [1280620800000, 24237], [1283299200000, 21004], [1285891200000, 12144], [1288569600000, 10577], [1291161600000, 10295]];
            var d2 = [[1262304000000, 5], [1264982400000, 200], [1267401600000, 1605], [1270080000000, 6129], [1272672000000, 11643], [1275350400000, 19055], [1277942400000, 30062], [1280620800000, 39197], [1283299200000, 37000], [1285891200000, 27000], [1288569600000, 21000], [1291161600000, 17000]];

            var data1 = [
                { label: "Data 1", data: d1, color: '#17a084'},
                { label: "Data 2", data: d2, color: '#127e68' }
            ];
            $.plot($("#flot-chart1"), data1, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            var data2 = [
                { label: "Data 1", data: d1, color: '#19a0a1'}
            ];
            $.plot($("#flot-chart2"), data2, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            var data3 = [
                { label: "Data 1", data: d1, color: '#fbbe7b'},
                { label: "Data 2", data: d2, color: '#f8ac59' }
            ];
            $.plot($("#flot-chart3"), data3, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        }
                    },
                    points: {
                        width: 0.1,
                        show: false
                    }
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false
                }
            });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $(".todo-list").sortable({
                placeholder: "sort-highlight",
                handle: ".handle",
                forcePlaceholderSize: true,
                zIndex: 999999
            }).disableSelection();

            var mapData = {
                "US": 498,
                "SA": 200,
                "CA": 1300,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
                "RU": 2000
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 1,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },
                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                }
            });
        });
    </script>
<!-- Mainly scripts -->
<script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="js/plugins/flot/jquery.flot.time.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Flot demo data -->
    <script src="js/demo/flot-demo.js"></script>
    
    <!-- realcurrent -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>
    <script src="js/demo/chartjs-demo.js"></script>

</body>

</html>
