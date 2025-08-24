<?php $__env->startSection('title', 'Blank Page'); ?>

<?php $__env->startPush('style'); ?>
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="<?php echo e(asset('library/summernote/dist/summernote-bs4.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('library/codemirror/lib/codemirror.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('library/codemirror/theme/duotone-dark.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('library/selectric/public/selectric.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create News</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Create News</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Create News</h2>
                <p class="section-lead">
                    Hey <?php echo e(Auth::user()->name); ?> 👋 We can’t wait to see what exciting news you’re about to write!
                </p>

                <div class="row">
                    <div class="col-12">
                        <form action="<?php echo e(route('news.store')); ?>" method="POST" enctype="multipart/form-data"> <?php echo csrf_field(); ?>
                            <div class="card">
                            <div class="card-header">
                                <h4>Input News</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text"
                                            class="form-control" name="title">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                                    <div class="col-sm-12 col-md-7">
                                        
                                        <input type="file"
                                            class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                    <div class="col-sm-12 col-md-7">
                                        <select class="form-control selectric" name="category_id" required>
                                            <option value="" disabled selected>-- Select Category --</option>
                                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                              <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="summernote" name="content"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Publish</button>
                                    </div>
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
    <script src="<?php echo e(asset('library/summernote/dist/summernote-bs4.js')); ?>"></script>
    <script src="<?php echo e(asset('library/codemirror/lib/codemirror.js')); ?>"></script>
    <script src="<?php echo e(asset('library/codemirror/mode/javascript/javascript.js')); ?>"></script>
    <script src="<?php echo e(asset('library/selectric/public/jquery.selectric.min.js')); ?>"></script>

    <!-- Page Specific JS File -->
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/haidarmiqdad/projects/laravelProject/laravel-news/resources/views/pages/news/create.blade.php ENDPATH**/ ?>