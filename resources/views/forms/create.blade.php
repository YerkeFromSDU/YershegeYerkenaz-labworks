<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <style>
        .f {
            display: flex;
            padding: 20px;
            justify-content: space-around;
        }
    </style>
</head>
<body>

@if ($errors->any())
   <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
     @endforeach
     </ul>
   </div>
@endif

<div>

<form action="{{ route('forms.store') }}" class = "f" method="post" enctype="multipart/form-data">
        
        @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>
    <div class="form-group">
        <label>Surname</label>
        <input type="text" class="form-control" name="surname" required>
    </div>
    <div class="form-group">
        <input type="file" name="file" required>
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" required>
    </div>
    <button type="submit">Submit</button>
</form>

</div>
</body>
</html>