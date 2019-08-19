<?php 
  // Headers
  header('Access-Control-Allow-Origin: ../../showPosts.php');
  header('Content-Type: application/json');
  header('Access-Control-Allow-Methods: POST');
  header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');

  include_once '../../config/Database.php';
  include_once '../../models/Post.php';

  // Instantiate DB & connect
  $database = new Database();
  $db = $database->connect();

  // Instantiate blog post object
  $post = new Post($db);

  // Get raw posted data
  // $data = json_decode(file_get_contents("php://input"));

  if ($_SERVER['REQUEST_METHOD']=="POST") {
      $title = $_POST['title'];
      $body = $_POST['body'];
      $author = $_POST['author'];
      $category_id = $_POST['category_id'];
  }

  // $post->title = $data->title;
  // $post->body = $data->body;
  // $post->author = $data->author;
  // $post->category_id = $data->category_id;

  $post->title =$title;
  $post->body =$body;
  $post->author =$author;
  $post->category_id =$category_id;

  // Create post
  if($post->create()) {
    echo json_encode(
      array('message' => 'Post Created')
    );
  } else {
    echo json_encode(
      array('message' => 'Post Not Created')
    );
  }

