<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item <?php echo $__env->yieldContent('nav_home'); ?> px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="<?php echo e(route('home')); ?>">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item <?php echo $__env->yieldContent('nav_about'); ?> px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="<?php echo e(route('about')); ?>">About</a>
                </li>
                <li class="nav-item <?php echo $__env->yieldContent('nav_products'); ?> px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="<?php echo e(route('products')); ?>">Products</a>
                </li>
                <li class="nav-item <?php echo $__env->yieldContent('nav_store'); ?> px-lg-4">
                    <a class="nav-link text-uppercase text-expanded" href="<?php echo e(route('store')); ?>">Store</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH /home/long/Long_message_board/resources/views/frontend/layouts/navbar.blade.php ENDPATH**/ ?>