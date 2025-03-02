<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <h3 class="mt-3">Laravel Authentication</h3>
                <div class="d-flex gap-3">
                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                    <a href="{{ route('login') }}" class="btn btn-primary">login</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
