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
                <li class="breadcrumb-item"><a href="ur">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Tambah User</h1>
                <p class="mb-0">Form untuk menambahkan data baru.</p>
            </div>
            <div>
                <a href="<?php echo e(route('user.index')); ?>" class="btn btn-primary"><i class="far fa-question-circle me-1"></i>
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
                    <form action="<?php echo e(route('user.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-4">
                            <div class="col-lg-4 col-sm-6">
                                <!-- Name -->
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" class="form-control" name="name"
                                        value="<?php echo e(old('name')); ?>" required>
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" id="email" class="form-control" required name="email"
                                        value="<?php echo e(old('email')); ?>">
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" class="form-control" name="password"
                                        value="<?php echo e(old('password')); ?>">
                                </div>

                                <!-- Konfirmasi Password-->
                                <div class="mb-3">
                                    <label for="password" class="form-label">Konfirmasi Password</label>
                                    <input type="password" id="password" class="form-control" name="password"
                                        value="<?php echo e(old('password')); ?>">
                                </div>
                                <div class="form-group">
                                    <label for="profile_picture">Foto Profil</label>
                                    <input type="file" name="profile_picture" class="form-control-file"
                                        id="profile_picture">
                                </div>

                                <!-- Buttons -->
                                <div class="">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="<?php echo e(route('user.index')); ?>" class="btn btn-outline-secondary ms-2">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\MersyaMeylaniPutri_2SID\laragon-6.0-minimal\www\mersya_pop\resources\views/admin/user/create.blade.php ENDPATH**/ ?>