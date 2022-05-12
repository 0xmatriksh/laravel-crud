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
        <form method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col">
                    <h3>Add Student</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input value={{$student->name}} type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input value={{$student->address}} type="text" name="address" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Age</label>
                        <input value={{$student->age}} type="number" name="age" class="form-control" id="exampleInputPassword1" placeholder="Enter Age">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
        </form>
    </div>

</body>

</html>