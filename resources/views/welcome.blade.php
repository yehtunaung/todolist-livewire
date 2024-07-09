<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <nav class="navbar navbar-light bg-light justify-content-between">
                        <a class="navbar-brand mx-4"><h3>Today List</h3></a>
                        <form class="form-inline mx-4">
                            <input class="form-control mr-sm-2 " type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </nav>
                </center>
            </div>
        </div>
            @livewire('today-list')
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
