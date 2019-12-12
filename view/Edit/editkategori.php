<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id_kategori = $_GET['id_kategori'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM kategori WHERE id_kategori=$id_kategori");

while($user_data = mysqli_fetch_array($result))
{
    $nama_kategori = $_POST['nama_kategori'];
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
                <td>Kategori</td>
                <td><input type="text" name="name" value=<?php echo $nama_kategori;?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id_kategori" value=<?php echo $_GET['id_kategori'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>