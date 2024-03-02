<?php

class Post
{
    public $data;

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
    public function showpost(){

        $dbh = Databaseconnection::getInstance();
        $dbc = $dbh->getConnection();

        $sql = "SELECT * FROM blog";
        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        $PageData = $stmt->fetchAll();

        $this->data = $PageData;

    }
    public function findById($id){

        $dbh = Databaseconnection::getInstance();
        $dbc = $dbh->getConnection();

        $sql = "SELECT * FROM blog WHERE id = $id";
        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        $PageData = $stmt->fetchAll();

        $this->data = $PageData;

    }

    public function updatePost($id)
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

        $sql = "UPDATE `blog` SET `title`='$title',`content`='$content',`image`='$location',`author`='$author',`date`='$date',`categories`='$categories' WHERE `id` = '$id'";


        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        echo "<script>alert('Data Updated Successfull.');</script>";
        header("location: index.php?section=blog&action=show");
    }
    public function delete($id){
        $dbh = Databaseconnection::getInstance();
        $dbc = $dbh->getConnection();

        $sql = "DELETE FROM `blog` WHERE `id` = $id";
        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        header("location: index.php?section=blog&action=show");

    }
}
