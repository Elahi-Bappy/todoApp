<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Todo</title>
</head>
<body>
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <h5>Todo App</h5>
                    <div class="row">
                        <form action="{{route('store')}}" method="POST">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="todo">
                                <button type="submit" class="btn btn-outline-success">Add</button>
                            </div>
                            @if (\Session::has('success'))
                                <div class="alert alert-success">
                                    <ul>
                                        <li>{!! \Session::get('success') !!}</li>
                                    </ul>
                                </div>
                            @endif
                        </form>
                    </div>
            </div>
        </div>
                <ul class="list-group">
                    @foreach($todolist as $todo)
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">{{$todo->todo}}</div>
                            <span class="badge  rounded-pill">
                                <a href="#" class="btn btn-info">Edit</a>
                                <a href="#" class="btn btn-outline-danger">Delete</a>
                            </span>
                        </li>
                    @endforeach
                </ul>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
