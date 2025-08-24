<?php $__env->startSection('title', 'News Detail'); ?>

<?php $__env->startSection('main'); ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>News Detail</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="<?php echo e(route('news.index')); ?>">News</a></div>
                <div class="breadcrumb-item">Detail</div>
            </div>
        </div>

        <div class="section-body">



            <!-- Meta Info -->
            <div class="row">
                <!-- Author -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card card-statistic-1 shadow-sm">
                        <div class="card-icon bg-primary">
                            <i class="far fa-user"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Author</h4>
                            </div>
                            <div class="card-body">
                                <?php echo e($news->user->name ?? 'Unknown'); ?>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Category -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card card-statistic-1 shadow-sm">
                        <div class="card-icon bg-info">
                            <i class="fas fa-tag"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Category</h4>
                            </div>
                            <div class="card-body">
                                <?php echo e($news->category->name ?? '-'); ?>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Published At -->
                <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                    <div class="card card-statistic-1 shadow-sm">
                        <div class="card-icon bg-success">
                            <i class="far fa-calendar-alt"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Published At</h4>
                            </div>
                            <div class="card-body ">
                                <?php echo e($news->created_at->format('d M Y')); ?>

                            </div>
                        </div>
                    </div>
                </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
                        <div class="card card-statistic-1 shadow-sm">
                            <div class="card-icon
                                <?php if($news->status === 'approved'): ?> bg-success
                                <?php elseif($news->status === 'not_approved'): ?> bg-danger
                                <?php else: ?> bg-warning
                                <?php endif; ?>">
                                <i class="fas
                                    <?php if($news->status === 'approved'): ?> fa-check-circle
                                    <?php elseif($news->status === 'not_approved'): ?> fa-times-circle
                                    <?php else: ?> fa-hourglass-half
                                    <?php endif; ?>"></i>
                            </div>
                            <div class="card-wrap">
                                <div class="card-header">
                                    <h4>Approval Status</h4>
                                </div>
                                <div class="card-body">
                                    <span class="
                                        <?php if($news->status === 'approved'): ?> text-success
                                        <?php elseif($news->status === 'not_approved'): ?> text-danger
                                        <?php else: ?> text-warning
                                        <?php endif; ?>">
                                        <?php echo e(ucfirst(str_replace('_', ' ', $news->status))); ?>

                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
            </div>



             <!-- Thumbnail -->
            <?php if($news->image): ?>
                <div class="mb-5">
                    <img src="<?php echo e($news->image_url); ?>" alt="<?php echo e($news->title); ?>"
                         class="img-fluid rounded shadow"
                         style="max-height: 500px; object-fit: cover; width:100%;">
                </div>
            <?php else: ?>
                <div class="alert alert-warning mb-5">No Thumbnail Available</div>
            <?php endif; ?>

                    <!-- Title -->
            <div class="section-body">
               <div class="d-flex justify-content-between align-items-center">
                <h1 class="display-6 font-weight-bold text-dark mb-4 mr-3">
                    <?php echo e($news->title); ?>

                </h1>
                <div class="section-header-button">
                    <a href="<?php echo e(route('news.edit', $news->code)); ?>"
                        class="btn btn-primary">Edit News</a>
                </div>
               </div>


                <div class="card">
                    <div class="card-header">
                        <h4>Content</h4>
                    </div>

                        <div class="card-body" style="line-height: 1.8; font-size: 1.05rem;">
                    <?php echo $news->content; ?>

                </div>

                    <div class="card-footer bg-whitesmoke">
                        Created by <?php echo e($news->user->name ?? 'Unknown'); ?>

                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/haidarmiqdad/projects/laravelProject/laravel-news/resources/views/pages/news/show.blade.php ENDPATH**/ ?>