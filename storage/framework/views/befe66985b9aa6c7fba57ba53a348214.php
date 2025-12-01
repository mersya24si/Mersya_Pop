<?php $__env->startSection('content'); ?>
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo e(route('user.index')); ?>">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit User</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Edit Data User</h1>
                <p class="mb-0">Form untuk mengedit data User.</p>
            </div>
            <div>
                <a href="<?php echo e(route('user.index')); ?>" class="btn btn-primary"><i class="far fa-arrow-alt-circle-left me-1"></i>
                    Kembali</a>
            </div>
        </div>
    </div>
    <?php if(session('success')): ?>
        <div class="alert alert-info">
            <?php echo session('success'); ?>

        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    
                    <form action="<?php echo e(route('user.update', $dataUser->id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>

                        <div class="row mb-4">
                            <div class="col-lg-6 col-sm-12">

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" class="form-control" name="name"
                                        value="<?php echo e(old('name', $dataUser->name)); ?>" required>
                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" required name="email"
                                        value="<?php echo e(old('email', $dataUser->email)); ?>">
                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                
                                <div class="form-group mb-4">
                                    <label class="form-label">Foto Profil Saat Ini</label>
                                    <div class="mb-2">
                                        <?php if($dataUser->profile_picture): ?>
                                            <img src="<?php echo e(Storage::url($dataUser->profile_picture)); ?>"
                                                 alt="Foto Profil"
                                                 style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover;">
                                        <?php else: ?>
                                            <p>Belum ada foto profil.</p>
                                        <?php endif; ?>
                                    </div>

                                    <label for="profile_picture" class="form-label">Ubah Foto Profil</label>
                                    <input type="file" name="profile_picture" class="form-control-file" id="profile_picture">
                                    <small class="form-text text-muted">Format: JPG, PNG, GIF. Maks. 2MB. Biarkan kosong jika tidak diubah.</small>
                                    <?php $__errorArgs = ['profile_picture'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                            </div>

                            <div class="col-lg-6 col-sm-12">

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password Baru</label>
                                    
                                    <input type="password" id="password" class="form-control" name="password">
                                    <small class="form-text text-muted">Isi hanya jika ingin mengubah password.</small>
                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>

                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                                    
                                    <input type="password" id="password_confirmation" class="form-control" name="password_confirmation">
                                </div>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                            <a href="<?php echo e(route('user.index')); ?>" class="btn btn-outline-secondary ms-2">Batal</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\MersyaMeylaniPutri_2SID\laragon-6.0-minimal\www\mersya_pop\resources\views/admin/user/edit.blade.php ENDPATH**/ ?>