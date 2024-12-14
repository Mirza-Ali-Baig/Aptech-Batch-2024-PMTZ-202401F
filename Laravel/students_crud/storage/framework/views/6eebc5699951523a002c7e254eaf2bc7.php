<?php $__env->startSection('content'); ?>
    <div class="row m-5 p-5">
        <div class="col-6">
            <h1>Create Students</h1>
            <form action="/students" method="POST">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name"  placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email"  placeholder="Enter Email">
                </div>
                <div class="form-group">
                  <label>Age</label>
                  <input type="text" class="form-control" name="age"  placeholder="Enter Age">
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input type="text" class="form-control" name="address"  placeholder="Enter Address">
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="text" class="form-control" name="phone"  placeholder="Enter Phone">
                </div>
                <button type="submit" class="btn btn-primary my-2">Submit</button>
              </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\lab2pc13\Desktop\students_crud\resources\views/students/create.blade.php ENDPATH**/ ?>