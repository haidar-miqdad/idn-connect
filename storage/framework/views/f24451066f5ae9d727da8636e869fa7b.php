<?php $__env->startSection('title', 'Profile'); ?>

<?php $__env->startPush('style'); ?>
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo e(asset('library/summernote/dist/summernote-bs4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('library/bootstrap-social/assets/css/bootstrap.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1><?php echo e($user->name); ?></h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Profile User</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Profil User</h2>
                <p class="section-lead">
                    Informasi tentang perusahaan Anda.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Name</label>
                                        <p><?php echo e($user->name); ?></p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>User Address</label>
                                        <p><?php echo e($user->address); ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Email</label>
                                        <p><?php echo e($user->email); ?></p>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Phone</label>
                                        <p><?php echo e($user->phone); ?></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                    <label>Status</label><br>
                                    <?php if($user->status == 'student'): ?>
                                        <span class="badge badge-primary">Student</span>
                                    <?php elseif($user->status == 'teacher'): ?>
                                        <span class="badge badge-success">Teacher</span>
                                    <?php elseif($user->status == 'other'): ?>
                                        <span class="badge badge-info">Other</span>
                                    <?php else: ?>
                                        <span class="badge badge-secondary">Unknown</span>
                                    <?php endif; ?>
                                    </div>

                                <div class="form-group col-md-6 col-12">
                                    <label>Image</label><br>
                                    <?php if($user->image): ?>
                                        <img src="<?php echo e(asset('storage/profile/'.$user->image)); ?>"
                                            alt="Profile <?php echo e($user->name); ?>"
                                            class="img-thumbnail"
                                            style="max-width: 120px;">
                                    <?php else: ?>
                                        <span class="badge badge-warning">No Image</span>
                                    <?php endif; ?>
                                </div>

                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <a href="<?php echo e(route('user.edit', $user->code)); ?>" class="btn btn-primary">Edit Profil
                                    User</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <!-- JS Libraries -->
    <script src="<?php echo e(asset('library/summernote/dist/summernote-bs4.js')); ?>"></script>

    <!-- Page Specific JS File -->
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/haidarmiqdad/projects/laravelProject/laravel-news/resources/views/pages/users/show.blade.php ENDPATH**/ ?>