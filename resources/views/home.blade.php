<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container mt-5">
        <div class="row">

            <div class="col">
                <h3>Add Student</h3>
                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Age</label>
                        <input type="number" name="age" class="form-control" id="exampleInputPassword1" placeholder="Enter Age">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                <br>

                @if(session()->has('status'))
                <div class="alert alert-info" role="alert">
                    {{session('status')}}
                </div>
                @endif
            </div>

            <div class="col">
                <h3>Student List:</h3>
                <br>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Age</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($students as $s)
                        <tr>
                            <td>{{$s->id}}</td>
                            <td>{{$s->name}}</td>
                            <td>{{$s->address}}</td>
                            <td>{{$s->age}}</td>
                            <td>
                                <a href="{{url('/edit',$s->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{url('/destroy',$s->id)}}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>

</body>

</html>