<!DOCTYPE html>
<html>
<head>
    <title>Edit Student Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>Edit Student Info</h2>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $student->name }}">
        </div>

        <div class="mb-3">
            <label>Course</label>
            <input type="text" name="course" class="form-control" value="{{ $student->course }}">
        </div>

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $student->email }}">
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>

    </form>

</div>

</body>
</html>