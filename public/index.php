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
                                                                                                                        <title>Document</title>
                                                                                                                    </head>

                                                                                                                    <body>
                                                                                                                        <?php include('./header.php') ?>
                                                                                                                        <div class="my-app">
                                                                                                                            <div class="vertical-center">
                                                                                                                                <div class="inner-block">
                                                                                                                                    <form method="post">
                                                                                                                                        <h3>Login</h3>
                                                                                                                                        <div class="form-group">
                                                                                                                                            <labe for="email_signin">Email:</labe>
                                                                                                                                            <input type="email" class="form-control" name="email_signin" id="email_signin" />
                                                                                                                                        </div>
                                                                                                                                        <div class="form-group">
                                                                                                                                            <label for="password_signin">Password:</label>
                                                                                                                                            <input type="password" class="form-control" name="password_signin" id="password_signin" />

                                                                                                                                        </div>
                                                                                                                                        <button class="btn btn-outline-primary btn-lg btn-block">Sign in</button>
                                                                                                                                    </form>
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                        <script>
                                                                                                                            let date = Date.now();
                                                                                                                            console.log(date);
                                                                                                                        </script>
                                                                                                                    </body>

                                                                                                                    </html>