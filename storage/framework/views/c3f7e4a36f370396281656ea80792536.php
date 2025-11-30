<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <p class="wow fadeInUp" data-wow-delay=".8s">
        Belum punya akun? <a href="<?php echo e(route('auth.create')); ?>">Daftar Sekarang</a>
    </p>

    
    <?php if(session('success')): ?>
        <div class="alert alert-success wow fadeIn" data-wow-delay="1s"><?php echo e(session('success')); ?></div>
    <?php endif; ?>
    <?php if(session('error')): ?>
        <div class="alert alert-danger wow fadeIn" data-wow-delay="1s"><?php echo e(session('error')); ?></div>
    <?php endif; ?>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger wow fadeIn" data-wow-delay="1.2s">
            <ul class="mb-0">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form class="wow fadeInUp" data-wow-delay="1.4s" action="<?php echo e(route('auth.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group wow fadeInUp" data-wow-delay="1.6s">
            <input type="email" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required>
        </div>

        <div class="form-group wow fadeInUp" data-wow-delay="1.8s">
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <button type="submit" class="btn-login wow fadeInUp" data-wow-delay="2s" name="login">Masuk</button>
    </form>

    </div>
    </div>
</body>

</html>
<?php /**PATH D:\Nabil_2SIB\laragon-6.0-minimal\www\mersya_pop\resources\views/admin/auth/login.blade.php ENDPATH**/ ?>