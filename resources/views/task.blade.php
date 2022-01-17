<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Task</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Daily Task</h1>
            <div class="row">
                <div class="col1-md-12">

                @foreach($errors->all() as $error)

                <div class="alert alert-danger" role="alert">
                    {{$error}}
                </div>

                @endforeach

                    <form action="/savetask" method="post">
                        {{csrf_field()}}
                        <input type="text" class="form-control" name="task" placeholder="Enter Your Tasks">
                        <br>
                        <input type="submit" class="btn btn-primary" value="SAVE">
                        <input type="button" class="btn btn-warning" value="CLEAR">
                    </form>
                    <br>
                    <br>
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>TASK</th>
                        <th>COMPLETED</th>
                        <td>Action</td>

                        @foreach($tasks as $task)
                        <tr>
                            <td>{{$task->id}}</td>
                            <td>{{$task->task}}</td>
                            <td>
                            @if($task->iscompleted==1)
                                <input type="button" class="btn btn-success" value="Completed">
                            @else
                                <input type="button" class="btn btn-warning" value="Not Completed">
                            @endif
                            </td>
                            <td>
                                @if(!$task->iscompleted)
                                    <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Mark As Completed</a>
                                @else
                                    <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-danger">Mark As Not Completed</a>
                                @endif    

                                <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
                                <a href="updatetask/{{$task->id}}" class="btn btn-success">Update</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>