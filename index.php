<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="process.php" style="max-width:200px; display:flex; flex-direction:column;" method="post">
    <label>Username</label>
    <input name="username" />
    
    <label>Password</label>
    <input name="pass" />

    <label>First Name</label>
    <input name="firstname" />

    <label>Middle Name</label>
    <input name="middlename" />

    <label>Last Name</label>
    <input name="lastname" />

    <label>Role</label>
    <input name="role" />

    <input type="submit" name="signup" />
  </form>
</body>
</html>