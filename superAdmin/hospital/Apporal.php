<?php
    include('../connection.php');
    $id = $_GET['id'];
    $approveQuery = "update hospital set isapprove = 'Accepted' where id = '$id'";
    $result = mysqli_query($conn,$approveQuery);
    if ($result) {
        echo "  <script>
                    alert('Hospital has been Accepted');
                </script>";
    }else{
        echo "  <script>
                    alert('Something went's wrong');
                </script>";
    }
?>