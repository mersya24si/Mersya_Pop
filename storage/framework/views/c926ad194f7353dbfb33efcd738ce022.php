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
                <li class="breadcrumb-item"><a href="#">Volt</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data Pelanggan</li>
            </ol>
        </nav>

        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <?php if(session('success')): ?>
                    <div class="alert alert-success mt-3">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
                <h1 class="h4">Data Pelanggan</h1>
                <p class="mb-0">Kumpulan Data Pelanggan.</p>
            </div>
            <div>
                <a href="<?php echo e(route('pelanggan.create')); ?>" class="btn-primary btn-outline-gray">
                    <i class="far fa-question-circle me-1"></i> Tambah Pelanggan
                </a>
            </div>
        </div>
    </div>

    <div class="table-responsive">
        
        <form method="GET" action="<?php echo e(route('pelanggan.index')); ?>" class="mb-3">
            <div class="row g-2 align-items-end"> 

                
                <div class="col-md-2">
                    <label for="filter-gender" class="form-label">Filter Gender</label>
                    <select name="gender" id="filter-gender" class="form-select">
                        <option value="">-- Semua Gender --</option>
                        <option value="Male" <?php echo e(request('gender') == 'Male' ? 'selected' : ''); ?>>Male</option>
                        <option value="Female" <?php echo e(request('gender') == 'Female' ? 'selected' : ''); ?>>Female</option>
                    </select>
                </div>

                
                <div class="col-md-3">
                    <label for="search-input" class="form-label">Cari Nama Depan</label>
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" id="search-input"
                            value="<?php echo e(request('search')); ?>" placeholder="Cari Nama Depan..." aria-label="Search">

                        
                        <button type="submit" class="btn btn-primary input-group-text" title="Terapkan Filter & Pencarian">
                            <svg class="icon icon-xxs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </button>

                        
                        <?php if(request()->filled('search') || request()->filled('gender')): ?>
                            <a href="<?php echo e(route('pelanggan.index')); ?>" class="btn btn-secondary input-group-text" title="Reset Filter">
                                Reset
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </form>

        <div class="card border-0 shadow mb-4 mt-3">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="table-pelanggan" class="table table-centered table-nowrap mb-0 rounded">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0 rounded-start">First Name</th>
                                <th class="border-0">Last Name</th>
                                <th class="border-0">Birthday</th>
                                <th class="border-0">Gender</th>
                                <th class="border-0">Email</th>
                                <th class="border-0">Phone</th>
                                <th class="border-0 rounded-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $dataPelanggan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($item->first_name); ?></td>
                                    <td><?php echo e($item->last_name); ?></td>
                                    <td><?php echo e($item->birthday); ?></td>
                                    <td><?php echo e($item->gender); ?></td>
                                    <td><?php echo e($item->email); ?></td>
                                    <td><?php echo e($item->phone); ?></td>
                                    <td>
                                        
                                        <a href="<?php echo e(route('pelanggan.edit', $item->pelanggan_id)); ?>"
                                            class="btn btn-info btn-sm">
                                            <svg class="icon icon-xs me-2" fill="none" stroke-width="1.5"
                                                stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10">
                                                </path>
                                            </svg>
                                            Edit
                                        </a>

                                        
                                        <form action="<?php echo e(route('pelanggan.destroy', $item->pelanggan_id)); ?>" method="POST"
                                            style="display:inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?')">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <svg class="icon icon-xs me-2" data-slot="icon" fill="none"
                                                    stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0">
                                                    </path>
                                                </svg>
                                                Hapus
                                            </button>
                                        </form>

                                    </td>

                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <?php echo e($dataPelanggan->links('pagination::bootstrap-5')); ?>

                </div>
            </div>
        </div>
    </div>


    

    <div class="card theme-settings bg-gray-800 theme-settings-expand" id="theme-settings-expand">
        <div class="card-body bg-gray-800 text-white rounded-top p-3 py-2">
            <span class="fw-bold d-inline-flex align-items-center h6">
                <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd"></path>
                </svg>
                Settings
            </span>
        </div>
    </div>

    

    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\Nabil_2SIB\laragon-6.0-minimal\www\mersya_pop\resources\views/admin/pelanggan/index.blade.php ENDPATH**/ ?>