<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Update Task</title>
</head>
<body>
<div class="container">
        <div class="text-center">
            <h1>Update Task</h1>
            <div class="row">
                <div class="col1-md-12">
                    <form action="/updatetasks" method="post">
                        {{csrf_field()}}
                        <input type="text" class="form-control" value="{{$taskdata->task}}" name="task" placeholder="Enter Your Tasks">
                        <input type="hidden" name="id" value="{{$taskdata->id}}">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Update">
                            &nbsp;&nbsp;
                        <input type="button" class="btn btn-warning" value="CLEAR">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>