<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_cust = $_POST['id_cust'];

    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE customer SET nama_belakang='$nama_depan' , nama_belakang='$nama_belakang' , 
                            nohp='$nohp' , alamat='$alamat' WHERE id_cust=$id_cust");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_cust = $_GET['id_cust'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM customer WHERE id_cust=$id_cust");

while($user_data = mysqli_fetch_array($result))
{
    $nama_depan = $_POST['nama_depan'];
    $nama_belakang = $_POST['nama_belakang'];
    $nohp = $_POST['nohp'];
    $alamat = $_POST['alamat'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama Depan</td>
                <td><input type="text" name="name" value=<?php echo $nama_depan;?>></td>
            </tr>

            <tr> 
                <td>Nama Belakang</td>
                <td><input type="text" name="email" value=<?php echo $nama_belakang;?>></td>
            </tr>

            <tr> 
                <td>No Telepon</td>
                <td><input type="text" name="mobile" value=<?php echo $nohp;?>></td>
            </tr>

            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="mobile" value=<?php echo $alamat;?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id_cust" value=<?php echo $_GET['id_cust'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>