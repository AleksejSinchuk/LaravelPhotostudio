<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Admin</title>
</head>
<body>
<form method="post" action="/admin">
    {{csrf_field()}}
    <div class="container " style="margin-top: 50px">
        <div class="form-group ">
            <input type="text" class="form-control"  placeholder="Enter login" name="login">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
</body>
</html>



