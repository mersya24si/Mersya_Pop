<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
</head>
<body>
    <h1>Data Diri</h1>

    <p><b>Nama:</b> <?php echo e($my_name); ?></p>
    <p><b>Umur:</b> <?php echo e($my_age); ?> tahun</p>

    <p><b>Hobi:</b></p>
    <ul>
        <?php $__currentLoopData = $hobbies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hobby): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($hobby); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <p><b>Tanggal Harus Wisuda:</b> <?php echo e($tgl_harus_wisuda); ?></p>
    <p><b>Sisa Hari Menuju Wisuda:</b> <?php echo e($time_to_study_left); ?> hari</p>

    <p><b>Semester Saat Ini:</b> <?php echo e($current_semester); ?></p>
    <p><b>Pesan:</b> <?php echo e($message); ?></p>

    <p><b>Cita-cita:</b> <?php echo e($future_goal); ?></p>
</body>
</html>
<?php /**PATH D:\MersyaMeylaniPutri_2SID\laragon-6.0-minimal\www\Mersya_Pop\resources\views/pegawai.blade.php ENDPATH**/ ?>