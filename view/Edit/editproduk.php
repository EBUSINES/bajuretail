<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id_produk = $_POST['id_produk'];

    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $size_produk = $_POST['size_produk'];
    $warna_produk = $_POST['warna_produk'];
    // $gambar_product = $_POST['gambar_product'];
    $jumlah_produk = $_POST['jumlah_produk'];
    $harga = $_POST['harga'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE produk SET nama_produk='$nama_produk',deskripsi='$deskripsi', $size_produk='$size_produk'
                         ,warna_produk='$warna_produk', jumlah_produk='$jumlah_produk',  harga=' $harga' WHERE id_kategori=$id_kategori");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM produk WHERE id_kategori=$id_kategori");
while($user_data = mysqli_fetch_array($result))
{
    $nama_produk = $_POST['nama_produk'];
    $deskripsi = $_POST['deskripsi'];
    $size_produk = $_POST['size_produk'];
    $warna_produk = $_POST['warna_produk'];
    // $gambar_product = $_POST['gambar_product'];
    $jumlah_produk = $_POST['jumlah_produk'];
    $harga = $_POST['harga'];
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
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk" value=<?php echo $nama_produk;?>></td>
            </tr>

            <tr> 
                <td>Description</td>
                <td><input type="text" name="deskripsi" value=<?php echo $deskripsi;?>></td>
            </tr>

            <tr> 
                <td>Ukuran</td>
                <td><input type="text" name="size_produk" value=<?php echo $size_produk;?>></td>
            </tr>

            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
            </tr>

            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
            </tr>

            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
            </tr>

            <tr> 
                <td>Mobile</td>
                <td><input type="text" name="mobile" value=<?php echo $mobile;?>></td>
            </tr>

            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>