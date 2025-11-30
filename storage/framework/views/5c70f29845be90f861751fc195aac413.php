<?php $__env->startSection('content'); ?>

    <div class="py-4">
        
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
                    
                    <form action="<?php echo e(route('pelanggan.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="row mb-4">

                            
                            <div class="col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First name</label>
                                    <input type="text" id="first_name" class="form-control" name="first_name"
                                        value="<?php echo e(old('first_name')); ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last name</label>
                                    <input type="text" id="last_name" class="form-control" name="last_name"
                                        value="<?php echo e(old('last_name')); ?>" required>
                                </div>
                            </div>

                            
                            <div class="col-lg-4 col-sm-6">
                                <div class="mb-3">
                                    <label for="birthday" class="form-label">Birthday</label>
                                    <input type="date" id="birthday" class="form-control" name="birthday"
                                        value="<?php echo e(old('birthday')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select id="gender" name="gender" class="form-select">
                                        
                                        <option value="" <?php echo e(old('gender') == '' ? 'selected' : ''); ?>>-- Pilih --</option>
                                        <option value="Male" <?php echo e(old('gender') == 'Male' ? 'selected' : ''); ?>>Male</option>
                                        <option value="Female" <?php echo e(old('gender') == 'Female' ? 'selected' : ''); ?>>Female</option>
                                        <option value="Other" <?php echo e(old('gender') == 'Other' ? 'selected' : ''); ?>>Other</option>
                                    </select>
                                </div>
                            </div>

                            
                            <div class="col-lg-4 col-sm-12">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" required
                                        name="email" value="<?php echo e(old('email')); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" id="phone" class="form-control" name="phone"
                                        value="<?php echo e(old('phone')); ?>">
                                </div>

                                
                                <div class="mb-3">
                                    <label for="multipleupload" class="form-label">Dokumen Pelanggan (Multiple)</label>
                                    
                                    <input type="file" id="multipleupload" class="form-control" name="documents[]" multiple>
                                    <small class="form-text text-muted">Anda dapat memilih lebih dari satu file.</small>
                                </div>

                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="<?php echo e(route('pelanggan.index')); ?>"
                                        class="btn btn-outline-secondary ms-2">Batal</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Nabil_2SIB\laragon-6.0-minimal\www\mersya_pop\resources\views/admin/pelanggan/create.blade.php ENDPATH**/ ?>