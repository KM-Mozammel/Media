<?php
class addAudio
{
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
}
