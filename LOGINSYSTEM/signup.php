<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp</title>
    <script type="text/javascript">
    function preventback(){window.history.forward()};
    setTimeout("preventback()",0);
    window.onunload=function(){null;}
  </script>
</head>

<body>
    <div class="container my-4">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="PARTIALS/signup.gif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <div class="container my-4">
                            <h3 class="text-center">Signup 📝</h3>
                            <form action="PARTIALS/_signup.php" method="post">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="Username" name="Username" aria-describedby="emailHelp">

                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="Password" name="Password">
                                </div>
                                <div class="form-group">
                                    <label for="cpassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="Cpassword" name="Cpassword">
                                    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
                                </div>
                                <div class="form-group">
                                    <label for="DOB">Date of birth</label>
                                    <input type="date" class="form-control" id="Dob" name="Dob">
                                </div>
                                <button type="submit" class="btn btn-primary">SignUp</button>
                                <button type="button" class="btn btn-link"><a href="login.php">Login</a></button>

                            </form>
                        </div>
                    </div>
                    <div class='col-4'></div>

                </div>
            </div>


            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
            </form>
</body>

</html>