<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= base_url('assets/assets/img/logo_bank.png') ?>">

    <title>Login Page | Bankunin</title>

    <link rel="canonical" href="<?= base_url('assets/docs/4.0/examples/sign-in') ?>">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/dist/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <div class="row mt-5">
        <div class="col-md-6 ml-5 mt-5">
            <div class="col-md-6 ml-5">
                <h1 class="text-left">Login Page</h1>
                <h3 class="text-left">Internet Banking Bankunin</h3>
                <p class="text-left">If you don't have an account register <br> You can <a href="">Register here !</a></p>
                <img src="<?= base_url('assets/assets/img/login.jpg') ?>" alt="" width="600" height="380">
            </div>

        </div>
        <div class="col-md-4 mt-5">

            <form class="form-signin">
                <h1 class="mb-3 text-left ">Login</h1>

                <div class="mt-3 mb-2">
                    <label for="inputEmail" class="sr-only">Username</label>
                    <input type="text" id="inputEmail" class="form-control " placeholder="Username" required autofocus>
                </div>

                <div class="mt-4 mb-2">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control " placeholder="Password" required>
                </div>

                <div class="mt-4 mb-2">
                    <a href="" class="text-dark">
                        <h5 class="text-right">Forgot password?</h5>
                    </a>
                </div>

                <div class="mt-4">
                    <a class="btn btn-lg btn-warning btn-block text-light">Login</a>
                </div>

                <div class="checkbox mb-3 mt-3">
                    <label>
                        <input type="checkbox" value="Enable virtual keyboard"> Enable virtual keyboard
                    </label>
                </div>

                <p class="mt-5 mb-3 text-muted">&copy; 2025 VBankunin</p>
            </form>

        </div>
    </div>

</body>

</html>