<?php $__env->startSection('content'); ?>
    <div class="row m-5 p-5">
        <div class="col-6">
            <h1>Edit Students</h1>
            <form action="/students/<?php echo e($student->id); ?>" method="POST">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" value="<?php echo e($student->name); ?>" name="name"  placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" value="<?php echo e($student->email); ?>" name="email"  placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input type="text" class="form-control" value="<?php echo e($student->age); ?>" name="age"  placeholder="Enter Age">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" value="<?php echo e($student->address); ?>" name="address"  placeholder="Enter Address">
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" value="<?php echo e($student->phone); ?>" name="phone"  placeholder="Enter Phone">
                </div>
                <button type="submit" class="btn btn-primary my-2">Update</button>
              </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lab2pc13\Desktop\students_crud\resources\views/students/edit.blade.php ENDPATH**/ ?>