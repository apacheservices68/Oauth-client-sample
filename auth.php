<?php
/**
 * Created by PhpStorm.
 * User: Vinh Banh <apacheservices68@gmail.com>
 * Version: 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="root">
    <title>Page Title</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">

    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1>Body</h1>

            <form action="" method="post" role="form">
                <legend>Form Title</legend>

                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Access Token</label>
                    <div class="col-sm-10">
                        <label for="access_token"></label>
                        <input type="text" class="form-control" name="access_token" id="access_token" placeholder="Input...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Token Type</label>
                    <div class="col-sm-10">
                        <label for="token_type"></label>
                        <input type="text" class="form-control" name="token_type" id="token_type" placeholder="Input...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-sm-2 control-label">Expires In</label>
                    <div class="col-sm-10">
                        <label for="expires_in"></label>
                        <input type="text" class="form-control" name="expires_in" id="expires_in" placeholder="Input...">
                    </div>
                </div>


                <button type="button" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<script type="text/javascript">
    function getAccessToken() {
        var queryString = window.location.hash.substr(1);
        var queries = queryString.split("&");
        var params = {}
        for (var i = 0; i < queries.length; i++) {
            pair = queries[i].split('=');
            params[pair[0]] = pair[1];
        }

        return params;
    };
    var token = getAccessToken();
    console.log(token);
    document.getElementById('access_token').value = token.access_token;
    document.getElementById('token_type').value = token.token_type;
    document.getElementById('expires_in').value = token.expires_in;
</script>
