<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>

<body>
    <h1>Edit Profile</h1>

    <?php if(session('success')): ?>
        <div style="color: green;"><?php echo e(session('success')); ?></div>
    <?php endif; ?>

    
    <form action="<?php echo e(route('profile.update')); ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <label for="profile_picture">Profile Picture:</label>
        <input type="file" name="profile_picture" id="profile_picture">
        <br><br>

        <button type="submit">Update Profile</button>
    </form> 

    <br>

    
    <?php if($user->profile_picture): ?>
        <div>
            <img src="<?php echo e(Storage::url($user->profile_picture)); ?>" alt="Profile Picture" width="200">
            <br><br>

            <form action="<?php echo e(route('profile.destroy')); ?>" method="POST" onsubmit="return confirm('Yakin ingin menghapus foto?');">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" style="background-color: red; color: white;">Delete Profile Picture</button>
            </form>
        </div>
    <?php endif; ?>

    <br>
    <a href="<?php echo e(route('profile.show')); ?>">Back to Profile</a>
</body>

</html>
<?php /**PATH D:\Nabil_2SIB\laragon-6.0-minimal\www\mersya_pop\resources\views/admin/profile/edit.blade.php ENDPATH**/ ?>