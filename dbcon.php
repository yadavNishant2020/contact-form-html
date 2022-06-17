<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "test";

$con = mysqli_connect($server, $user, $password, $db);
if($con){
    ?>
<script>
    alert("Connection sucess");
</script>

    <?php
}else{
    ?>
    <script>
        alert("Connection Failed");
    </script>
    
        <?php
}
?>