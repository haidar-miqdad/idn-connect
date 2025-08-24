<?php $__env->startSection('title', 'News'); ?>

<?php $__env->startPush('style'); ?>
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="<?php echo e(asset('library/selectric/public/selectric.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Product</h1>
                <div class="section-header-button">
                    <a href="<?php echo e(route('news.create')); ?>"
                        class="btn btn-primary">Add New</a>
                </div>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">News</a></div>
                    <div class="breadcrumb-item">All News</div>
                </div>
            </div>
            <?php echo $__env->make('layouts.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="section-body">
                <h2 class="section-title">News</h2>
                <p class="section-lead">
                    You can manage all News, such as editing, deleting and more.
                </p>


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All News</h4>
                            </div>
                            <div class="card-body">
                                
                                <div class="float-right">
                                    <form>
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control"
                                                name="name"
                                                placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table-striped table">
                                        <tr>
                                            <th>Title</th>
                                            <th>image</th>
                                            <th>Content</th>
                                            <th>Status</th>


                                        </tr>

                                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($item->title); ?>

                                                <div class="table-links">
                                                    <div class="bullet"></div>
                                                    <a href="<?php echo e(route('news.edit', $item->code)); ?>">Edit</a>
                                                    <div class="bullet"></div>
                                                    <a href="<?php echo e(route('news.show', $item->code)); ?>">show</a>
                                                    <div class="bullet"></div>
                                                    <a href="#"
                                                        onclick="event.preventDefault(); document.getElementById('delete-form-<?php echo e($item->code); ?>').submit();"
                                                        class="text-danger">Trash
                                                    </a>
                                                    <form
                                                    action="<?php echo e(route('news.destroy', $item->code)); ?>"
                                                     method="POST"
                                                     id="delete-form-<?php echo e($item->code); ?>">
                                                        <?php echo method_field('DELETE'); ?>
                                                        <?php echo csrf_field(); ?>
                                                    </form>
                                                </div>
                                            </td>
                                            <td>
                                                <?php if($item->image): ?>
                                                    <img src="<?php echo e($item->image_url); ?>"
                                                        alt="image"
                                                        width="160"
                                                        height="90"
                                                        class="rounded"
                                                        style="object-fit: cover;">

                                                <?php else: ?>
                                                    <span class="badge badge-warning">No Image</span>
                                                <?php endif; ?>
                                            </td>

                                            

                                            <td><?php echo e($item->excerpt); ?>

                                                <div class="table-links">
                                                    <div class="bullet"></div>
                                                    <a href="#"><?php echo e($item->created_at); ?></a>
                                                </div>
                                            </td>

                                             <td>
                                                <?php if($item->status === 'pending'): ?>
                                                    <span class="badge bg-warning text-dark">Pending</span>
                                                <?php elseif($item->status === 'approved'): ?>
                                                    <span class="badge bg-success">Approved</span>
                                                <?php elseif($item->status === 'not_approved'): ?>
                                                    <span class="badge bg-secondary">Not Approved</span>
                                                <?php else: ?>
                                                    <span class="badge bg-light text-dark"><?php echo e(ucfirst($item->status)); ?></span>
                                                <?php endif; ?>

                                                <div class="table-links d-flex align-items-center mt-1">
                                                    <div class="bullet text-info me-2"></div>
                                                    <p class="text-info mb-0"><?php echo e($item->created_at->diffForHumans()); ?></p>
                                                </div>
                                            </td>





                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </table>
                                </div>
                                <div class="float-right">
                                    <nav>
                                        <?php echo e($news->links()); ?>

                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <!-- JS Libraies -->
    <script src="<?php echo e(asset('library/selectric/public/jquery.selectric.min.js')); ?>"></script>

    <!-- Page Specific JS File -->
    <script src="<?php echo e(asset('js/page/features-posts.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/haidarmiqdad/projects/laravelProject/laravel-news/resources/views/pages/news/index.blade.php ENDPATH**/ ?>