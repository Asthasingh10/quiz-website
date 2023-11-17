<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions--UserPage</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
</head>
<body>
    <?php
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "registration-quiz";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check the connection
    if (!$conn) {
        die("Connection failed: ");
    }
    // Query to retrieve questions
    $sql="SELECT * FROM `fillblanks`";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
        if($num>0){
            while($row=mysqli_fetch_assoc($result)){
                echo ' <section class="text-gray-600 body-font overflow-hidden">
                <div class="container px-5 py-2 mx-auto">
                    <div class="-my-8 divide-y-2 divide-gray-100">
                        <div class="py-8 flex flex-wrap md:flex-nowrap">
                            <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
                                <span class="font-semibold title-font text-gray-700">QUESTION</span>
                            </div>
                            <div class="md:flex-grow">
                                <h2 class="text-2xl font-medium text-gray-900 title-font mb-2"><p> '. $row["fillQuestion"]. '</p>
                                </h2>
                                <div class="relative mb-4">
                                <label for="message" class="leading-7 text-sm text-gray-600">Type Your Answer here</label>
                                <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                              </div> 
                            </div>
                        </div>          
                    </div>
                </div>
            </section>';
        }
    } else {
        echo "0 results";
    }
    ?>
</body>
</html>