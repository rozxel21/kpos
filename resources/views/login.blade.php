<!DOCTYPE html>
<html lang="en-us">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/favicon.ico" />

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700italic,700,900,900italic" rel="stylesheet">

    <!-- STYLESHEETS -->
    <style type="text/css">
            [fuse-cloak],
            .fuse-cloak {
                display: none !important;
            }
        </style>
    
    <link rel="stylesheet" href="{{ mix('css/main.css') }}" />

</head>

<body>
    <main>
        <div class="content custom-scrollbar">
            <div id="login" class="p-8">
                <div class="form-wrapper md-elevation-8 p-8">

                    <div class="logo bg-secondary">
                        <span>K</span>
                    </div>

                    <div class="title mt-4 mb-8">Log in to your account</div>

                    <form name="loginForm" novalidate>

                        <div class="form-group mb-4">
                            <input type="text" class="form-control" id="loginFormInputEmail" aria-describedby="emailHelp" placeholder=" " />
                            <label for="loginFormInputEmail">Username</label>
                        </div>

                        <div class="form-group mb-4">
                            <input type="password" class="form-control" id="loginFormInputPassword" placeholder="Password" />
                            <label for="loginFormInputPassword">Password</label>
                        </div>

                        <button type="submit" class="btn btn-block btn-secondary my-5 mx-auto" aria-label="LOG IN">
                            LOG IN
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>