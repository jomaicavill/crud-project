<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
        }

        .card {
            border-radius: 15px;
        }

        .card-header {
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container mt-5">

    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            Student Details
        </div>

        <div class="card-body">

            <div class="mb-3">
                <label class="fw-bold">Name</label>
                <p class="form-control">{{ $student->name }}</p>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Course</label>
                <p class="form-control">{{ $student->course }}</p>
            </div>

            <div class="mb-3">
                <label class="fw-bold">Email</label>
                <p class="form-control">{{ $student->email }}</p>
            </div>

            <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>

        </div>
    </div>

</div>

</body>
</html>