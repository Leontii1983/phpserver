<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <title>Sign up</title>
</head>

<body>
    <?php include('./header.php') ?>
    <div class="my-app">
        <div class="vertical-center">
            <div class="inner-block">
                <form id="form-cuser" method="post">
                    <h3>Register</h3>
                    <div class="form-group">
                        <label for="firstName">First name:</label>
                        <input class="form-control" type="text" name="firstname" id="firstName" />
                    </div>

                    <div class="form-group">
                        <label for="lastName">Last name:</label>
                        <input class="form-control" type="text" name="lastname" id="lastName" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" type="text" name="email" id="email" />
                    </div>

                    <div class="form-group">
                        <label for="mobilenumber">Mobile:</label>
                        <input class="form-control" type="text" name="mobilenumber" id="mobilenumber" />
                    </div>

                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" class="form-control" name="password" id="password" />
                    </div>

                    <button type="submit" class="btn btn-outline-primary btn-lg btn-block">Sign up</button>
                </form>
            </div>
        </div>


        <script src="scripts/create_user.js"></script>
</body>

</html>