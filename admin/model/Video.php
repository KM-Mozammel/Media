<?php
class Video
{
    public $data;
    public function addvideo()
    {
        $dbh = Databaseconnection::getInstance();
        $dbc = $dbh->getConnection();

        $title = $_POST['title'];
        $artist = $_POST['artist'];
        $album = $_POST['album'];
        $release = $_POST['release'];
        $band = $_POST['band'];
        $genre = $_POST['genra'];
        $rating = $_POST['rating'];
        $comment = $_POST['comment'];

        $directory = "../resorces/videos/";
        $target_file = $directory . basename($_FILES["video"]["name"]);
        move_uploaded_file($_FILES["video"]["tmp_name"], $target_file);
        $location = substr($target_file, 3);

        $sql = "INSERT INTO `videos`(`id`, `title`, `mp4`, `artist`, `album`, `release`, `band`, `genre`, `rating`, `Comment`) VALUES ('','$title','$location','$artist','$album','$release','$band','$genre','$rating','$comment')";

        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        echo "<script>alert('Data Inserted Successfull.');</script>";
    }
    public function showvideo(){

        $dbh = Databaseconnection::getInstance();
        $dbc = $dbh->getConnection();

        $sql = "SELECT * FROM videos";
        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        $PageData = $stmt->fetchAll();

        $this->data = $PageData;

    }
    public function findById($id){

        $dbh = Databaseconnection::getInstance();
        $dbc = $dbh->getConnection();

        $sql = "SELECT * FROM videos WHERE id = $id";
        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        $PageData = $stmt->fetchAll();

        $this->data = $PageData;

    }
    public function updateVideo($id)
    {
        $dbh = Databaseconnection::getInstance();
        $dbc = $dbh->getConnection();

        $title = $_POST['title'];
        $artist = $_POST['artist'];
        $album = $_POST['album'];
        $release = $_POST['release'];
        $band = $_POST['band'];
        $genre = $_POST['genra'];
        $rating = $_POST['rating'];
        $comment = $_POST['comment'];

        $directory = "../resorces/videos/";
        $target_file = $directory . basename($_FILES["video"]["name"]);
        move_uploaded_file($_FILES["video"]["tmp_name"], $target_file);
        $location = substr($target_file, 3);

        $sql = "UPDATE `videos` SET `title`='$title',`mp4`='$location',`artist`='$artist',`album`='$album',`release`='$album',`band`='$band',`genre`='$genre',`rating`='$rating',`comment`='$comment' WHERE `id` = '$id'";

        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        echo "<script>alert('Data Updated Successfull.');</script>";
        header("location: index.php?section=video&action=show");
    }
    public function delete($id){
        $dbh = Databaseconnection::getInstance();
        $dbc = $dbh->getConnection();

        $sql = "DELETE FROM `videos` WHERE `id` = $id";
        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        header("location: index.php?section=video&action=show");

    }
}