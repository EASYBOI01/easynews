<?php
include('session.php');
include('blogger_conn.php');
$id= 1;
$sql="SELECT * FROM newsupdate WHERE id='$id'";
$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
$rows=mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Data Tables</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
   
    <?php
    include('menu.php');
    ?>
   
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Data Tables</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Tables</a>
                        </li>
                        <li class="active">
                            <strong>Data Tables</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Basic Data Tables example with responsive plugin</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="#">Config option 1</a>
                                        </li>
                                        <li><a href="#">Config option 2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="ibox-content">

                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover dataTables-example">
                                        <thead>
                                            <tr>
                                            <th>S/N</th>
                                                <th>DATE ADDED</th>
                                                <th>NEWS CATEGORY</th>
                                                <th>NEWS CODE</th>
                                                <th>POSTED BY</th>
                                                <th>HEADLINE</th>
                                                <th>CONTENT</th>
                                                <th>EMBEDDED LINK</th>
                                                <th>VIEW COUT</th>
                                                <th>COVER IMAGE</th>
                                                <th>PHOTO CREDIT</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
include('blogger_conn.php'); 
if($_POST){
    $search=$_REQUEST['search'];

$sql = "SELECT * FROM newsupdate WHERE headline='$search' OR news_uin='$search' OR coverimagephotocredit='$search' ORDER by `id` DESC";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
 while($row = mysqli_fetch_array($result)) {
?>
                                            <tr class="gradeX">
                                            <td> <?php echo $row['id']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <td class="center"><?php echo $row['category']; ?></td>
                                                <td class="center"><?php echo $row['news_uin']; ?></td>
                                                <td class="center"><?php echo $row['postedby']; ?></td>
                                                <td class="center"><?php echo $row['headline']; ?></td>
                                                <td class="center"><?php echo $row['content']; ?></td>
                                                <td class="center"><?php echo $row['embeddedcode']; ?></td>
                                                <td class="center"><?php echo $row['headline']; ?></td>
                                                <td class="center"> <img src="newscoverphoto/<?php echo $row['newscoverimage'] ?>" height="60px" class="img-circle" /></td>
                                                <td class="center"><?php echo $row['coverimagephotocredit']; ?></td>
                                               <td class="center">  <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-primary btn-xs btn-outline dropdown-toggle">Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a <?php echo "href='updated.php?id=" . $row['id'] . "'"; ?>
                                            onclick="return confirm('Are You Sure You want to Update this record?')">Edit</a></li>
                                            <li><a href="#">View</a></li>
                                            <li><a <?php echo "href='delete.php?id=" . $row['id'] . "'"; ?>
                                            onclick="return confirm('Are You Sure You want to delete this record?')">Delete</a></li>
                                        </ul>
                                    </div></td>
                                                
                                            </tr>
                                              
                                            <?php
 }}
else{
                                                echo "<script> alert('Client record not found') </script>";
}}
                                            ?>
                            
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Rendering engine</th>
                                                <th>Browser</th>
                                                <th>Platform(s)</th>
                                                <th>Engine version</th>
                                                <th>CSS grade</th>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
              
                
            </div>
            <div class="footer">
                <div class="pull-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>

        </div>
    </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    }, {
                        extend: 'csv'
                    }, {
                        extend: 'excel',
                        title: 'ExampleFile'
                    }, {
                        extend: 'pdf',
                        title: 'ExampleFile'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable('../example_ajax.php', {
                "callback": function(sValue, y) {
                    var aPos = oTable.fnGetPosition(this);
                    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
                },
                "submitdata": function(value, settings) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition(this)[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            });


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData([
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row"
            ]);

        }
    </script>

</body>

</html>