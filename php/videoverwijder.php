<?php
session_start();
require('database.php');

if (isset($_POST['verwijder'])) 
{
  $video = $_POST['VideoID'];
  
  if (filter_var($video, FILTER_VALIDATE_INT)) 
  {
    $query = "DELETE FROM `video` WHERE Video_ID = ". $video;
    
    $result = mysqli_query($conn, $query);
    
    if ($result) 
    {
      header('location: ../index.php');
      exit;
    } else
    {
        header('location: ../index.php');
        exit;
    }
  }
}
?>