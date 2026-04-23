<!DOCTYPE html>
<html>
<head>
    <title>Student List</title>

    <!-- ✅ PLACE IT HERE -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

    <!-- TITLE -->
    <h1 class="text-dark text-center fw-bold my-3">STUDENT LIST</h1>
    
    <!-- BUTTONS -->
    <div class="mb-3">
        <a href="{{ route('students.create') }}" class="btn btn-success">+ Add Student</a>
        <a href="/about" class="btn btn-secondary">About Us</a>
    </div>

    <!-- SUCCESS MESSAGE -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- TABLE -->
    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Course</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->email }}</td>
            <td>
                
    <!-- VIEW -->
    <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">
    View
</a>

    <!-- EDIT -->
    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">
        Edit
    </a>

    <!-- DELETE -->
    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm">Delete</button>
    </form>

</td>

            </td>
        </tr>
        @endforeach
        </tbody>

    </table>

</div>

</body>
</html>