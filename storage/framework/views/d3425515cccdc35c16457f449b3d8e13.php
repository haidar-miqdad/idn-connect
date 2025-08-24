<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">IDN Connect</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">IDN</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Admin Dashboard</li>

            <!-- Dashboard -->
            <li class="nav-item ">
                <a href="<?php echo e(url('home')); ?>" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i> <span>Dashboard</span>
                </a>
            </li>

            <!-- Users -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-users"></i> <span>Users</span>
                </a>
                <ul class="dropdown-menu">
                    <li class='<?php echo e(Request::is("user*") ? "active" : ""); ?>'>
                        <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
                            <i class="fas fa-list"></i> All Users
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class="fas fa-pen-nib"></i> Writer
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="#">
                            <i class="fas fa-user"></i> User
                        </a>
                    </li>
                </ul>
            </li>

            <!-- News -->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown">
                    <i class="far fa-newspaper"></i> <span>News</span>
                </a>
                <ul class="dropdown-menu">
                    <li class='<?php echo e(Request::is("news*") ? "active" : ""); ?>'>
                        <a class="nav-link" href="<?php echo e(route('news.index')); ?>">
                            <i class="fas fa-file-alt"></i> News
                        </a>
                    </li>
                    <li class='<?php echo e(Request::is("category*") ? "active" : ""); ?>'>
                        <a class="nav-link" href="<?php echo e(route('category.index')); ?>">
                            <i class="fas fa-tags"></i> News Category
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </aside>
</div>
<?php /**PATH /Users/haidarmiqdad/projects/laravelProject/laravel-news/resources/views/components/sidebar.blade.php ENDPATH**/ ?>