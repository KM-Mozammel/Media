<?php
session_start();

define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('FILE_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);

require_once(ROOT_PATH . 'src/Controller.php');
require_once(ROOT_PATH . 'src/DatabaseConnection.php');
require_once(ROOT_PATH . 'src/Template.php');

// Setting Database Connection;
DatabaseConnection::connect('localhost', "darwin_cms", "root", "");

$section = $_GET['section'] ?? $_POST['section'] ?? 'default';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';

// Routing
if ($section == "audio") {

    if ($action == "show") {
        // Get Data
        include ROOT_PATH . 'controller/audioController.php';
        $showAudio = new AudioController();
        $showAudio->runAction($action);
        die();

    } else if ($action == "add") {
        // Data Insert
        include ROOT_PATH . 'model/Audio.php';
        $addAudio = new Audio();
        $addAudio->addaudio();

    } else if($action == "update"){

        include ROOT_PATH . 'controller/audioController.php';
        $updateAudio = new AudioController();
        $updateAudio->runAction($action);

        die();
    } else if($action == "delete"){
        echo "<script>alert('Do you really want to delete?');</script>";
        include_once ROOT_PATH. 'controller/audioController.php';
        $deleteAudio = new AudioController();
        $deleteAudio->delete($_GET['id']);
        die();
    }

    include ROOT_PATH . 'controller/audioController.php';
    $audio = new AudioController();
    $audio->runAction($section);

} else if ($section == "video") {
    if ($action == "show") {
        // Get Data
        include ROOT_PATH . 'controller/videoController.php';
        $showAudio = new VideoController();
        $showAudio->runAction($action);
        die();

    }else if ($action == "add") {

        include ROOT_PATH . 'model/Video.php';
        $addVideo = new Video();
        $addVideo->addvideo();

    } else if($action == "update"){

        include ROOT_PATH . 'controller/videoController.php';
        $updateVideo = new VideoController();
        $updateVideo->runAction($action);

        die();
    } else if($action == "delete"){
        echo "<script>alert('Do you really want to delete?');</script>";
        include_once ROOT_PATH. 'controller/videoController.php';
        $deleteVideo = new VideoController();
        $deleteVideo->delete($_GET['id']);
        die();
    }

    include ROOT_PATH . 'controller/videoController.php';
    $video = new VideoController();
    $video->runAction($section);

} else if ($section == "blog") {
    if ($action == "show") {
        // Get Data
        include ROOT_PATH . 'controller/blogController.php';
        $showBlog = new BlogController();
        $showBlog->runAction($action);
        die();

    }else if ($action == "add") {
        include ROOT_PATH . 'model/Post.php';
        $addPost = new Post();
        $addPost->addpost();
    }  else if($action == "update"){

        include ROOT_PATH . 'controller/blogController.php';
        $updateBlog = new BlogController();
        $updateBlog->runAction($action);

        die();
    } else if($action == "delete"){
        echo "<script>alert('Do you really want to delete?');</script>";
        include_once ROOT_PATH. 'controller/blogController.php';
        $deletePost = new BlogController();
        $deletePost->delete($_GET['id']);
        die();
    } 
    
    include ROOT_PATH . 'controller/blogController.php';
    $blog = new BlogController();
    $blog->runAction($section);

} else {
    include ROOT_PATH . 'controller/dashboardController.php';
    $dashboard = new DashboardController();
    $dashboard->runAction($section);
}
