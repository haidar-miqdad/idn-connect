<?php $__env->startSection('title', 'Edit Profil User'); ?>

<?php $__env->startPush('style'); ?>
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?php echo e(asset('library/summernote/dist/summernote-bs4.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('library/bootstrap-social/assets/css/bootstrap.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Profil <?php echo e($user->name); ?></h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Edit Profil User</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Edit Profil User</h2>
                <p class="section-lead">
                    Perbarui informasi profil Anda di halaman ini.
                </p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-12">
                        <form action="<?php echo e(route('user.update', $user->code)); ?>" method="POST" enctype="multipart/form-data" ><?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="card">

                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Nama User</label>
                                            <input type="text" name="name" class="form-control" value="<?php echo e($user->name); ?>"
                                                >
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control" value="" placeholder="Kosongkan jika password tidak ingin diubah">
                                    </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Email User</label>
                                            <input type="email" name="email" class="form-control" value="<?php echo e($user->email); ?>"
                                                >
                                        </div>
                                        
                                    <div class="form-group col-md-6 col-12">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control" value="<?php echo e($user->phone); ?>">
                                    </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6 col-12">
                                            <label>Status</label>
                                             <select name="status" id="" class="form-control" style="height: 40px">
                                            <option value="student" <?php echo e($user->status == 'student'? 'selected' : ''); ?>>Student</option>
                                            <option value="teacher" <?php echo e($user->status ==  'teacher'? 'selected' : ''); ?>>Teacher</option>
                                            <option value="other" <?php echo e($user->status == 'other'? 'selected' : ''); ?>>Other</option>
                                        </select>
                                        </div>
                                        <div class="form-group col-md-6 col-12">
                                            <label>Upload New Image</label>
                                            <input type="file" name="image" class="form-control">
                                        </div>

                                    </div>

                                    <div class="form-group">
                                            <label>Alamat User</label>
                                            <input type="text" name="address" class="form-control" value="<?php echo e($user->address); ?>"
                                                >
                                        </div>

                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
    <!-- JS Libraries -->
    <script src="<?php echo e(asset('library/summernote/dist/summernote-bs4.js')); ?>"></script>

    <!-- Page Specific JS File -->
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/haidarmiqdad/projects/laravelProject/laravel-news/resources/views/pages/users/edit.blade.php ENDPATH**/ ?>