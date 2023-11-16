 <?php
 echo "Coming soon";
  // Check if data is received through POST
  if (isset($_POST['dataToSend']) ) {
    $receivedData = $_POST['dataToSend'];
    echo "<p>Received Data: $receivedData</p>";
  } else {
    echo "<p>No data received.</p>";
  }
?> 