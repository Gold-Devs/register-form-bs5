<?php

include_once 'connect.php';
/* if (isset($_POST['submit'])) {
  $username = $_POST['username'];

  $email = $_POST['email'];

  $password = $_POST['password'];
  if (!empty($username) && !empty($email) && !empty($password)) {
    $sql2->mysqli_query("select * from users");
    while ($row = mysqli_fetch_array($sql)) {
      $user = $row['username'];
      $eml = $row['email'];
      if ($user != $username && $eml != $email) {
        $sql->mysqli_query("insert into users (id,username,email,password) values('$username','$email','$password') ");
      }
    }
  } else {
    echo "All fields required";
  }
} */
?>
<!-- <html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head> -->
<?php 
require 'includes/vars.php';

echo $rghd
?>
<body>
  <form action="register.php" method="post">
    <p>Username:<input type="text" name="username"></p><br>

    <p>Email:<input type="text" name="email"></p><br>

    <p>Password:<input type="text" name="password"></p><br>
    <div class=""><p><input type="submit" name="submit"></p></div>
  </form>
</body>

</html>