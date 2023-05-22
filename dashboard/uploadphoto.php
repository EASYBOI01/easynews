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

    <title><?php echo $session_fullname; ?>| UPDATE NEWS</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/plugins/summernote/summernote.css" rel="stylesheet">
    <link href="css/plugins/summernote/summernote-bs3.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
<?php 
include("menu.php");
?>
 <?php
include('blogger_conn.php');
if(isset($_REQUEST['id'])){
$sql="SELECT * FROM newsupdate WHERE id='$_REQUEST[id]'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
}
?>
  <?php
           include("blogger_conn.php");

         
                    ?>
      <form method="post">
            <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                    <h2>EASY NEWS| UPDATE</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">Back</a>
                        </li>
                
                        <li class="active">
                            <strong>Upload News</strong>
                        </li>
                    </ol>
                   </div>
         
            </div>
          
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Upload Latest News Here</h5>
                        </div>
                    </div>
                    <div class="ibox-content no-padding">
                        <div class="ibox-content">

                        
<div class="row">
                        <div class="col-lg-6">
                        <style type="text/css">
.dat{
    text-transform: uppercase;
}
</style>
                            <label>Select Date</label>
                            
                            <input type="date" name="dateadded"  class="form-control dat">
                        </div>

                        <div class="col-lg-6">
                            
                            <label>Photo Headline</label>
                            <input type="text" name="photoheadline" placeholder="Photo Headlines" class="form-control dat" id="">
                        </div>
</div>  
                    </div>

            <div class="row">
                
                    </div>
                </div>
            </div>

<div class="wrapper wrapper-content">
    <div class="row">
                <div class="col-lg-12">
               
                    <div class="ibox-content no-padding">
                        <div class="ibox-content">

                        
    <div class="row">
                  

                     
                        <div class="col-lg-6">
                            
                            <label>Upload Photo</label>
                            <input type="file" name="photonews"  class="form-control" id="">
                        </div>
                        <div class="col-lg-6">
                            
                            <label>Photo Credit</label>
                            <input type="text" name="photocredit"  class="form-control" id="">
                        </div>
                        

    </div>
                    
                    
                    
                   </div>                        

                </div>

               

                </div>
                
                </div>
 
                            <div class="form-group ">
                                    <div  class="col-lg-12">
                                        <input type="submit" value="UPLOAD" class="btn btn-lg btn-danger  btn-block"  name="uploadphoto">
                                    </div>
                                </div>
                
                </div> 

            </div>
           
  
        
            </form>
  
        <div class="footer">
            <div>
                <strong>Copyright</strong> EASYWEB &copy; 2022
            </div>
        </div>

        </div>




    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- SUMMERNOTE -->
    <script src="js/plugins/summernote/summernote.min.js"></script>

    <script>
        $(document).ready(function(){

            $('.summernote').summernote();

       });
        var edit = function() {
            $('.click2edit').summernote({focus: true});
        };
        var save = function() {
            var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
            $('.click2edit').destroy();
        };
    </script>

</body>

</html>
