<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<body>
    <form action="{{ route('add-post') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="title">
        <input type="text" name="body" placeholder="body">
        <button type="submit">Add</button>
    </form>
</body>
</html>