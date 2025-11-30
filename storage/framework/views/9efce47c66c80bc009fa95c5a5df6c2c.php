<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
</head>
<body>
    <h1>Pendaftaran Pengguna Baru</h1>

    
    <?php if($errors->any()): ?>
        <div style="color: red;">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?php echo e(route('auth.store')); ?>">
        <?php echo csrf_field(); ?>

        <div>
            <label for="name">Nama</label>
            <input id="name" type="text" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
        </div>

        <div style="margin-top: 10px;">
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required>
        </div>

        <div style="margin-top: 10px;">
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>

        <div style="margin-top: 10px;">
            <label for="password_confirmation">Konfirmasi Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required>
        </div>

        <div style="margin-top: 20px;">
            <button type="submit">Daftar</button>
        </div>

        <p style="margin-top: 20px;">Sudah punya akun? <a href="<?php echo e(route('auth.index')); ?>">Login di sini</a></p>
    </form>
</body>
</html>
<?php /**PATH D:\Nabil_2SIB\laragon-6.0-minimal\www\mersya_pop\resources\views/admin/auth/register.blade.php ENDPATH**/ ?>