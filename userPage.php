<?php
  session_start();
  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true ){
    header("location:login.php");
    exit;
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome <?php echo  $_SESSION['username']  ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
  </head>
  <body data-bs-theme="dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Quiz</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Quiz Type
                        </a>
                        <ul class="dropdown-menu active">
                            <li><a class="dropdown-item" href="#">MCQs</a></li>
                            <li><a class="dropdown-item" href="#">Fill in the blanks</a></li>
                            <li><a class="dropdown-item" href="#">Puzzle Quiz</a></li>
                            <li><a class="dropdown-item" href="#">IQ Tests</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  disabled" aria-current="page" href="#help">Help/FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page" href="#feedback">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-current="page" href="#about">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <section class="text-white-600 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
              <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white-900">Wants to initiate your Quiz...??</h1>
                <div class="flex w-full md:justify-start justify-center items-end">
                  <div class="relative mr-4 md:w-full lg:w-full xl:w-1/2 w-2/4">
                    <input type="text" id="hero-field" name="hero-field" placeholder="Enter code here" class="w-full bg-white-100 rounded border bg-opacity-50 border-white-300 focus:ring-2 focus:ring-indigo-200 focus:bg-transparent focus:border-indigo-500 text-base outline-none text-white-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                  <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Start</button>
                </div>
                
              </div>
              <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                <img class="object-cover object-center rounded" alt="hero" src="requiz.png">
              </div>
            </div>
          </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>