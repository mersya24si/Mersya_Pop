<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>

<body>
    <h1>User Profile</h1>

    
    <?php if($user): ?>

        
        <?php if($user->profile_picture): ?>
            <img src="<?php echo e(Storage::url($user->profile_picture)); ?>" alt="Profile Picture" width="200">
        <?php else: ?>
            <p>No profile picture uploaded.</p>
        <?php endif; ?>

        
    <?php else: ?>
        <p>Error: User data not found. Please log in.</p>
    <?php endif; ?>

    <br><br>
    
    <a href="<?php echo e(route('profile.edit')); ?>">Edit Profile</a>
</body>

</html>
<?php /**PATH D:\Nabil_2SIB\laragon-6.0-minimal\www\mersya_pop\resources\views/admin/profile/show.blade.php ENDPATH**/ ?>