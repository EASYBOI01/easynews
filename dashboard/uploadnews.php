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

    <title><?php echo $session_fullname; ?>| UPLOAD NEWS</title>

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
           include("blogger_conn.php");
        $ip=$_SERVER['REMOTE_ADDR'];
        $device=$_SERVER['HTTP_USER_AGENT'];
        $rand=rand(100, 10000);
        $current= date("Y/d/");
        $newsuin="EASYNEWS/".$current .$rand;

			 error_reporting(E_ALL);
			 if(isset($_REQUEST["uploadnews"])){
			   $date=trim(addslashes($_REQUEST["dateadded"]));
			   $headline=trim(addslashes($_REQUEST["headline"]));
			   $content=trim(addslashes($_REQUEST["newscontent"]));
               $posted_user=$_REQUEST["postedby"];
    $category = $_REQUEST["newscategory"];
			   $newsuin=$_REQUEST["news_uin"];             
			   $coverimagecredit=trim(addslashes($_REQUEST["coverphotocredit"]));
			   $embeddedcode=trim(addslashes($_REQUEST["embeddedlink"]));
         $coverimage=$_FILES["coverimage"]['name'];
         $target="newscoverphoto/";
         $target=$target.$_FILES["coverimage"]['name'];   

         function RemoveSpecialChar($headline){

            // Using preg_replace() function
            // to replace the word
            $res = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$headline);

            // Returning the result
            return $res;
        }
         $headline2 = RemoveSpecialChar($headline);
         $headline3= str_replace(" ",'-',$headline2);
         $headline4 = strtolower($headline3);


               $check=mysqli_query($conn,"SELECT * FROM newsupdate WHERE news_uin='$newsuin' AND headline='$headline'");
               $checkrows=mysqli_num_rows($check);
              if($checkrows > 0){
                echo "<script> alert('News Already Uploaded')
                location='newsinventory.php'</script>";
              }
              else{
                        
                if(move_uploaded_file($_FILES["coverimage"]['tmp_name'], $target) >0){

              $sql="INSERT INTO newsupdate (device, ip_address, `date`, postedby, viewcount , category, headline, news_uin, content, newscoverimage, coverimagephotocredit, embeddedcode, a) VALUES ('$device', '$ip','$date', '$posted_user', '0' , '$category', '$headline','$newsuin', '$content', '$coverimage','$coverimagecredit','$embeddedcode','$headline4')";
           
              mysqli_query($conn, $sql) or die (mysqli_error($conn));
              $num=mysqli_insert_id($conn);
              if(mysqli_affected_rows($conn)!=1){
              $message="error inserting record to DB";
              } 

              echo"<script> alert('Congratulations your news about $category has been successfully uploaded')
              location='newsinventory.php'
            </script>"; 

			 }}}
		?>
      <form method="post" enctype="multipart/form-data">
            <div class="row wrapper border-bottom white-bg page-heading">
                    <div class="col-lg-10">
                    <h2>EASY NEWS| UPLOAD</h2>
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
                            
                            <input type="date" name="dateadded" class="form-control dat">
                        </div>

                        <div class="col-lg-4">
                            
                            <label>Category</label>
                            <select name="newscategory" class="form-control dat" id="">
                            <option value="">--SELECT CATEGORY--</option>
                            <option value="Entertainment">Entertainment</option>
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
                            <input type="text" name="headline" placeholder="Enter Headlines (UPPERCASE)" class="form-control dat" id="">
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
<textarea name="newscontent" id="" cols="30" placeholder="Enter Your Body Text Here" rows="10" class="summernote">

                       
                           
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
                        <div class="col-lg-8">
                            <label>NEWS COVER IMAGE</label>
                            
                            <input type="file" name="coverimage" class="form-control">
                        </div>

                     
                        <div class="col-lg-4">
                            
                            <label>Cover Image (Photo Credit)</label>
                            <input type="text" name="coverphotocredit" placeholder="Cover Image Photo Credit" class="form-control" id="">
                        </div>
                        

    </div>
                    
                    
                    
                   </div>                        

                </div>

               

                </div>
                
                </div>
 <div class="ibox-title">
                        <h5>Youtube | Audiomack | Soundcloud (Embedded Code)</h5>
                        <input type="text" name="embeddedlink" placeholder="Youtube | Audiomack | Soundcloud (Embedded Code) Here" class="form-control" id="">
                        </div>
                        <div class="ibo-title">
                        
                        <input type="hidden" name="news_uin" value="<?php echo $newsuin ?>"; class="for-control" id="">
                        </div>
                        <div class="ibo-title">
                        
                        <input type="hidden" name="postedby" value="<?php echo $session_fullname ?>"; class="for-control" id="">
                        </div>
                        </div>
                            <div class="form-group ">
                                    <div  class="col-lg-12">
                                        <input type="submit" value="UPLOAD NEWS" class="btn btn-lg btn-danger  btn-block"  name="uploadnews">
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
