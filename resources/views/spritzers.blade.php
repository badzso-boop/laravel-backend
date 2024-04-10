<!-- resources/views/spritzers.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Spritzers</title>
</head>
<body>
    <h1>Spritzers</h1>
    <ul>
        @foreach ($spritzers as $spritzer)
            <li>{{ $spritzer->name }}</li>
        @endforeach
    </ul>
</body>
</html>
