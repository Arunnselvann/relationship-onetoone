<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneToOne Relation </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <br>
    <br>
    <h2 style="text-align:center;">User table</h2>
    <br>
    <table class="table table-bordered">
         <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Pone Number</td>
        </tr> 
        @if(isset($requestedPhone))
        @foreach($requestedPhone as $req)
        <tr>
            <td>{{$req->id}}</td>
            <td>{{$req->user_name}}</td>
            <td>{{$req->phone->phone}}</td>
        </tr> 
        @endforeach
        @endif

        @if(isset($requestedMember))
        @foreach($requestedMember as $req)
        <tr>
            <td>{{$req->id}}</td>
            <td>{{$req->phone}}</td>
            <td>{{$req->user->user_name}}</td>
        </tr> 
        @endforeach
        @endif
    </table>
   
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>