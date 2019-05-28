<!-- About controllers @ 29:29 -->
<!-- Model-view-controller. Controller does business logic: performs calculations, passes data, etc. -->
<?php require_once "controllers/authController.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="styles/bootstrap.min.css">

    <!-- Project's CSS -->
    <!-- link:css -->
    <link rel="stylesheet" href="styles/style.css">

    <title>Sign Up</title>
</head>

<body>
    <!-- div.container>div.row>div.col-md-4.offset-md-4 -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form-div">
                <!-- form:post[action=signup.php] -->
                <form action="signup.php" method="post">
                    <h3 class="text-center">Sign Up</h3>

                    <?php if (count($errors) > 0) : ?>
                        <div class="alert alert-danger">
                            <?php foreach ($errors as $error) : ?>
                                <li><?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <!-- input[name=username].form-control.form-control-lg -->
                        <input type="text" name="username" value="<?php echo $username; ?>" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <label for="passwordConf">Confirm Password</label>
                        <input type="password" name="passwordConf" class="form-control form-control-lg">
                    </div>
                    <div class="form-group">
                        <!-- button:submit[name=signup-btn].btn.btn-primary.btn-block.btn-lg -->
                        <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                    </div>
                    <p class="text-center">Already a member? <a href="login.php">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>