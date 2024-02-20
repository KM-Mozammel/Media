<?php
class addVideo
{
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
}