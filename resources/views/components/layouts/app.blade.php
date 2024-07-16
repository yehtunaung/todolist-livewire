<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    @livewireStyles
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <nav class="navbar navbar-light bg-light justify-content-between">
                        <div class="d-flex">
                            <a class="navbar-brand ">
                                <h3>LiveWire</h3>
                            </a>
                            <ul class="navbar-nav d-flex flex-row">
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="{{ route('todo-list') }}">TodoLists</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="{{ route('counter')}}">Counter</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link" href="#">Pricing</a>
                                </li>
                            </ul>
                        </div>
                        <form class="form-inline">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        </form>
                    </nav>
                </center>
            </div>
        </div>
        
        <div>
            {{ $slot }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts
</body>

</html>
