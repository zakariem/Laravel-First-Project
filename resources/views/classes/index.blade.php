<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Classes</h1>
        <a href="{{ route('classes.create') }}" class="btn btn-primary mb-3">Add New Class</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Class Name</th>
                    <th>Class Fee</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classes as $class)
                <tr>
                    <td>{{ $class->id }}</td>
                    <td>{{ $class->class_name }}</td>
                    <td>${{ $class->class_fee }}</td>
                    <td>{{ $class->status }}</td>
                    <td>
                        <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('classes.destroy', $class->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
