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

                error_reporting(E_ALL);
                if(isset($_REQUEST["updatenews"])){
                  $dateadded=$_REQUEST["dateadded"];
                  $headline=trim(addslashes($_REQUEST["headline"]));
                  $contents=trim(addslashes($_REQUEST["newscontent"]));
                  $categorys=$_REQUEST["newscategory"];
                  $newsuins=$_REQUEST["news_uin"];             
                  $coverimagecredits=trim(addslashes($_REQUEST["coverphotocredit"]));
                  $embeddedcodes=trim(addslashes($_REQUEST["embeddedlink"]));
$headlinea=trim(addslashes($_REQUEST["headlinea"]));

                        function RemoveSpecialChar($headlinea){

                            // Using preg_replace() function
                            // to replace the word
                            $res = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$headlinea);
                
                            // Returning the result
                            return $res;
                        }
                        $headline2 = RemoveSpecialChar($headlinea);
                        $headline3= str_replace(" ",'-',$headline2);
                        $headline4 = strtolower($headline3);

                        $sql = "UPDATE newsupdate SET `date`='$dateadded', headline='$headline', content='$contents', category='$categorys', news_uin='$newsuins',coverimagephotocredit='$coverimagecredits', embeddedcode='$embeddedcodes',a='$headline4' WHERE id='$_REQUEST[id]'"; 
                           
                    
               
                        mysqli_query($conn, $sql) or die(mysqli_error($conn));
                        $num = mysqli_insert_id($conn);
                        $result=mysqli_query($conn,$sql);
                        if (mysqli_affected_rows($conn) != 1) {
                            $message = "Error Updating News Information.";
                        }
                        echo "<script>alert('NEWS Successfully Updated')
                      location='newsinventory.php'</script>";
                    }
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
                        <div class="col-lg-4">
                        <style type="text/css">
.dat{
    text-transform: uppercase;
}
</style>
                            <label>Date Added</label>
                            
                            <input type="date" name="dateadded" value="<?php echo $row['date'] ?>" readonly class="form-control dat">
                        </div>

                        <div class="col-lg-4">
                            
                            <label>Category</label>
                            <select name="newscategory" class="form-control dat" id="">
                            <option><?php echo $row['category'] ?> </option>
                            <!-- <option value="Entertainment" >Entertainment</option> -->
                            <option value="Sport">Sport</option>
                                <option value="Politics">Politics</option>
                                <option value="Fashion">Fashion</option>
                                <option value="Education">Education</option>
                                <option value="Technology">Technology</option>
                                <option value="Lifestyle">Lifestyle</option>
                                <option value="Religion">Religion</option>
                                <option value="Business">Business</option>
                                <option value="Trending Video">Trending Video</option>
                            </select>
                        </div>
                        <div class="col-lg-4">
                            
                            <label>Headline</label>
                            <input type="text" name="headline" value="<?php echo $row['headline'] ?> " placeholder="Enter Headlines" class="form-control dat" id="">
                        </div>
                        
                        
           

</div>
                    
                    </div>

            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>News Contents</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                          
                        </div>
                    </div>
                    <div class="ibox-content no-padding">
<textarea name="newscontent" id="" cols="30" rows="10" class="summernote" >
<?php echo $row['content'] ?> 
                       
                           
</textarea>
                    
                </div>
            </div>
            </div>
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
                            
                            <label>LINK HEADLINE</label>
                            <input type="text" name="headlinea" value="<?php echo $row['headline'] ?>" class="form-control" id="">
                        </div>
                        <div class="col-lg-6">
                            
                            <label>Cover Image (Photo Credit)</label>
                            <input type="text" name="coverphotocredit" value="<?php echo $row['coverimagephotocredit'] ?>" class="form-control" id="">
                        </div>
                        
                        

    </div>
                    
                    
                    
                   </div>                        

                </div>

               

                </div>
                
                </div>
 <div class="ibox-title">
                        <h5>Youtube | Audiomack | Soundcloud (Embedded Code)</h5>
                        <input type="text" name="embeddedlink" value="<?php echo $row['embeddedcode'] ?>" class="form-control" id="">
                        </div><div class="ibo-title">
                        
                        <input type="hidden" name="news_uin" value="<?php echo $row['news_uin'] ?>" class="for-control" id="">
                        </div>
                            <div class="form-group ">
                                    <div  class="col-lg-12">
                                        <input type="submit" value="UPDATE NEWS" class="btn btn-lg btn-danger  btn-block"  name="updatenews">
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
