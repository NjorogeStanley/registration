<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <!-- <h1>Hello, ?php echo $_SESSION['name']; ?></h1> -->
          <h2> WELCOME</h2>
     <a href="logout.php">Logout</a>

     <h2>Enter User Details</h2>
     <form action="process_form.php" method="post">
         <label for="username">Username:</label>
         <input type="text" id="username" name="username" required><br>

         <label for="phonenumber">Phone Number:</label>
         <input type="tel" id="phonenumber" name="phonenumber" required><br>

         <label for="idnumber">ID Number:</label>
         <input type="text" id="idnumber" name="idnumber" required><br>

          <label for="purpose" id="purpose-label" >Purpose:</label>
          <select id="purpose-dropdown"  name="purpose" required>
          <option value="" >Select Purpose</option>
          <option value="research">Research</option>
          <option value="study">Study</option>
          </select><br>

         <label for="timein" id="time-in">Time In:</label>
         <input type="datetime-local" id="timein" name="timein" required><br>

         <label for="timeout">Time Out:</label>
         <input type="datetime-local" id="timeout" name="timeout" required><br>

         <input type="submit" value="Submit">
     </form>
</body>
</html>

<?php 
} else {
     header("Location: index.php");
     exit();
}
?>
