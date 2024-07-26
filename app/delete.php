<?php 
include("db_con.php");
if(isset($_REQUEST['id'])){
$sql = "SELECT * FROM memberreg WHERE id='$_REQUEST[id]' ";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);

?>
<?php 
$sql = "DELETE FROM memberreg WHERE id=$_REQUEST[id]";
if(mysqli_query($conn, $sql)){
    echo "<script>alert('Member Record successfully DELETED!')
    location.href='view.php'</script>";
}
else{
    echo "error deleting record: ". mysqli_error($conn);
}
// mysqli_close($con);
}
?>