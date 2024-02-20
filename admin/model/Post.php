<?php

class addPost
{
    public function addpost()
    {
        $dbh = DatabaseConnection::getinstance();
        $dbc = $dbh->getConnection();

        $title = $_POST['title'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        $date = $_POST['date'];
        $categories = $_POST['categories'];

        $directory = "../resorces/images/";
        $target_file = $directory . basename($_FILES["image"]["name"]);
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $location = substr($target_file, 3);

        $sql = "INSERT INTO `blog`(`id`, `title`, `content`, `image`, `author`, `date`, `categories`) VALUES ('','$title','$content','$location','$author','$date','$categories')";


        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        echo "<script>alert('Data Inserted Successfull.');</script>";
    }
}
