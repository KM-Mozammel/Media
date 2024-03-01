<?php
class Audio
{   
    public $data;
    public function addaudio()
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

        $directory = "../resorces/audios/";
        $target_file = $directory . basename($_FILES["audio"]["name"]);
        move_uploaded_file($_FILES["audio"]["tmp_name"], $target_file);
        $location = substr($target_file, 3);

        $sql = "INSERT INTO `audio`(`id`, `Title`, `mp3`, `Artist`, `Album`, `Release`, `Band`, `Genre`, `Rating`, `Comment`) VALUES ('','$title','$location','$artist','$album','$release','$band','$genre','$rating','$comment')";

        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        echo "<script>alert('Data Inserted Successfull.');</script>";
    }

    public function showaudio(){

        $dbh = Databaseconnection::getInstance();
        $dbc = $dbh->getConnection();

        $sql = "SELECT * FROM audio";
        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        $PageData = $stmt->fetchAll();

        $this->data = $PageData;

    }
    public function findById($id){

        $dbh = Databaseconnection::getInstance();
        $dbc = $dbh->getConnection();

        $sql = "SELECT * FROM audio WHERE id = $id";
        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        $PageData = $stmt->fetchAll();

        $this->data = $PageData;

    }

    public function updateaudio($id)
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

        $directory = "../resorces/audios/";
        $target_file = $directory . basename($_FILES["audio"]["name"]);
        move_uploaded_file($_FILES["audio"]["tmp_name"], $target_file);
        $location = substr($target_file, 3);

        $sql = "UPDATE `audio` SET `Title`='$title',`mp3`='$location',`Artist`='$artist',`Album`='$album',`Release`='$release',`Band`='$band',`Genre`='$genre',`Rating`='$rating',`Comment`='$comment' WHERE `id` =  '$id'";
        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        echo "<script>alert('Data Updated Successfull.');</script>";
        header("location: http://localhost/media/admin/index.php?section=audio&action=show");
    }
    public function delete($id){
        $dbh = Databaseconnection::getInstance();
        $dbc = $dbh->getConnection();

        $sql = "DELETE FROM `audio` WHERE `id` = $id";
        $stmt = $dbc->prepare($sql);
        $stmt->execute();
        header("location: http://localhost/media/admin/index.php?section=audio&action=show");

    }
    
}
