<?php
    include('blogger_conn.php');
    if(isset($_REQUEST['id'])){
        	$sql="DELETE FROM newsupdate  WHERE id= $_REQUEST[id]";
            if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Account Successfully Deleted')
                location.href='newsinventory.php' </script>";
            }
            else{
                echo "Error Deleting Record" .mysqli_error($conn);
            }
    }
?>
