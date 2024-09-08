<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input {
            color: #120028;
            font-size: 2vh;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        label {
            color: #7300ff;
            font-size: 2vh;
            font-family: 'Times New Roman', Times, serif;
        }
        .btn{
            background: transparent;
            height: 5vh;
            width: 15vh;
            color: aliceblue;
        }
        .btn:hover{
            cursor: pointer;
            background-color: black;
        }
    </style>
</head>

<body>
    <form action="MH6.php" method="post" enctype="multipart/form-data">
        <input type="file" name="File_upload" id="file"><br><br>
        <input type="submit" name="submit" value="upload" class="btn"><br><br>
    </form>
    <table border="2" cellspacing="8" cellpadding="5"><tr>
    <?php
    if (isset($_POST['submit'])) {
        echo "<th>Type </th><td>". $_FILES['File_upload']['type']. "</td><tr>";
        echo "<th>Size</th><td> ". $_FILES['File_upload']['size']." Byte </td>";
    }
    ?>
    </table>
</body>

</html>

 <!-- // $target_dir = "./Practical_3";
        // $target_file = $target_dir . basename($_FILES["File_upload"]["name"]);
        // $upload = 1;
        // $img_fileType = pathinfo($target_file, PATHINFO_EXTENSION);
        // $check = getimagesize($_FILES['File_upload']['tmp_name']);
        // if ($check !== false) {
        //     echo "File is an image";
        // }
        // $file = $_FILES['File_upload']['tmp_name'];
        // if (is_uploaded_file($file)) {
        //     echo "Succesfully uploaded";
        // }
        // else
        // {
        //     echo 1;
        // } -->