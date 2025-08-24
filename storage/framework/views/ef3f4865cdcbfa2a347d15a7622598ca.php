<?php $__env->startSection('title', 'Card'); ?>

<?php $__env->startPush('style'); ?>
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="<?php echo e(asset('library/chocolat/dist/css/chocolat.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Category</h1>

                <div class="section-header-button">
                    <a href="<?php echo e(route('category.create')); ?>"
                        class="btn btn-primary">Add New</a>
                </div>
            </div>

            <div class="section-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h2 class="section-title">News Category</h2>
                <p class="section-lead">
                    Create a new category to better structure your news content.🚀
                </p>
                    </div>

                    <!-- Search -->
                     <div class="float-right">
                                    <form>
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control"
                                                name="search"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>


                </div>


                <div class="row">
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="card card-light">
                                <div class="card-header">
                                    <h4><?php echo e($category->name); ?></h4>
                                </div>
                                <div class="card-body">
                                    <p><?php echo e($category->description); ?> <code>.</code></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <!-- JS Libraies -->
    <script src="<?php echo e(asset('library/chocolat/dist/js/jquery.chocolat.min.js')); ?>"></script>
    <script src="<?php echo e(asset('library/jquery-ui-dist/jquery-ui.min.css')); ?>"></script>

    <!-- Page Specific JS File -->
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/haidarmiqdad/projects/laravelProject/laravel-news/resources/views/pages/category/index.blade.php ENDPATH**/ ?>