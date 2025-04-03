<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Welcome to Our Application</h1>
        <a href="{{ route('users.index') }}" class="btn btn-primary">
            View All Users
        </a>
    </div>
</body>
</html>