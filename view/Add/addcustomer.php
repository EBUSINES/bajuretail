<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama Depan/td>
                <td><input type="text" name="nama_depan"></td>
            </tr>

            <tr> 
                <td>Nama Belakang</td>
                <td><input type="text" name="nama_belakang"></td>
            </tr>

            <tr> 
                <td>No HP</td>
                <td><input type="text" name="nohp"></td>
            </tr>

            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>

            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama_depan = $_POST['nama_depan'];
        $nama_belakang = $_POST['nama_belakang'];
        $nohp = $_POST['nohp'];
        $alamat = $_POST['alamat'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO customer(nama_depan , nama_belakang , nohp , alamat) VALUES('$nama_depan' , '$nama_belakang' , '$nohp' , '$alamat')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>