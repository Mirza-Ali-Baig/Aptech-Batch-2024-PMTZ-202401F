<?php $__env->startSection('content'); ?>
    <div class="row m-5 p-5">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title"><?php echo e($student->name); ?></h5>
                  <h6 class="card-subtitle mb-2 text-muted"><?php echo e($student->email); ?></h6>
                  <p class="card-text"><i>Address : </i> <?php echo e($student->address); ?></p>
                  <p class="card-text"> <i>Phone Number :</i><?php echo e($student->phone); ?></p>
                  <p class="card-text"><i>Age :</i> <?php echo e($student->age); ?></p>
                  <a href="/students" class="btn btn-primary">Go Back</a>
                </div>
              </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lab2pc13\Desktop\students_crud\resources\views/students/show.blade.php ENDPATH**/ ?>