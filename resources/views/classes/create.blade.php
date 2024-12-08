<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Class</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Create New Class</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('classes.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="class_name" class="form-label">Class Name</label>
                                <input type="text" name="class_name" id="class_name" class="form-control" placeholder="Enter class name" required>
                            </div>
                            <div class="mb-3">
                                <label for="class_fee" class="form-label">Class Fee</label>
                                <input type="number" step="0.01" name="class_fee" id="class_fee" class="form-control" placeholder="Enter class fee" required>
                            </div>
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-control" required>
                                    <option value="Active">Active</option>
                                    <option value="Deactive">Deactive</option>
                                    <option value="Graduated">Graduated</option>
                                </select>
                            </div>
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('classes.index') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary">Save Class</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
