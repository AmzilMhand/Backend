<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('post.store') }}" method="POST">
        @csrf

        <label for="title">Title</label>
        <input type="text" placeholder="Title" name="title" required>

        <label for="content">Content</label>
        <input placeholder="Content" name="content" required/>

        <label for="date">Date</label>
        <input type="date" placeholder="Date" name="date" required>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
