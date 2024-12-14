<?php $__env->startSection('content'); ?>
    <div class="row m-5 p-5">
        <div class="col">
            <div class="row my-3">
                <div class="col-10">
                    <h1>
                        All Students
                    </h1>
                </div>
                <div class="col">
                    <a href="/students/create" class="btn btn-primary w-100">Create Student</a>
                </div>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Age</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                      <th scope="row"><?php echo e($student->id); ?></th>
                      <td><?php echo e($student->name); ?></td>
                      <td><?php echo e($student->email); ?></td>
                      <td><?php echo e($student->age); ?></td>
                      <td><?php echo e($student->address); ?></td>
                      <td><?php echo e($student->phone); ?></td>
                      <td>
                        <a href="/students/<?php echo e($student->id); ?>" class="btn btn-success">Show</a>
                        <a href="/students/<?php echo e($student->id); ?>/edit" class="btn btn-primary">Edit</a>
                        <a  href="/students/<?php echo e($student->id); ?>/delete" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <caption>
                            No Students Found
                        </caption>
                    <?php endif; ?>
                </tbody>
              </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lab2pc13\Desktop\students_crud\resources\views/students/index.blade.php ENDPATH**/ ?>