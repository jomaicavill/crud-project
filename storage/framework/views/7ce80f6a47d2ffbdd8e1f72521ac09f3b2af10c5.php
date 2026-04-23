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
        <a href="<?php echo e(route('students.create')); ?>" class="btn btn-success">+ Add Student</a>
        <a href="/about" class="btn btn-secondary">About Us</a>
    </div>

    <!-- SUCCESS MESSAGE -->
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

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
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($loop->iteration); ?></td>
            <td><?php echo e($student->name); ?></td>
            <td><?php echo e($student->course); ?></td>
            <td><?php echo e($student->email); ?></td>
            <td>
                
    <!-- VIEW -->
    <a href="<?php echo e(route('students.show', $student->id)); ?>" class="btn btn-info btn-sm">
    View
</a>

    <!-- EDIT -->
    <a href="<?php echo e(route('students.edit', $student->id)); ?>" class="btn btn-primary btn-sm">
        Edit
    </a>

    <!-- DELETE -->
    <form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST" style="display:inline;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button class="btn btn-danger btn-sm">Delete</button>
    </form>

</td>

            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

    </table>

</div>

</body>
</html><?php /**PATH C:\xampp\htdocs\student-crud\resources\views/students/index.blade.php ENDPATH**/ ?>