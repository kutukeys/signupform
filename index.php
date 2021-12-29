<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Login and Registration</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel = "stylesheet" type= "text/css" href ="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="login-box">
                <div class= "row" >
                    <div class="col-md-6 login-left" >
                        <h2>Login Here</h2>
                        <form action="validation.php" method="post">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    
                    <div class="col-md-6 login-right" >
                        <h2>Register Here</h2>
                        <form action="Registration.php" method="post">
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="text" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </body>

</html>