<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="subpageali.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<nav>
    <ul>
    <li><a href="index.html">home</a></li>
    <li><a href="subpageali.php">login</a></li>
  </ul>
</nav>
<form action="action_page.php" method="POST">
  <label for="username">Username:</label>
  <input type="text" id="username" value="Ali" name="username"><br><br>
  <label for="password">Password:</label>
  <input type="password" id="password" value="Abo Rashed" name="password"><br><br>
  <input type="submit" value="Submit">
</form>
</body>
</html>