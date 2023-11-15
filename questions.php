<!-- INSERT INTO `questions` (`number`, `question`, `option1`, `option2`, `option3`, `option4`)
 VALUES ('2', 'how many baals are here?', 'one', 'two ', 'three', 'four'); -->

<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="questions";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
      die("Sorry we are failed to connect".mysqli_connect_error());
    }
?> 
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Questions-Upload</title>
  <link rel="stylesheet" href="questions.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body data-bs-theme="dark">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Quiz</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Menu
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">MCQs</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <br> <br>
  <div class="container">
    <div>
      <h1 class="heading">Wants to upload questions...?</h1>
    </div> <br> <br>
    <div>
      <h3>You can upload your questions here ... !! </h3> <br>
    </div>

    <form action="questions.php" method="post" id="mcqForm">
      <div>
        <input type="text" class="form-control" id="question" placeholder="Enter Question" name="mcq">
      </div>
      <div><br>
        <div class="col-sm-2" id="optionsContainer" ></div>
      </div>
      <button type="button" onclick="addOption()" class="btn btn-secondary">Add Option</button>
      <button type="button" onclick="addMCQ()"    class="btn btn-secondary">Add MCQs</button>
    </form>
    <div id="mcqDisplay"></div>
  </div>

  <?php
  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //     // Get the question and options from the POST data
  //     $question = $_POST["question"];
  //     $options = $_POST["options"];
  
  //     // Create an associative array to represent the MCQ
  //     $mcq = [
  //         "question" => $question,
  //         "options" => $options
  //     ];
  
  //     // Load existing MCQs from a file (you may want to use a database instead)
  //     $mcqs = json_decode(file_get_contents("mcqs.json"), true) ?? [];
  
  //     // Add the new MCQ to the array
  //     $mcqs[] = $mcq;
  
  //     // Save the updated MCQs array back to the file
  //     file_put_contents("mcqs.json", json_encode($mcqs));
  
  //     // Redirect back to the form page or any other desired page
  //     header("Location: mcq_form.php");
  //     exit();
  // }
  ?>
  
  </div>

  <script src="questions.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>