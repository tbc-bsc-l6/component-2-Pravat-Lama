<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col-md-9">
            <img class="h-100 w-100" src="/img/welcome.png">
        </div>
        <div class="col-md-3 pt-5 mt-5">
            <div class="card">
                <div class="card-header text-white text-center bg-primary">Welcome to our site</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="text-center mt-5 mb-5">
                        <a href="login" class="btn btn-primary btn-block">Login</a><br><br>
                        <a href="register" class="btn btn-secondary btn-block">Signup</a><br><br>
                        <a href="display" class="btn btn-info btn-block">Browse Products</a><br><br>
                        <!-- <a href="display" class="btn btn-info btn-block">display</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>