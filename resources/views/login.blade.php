<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <meta name="_token" content="{!! csrf_token() !!}"/>
        <title>KPOS | Login</title>
        
        <link rel="stylesheet" type="text/css" href="{{ mix('css/all.css') }}">

        <script type="text/javascript">
            window.onload = function()
            {
              // fix for windows 8
              if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
                document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
            }
            </script>
    </head>

    <body class="fixed-header ">
        <div class="register-container full-height sm-p-t-30">
            <div class="d-flex justify-content-center flex-column full-height ">
                <h3>Login</h3>
                <form id="form-login" class="p-t-15" role="form" action="{{ url('/login') }}">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="Enter Username" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group form-group-default">
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Minimum of 4 Charactors" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-cons m-t-10" type="submit">Create a new account</button>
                </form>
            </div>
        </div>
        
        <script type="text/javascript" src="{{ mix('js/all.js') }}" ></script>
        <script> $(function(){$('#form-login').validate()}); </script>
        <script type="text/javascript" src="kpos.js"></script>

    </body>

</html>