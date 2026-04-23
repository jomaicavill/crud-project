<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="bg-light">

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-sm border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Add Student</h4>
                </div>

                <div class="card-body">

                    <form method="POST" action="<?php echo e(route('students.store')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Course</label>
                            <input type="text" name="course" class="form-control" placeholder="Enter course" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success">
                                Save Student
                            </button>

                            <a href="<?php echo e(route('students.index')); ?>" class="btn btn-secondary">
                                Back
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\student-crud\resources\views/students/create.blade.php ENDPATH**/ ?>