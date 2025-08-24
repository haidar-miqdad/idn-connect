<?php $__env->startSection('title', 'Users'); ?>

<?php $__env->startPush('style'); ?>
    <!-- CSS Libraries -->
    <link rel="stylesheet"
        href="<?php echo e(asset('library/selectric/public/selectric.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('main'); ?>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Users</h1>
                <div class="section-header-button">
                    <a href="<?php echo e(route('user.create')); ?>"
                        class="btn btn-primary">Add New</a>
                </div>

                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Users</a></div>
                    <div class="breadcrumb-item">All Users</div>
                </div>
            </div>
            <?php echo $__env->make('layouts.alert', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <div class="section-body">
                <h2 class="section-title">Users</h2>
                <p class="section-lead">
                    You can manage all posts, such as editing, deleting and more.
                </p>


                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Users</h4>
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
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Phone</th>
                                        </tr>

                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
    <div class="d-flex align-items-center">
        <?php if($user->image): ?>
            <img src="<?php echo e(asset('storage/profile/' . $user->image)); ?>"
                 alt="Profile"

                 style="width: 40px; height: 40px; object-fit: cover; border-radius:50%; margin-right:10px;">
        <?php else: ?>
            <img src="<?php echo e(asset('img/avatar/avatar-3.png')); ?>"
                 alt="Default"

                 style="width: 40px; height: 40px; object-fit: cover; border-radius:50%; margin-right:10px;">
        <?php endif; ?>
        <div>
            <?php echo e($user->name); ?>

            <div class="table-links">
                <div class="bullet"></div>
                <a href="<?php echo e(route('user.edit', $user->code)); ?>">Edit</a>

                <div class="bullet"></div>
                <a href="<?php echo e(route('user.show', $user->code)); ?>">Detail</a>

                <div class="bullet"></div>
                <a href="#" class="text-danger"
                   onclick="deleteUser('<?php echo e($user->code); ?>')">
                   Trash
                </a>

                <form id="delete-form-<?php echo e($user->code); ?>"
                      action="<?php echo e(route('user.destroy', $user->code)); ?>"
                      method="POST"
                      style="display: none;">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                </form>
            </div>
        </div>
    </div>
</td>

                                            <td>
                                                <?php echo e($user->email); ?>

                                            </td>
                                            <td>
                                                role user nanti
                                            </td>
                                            <td>
                                                <?php echo e($user->phone); ?>

                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </table>
                                </div>
                                <div class="float-right">
                                    <nav>
                                        <?php echo e($users->links()); ?>

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

    <script>
function deleteUser(userId) {
    Swal.fire({
        title: 'Are you sure?',
        text: "This action cannot be undone.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'Cancel'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('delete-form-' + userId).submit();
        }
    });
}
</script>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /Users/haidarmiqdad/projects/laravelProject/laravel-news/resources/views/pages/users/index.blade.php ENDPATH**/ ?>