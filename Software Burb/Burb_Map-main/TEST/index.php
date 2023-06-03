<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration System PDO</title>
</head>
<body>

    <form action="signup_db.php" method="post">
        <div class="mb-3">
            <label for="firstname" class="form-label">First name</label>
            <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" aria-describedby="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password"
        </div>
        <div class="mb-3">
            <label for="confirm password" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" name="c_password"
        </div>
        
        <button type="submit" name="signup" class="btn btn-primary">Sign up</button>
    </form>
 
</body>
</html>