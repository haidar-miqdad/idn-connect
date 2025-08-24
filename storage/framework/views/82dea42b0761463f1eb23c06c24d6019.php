<?php $__env->startSection('title', 'Advanced Forms'); ?>

<?php $__env->startPush('style'); ?>
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="<?php echo e(asset('library/bootstrap-daterangepicker/daterangepicker.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('library/select2/dist/css/select2.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('library/selectric/public/selectric.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create User </h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">User<a href="#"></a></div>
                    <div class="breadcrumb-item">Create User </div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Create User </h2>
                <p class="section-lead">We provide Create User input fields, such as date picker, color picker, and so on.</p>

                <div class="row">
                    <div class="col-12 ">
                        <form action="<?php echo e(route('user.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Input Text</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>name</label>
                                        <input type="text" name="name"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>email</label>
                                        <input type="email" name="email"
                                            class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone Number </label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-phone"></i>
                                                </div>
                                            </div>
                                            <input type="text" name="phone"
                                                class="form-control phone-number">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Password Strength</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fas fa-lock"></i>
                                                </div>
                                            </div>
                                            <input type="password" name="password"
                                                class="form-control pwstrength"
                                                data-indicator="pwindicator">
                                        </div>
                                        <div id="pwindicator"
                                            class="pwindicator">
                                            <div class="bar"></div>
                                            <div class="label"></div>
                                        </div>
                                    </div>
                                    

                                    
                                    <div class="form-group text-right">
                                        <button type="submit"
                                            class="btn btn-primary">
                                            Submit
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <!-- JS Libraies -->
    <script src="<?php echo e(asset('library/cleave.js/dist/cleave.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/cleave.js/dist/addons/cleave-phone.us.js')); ?>"></script>
    <script src="<?php echo e(asset('library/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/select2/dist/js/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/selectric/public/jquery.selectric.min.js')); ?>"></script>

    <!-- Page Specific JS File -->
    <script src="<?php echo e(asset('js/page/forms-advanced-forms.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/haidarmiqdad/projects/laravelProject/laravel-news/resources/views/pages/users/create.blade.php ENDPATH**/ ?>