<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    // Konfigurasi Model
    protected $table      = 'pelanggan';
    protected $primaryKey = 'pelanggan_id';
    protected $fillable   = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'email',
        'phone',
    ];

    // --- Local Scope untuk Filtering ---

    /**
     * Menerapkan filter berdasarkan kolom yang ada dalam request.
     * * @param Builder $query
     * @param object $request
     * @param array $filterableColumns
     * @return Builder
     */



public function scopeFilter(Builder $query, $request, array $filterableColumns): Builder
{
    foreach ($filterableColumns as $column) {
        if ($request->filled($column)) {
            $query->where($column, $request->input($column));
        }
    }
    return $query;
}

    // --- Local Scope untuk Searching ---

    /**
     * Menerapkan pencarian teks bebas di beberapa kolom.
     * * @param Builder $query
     * @param object $request
     * @param array $columns
     * @return Builder // BARU: Menambahkan tipe kembalian
     */
    public function scopeSearch(Builder $query, $request, array $columns): Builder
    {
        // Memastikan parameter 'search' ada dan tidak kosong
        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';

            $query->where(function (Builder $q) use ($searchTerm, $columns) {
                // Melakukan pencarian OR di semua kolom yang ditentukan
                foreach ($columns as $column) {
                    $q->orWhere($column, 'LIKE', $searchTerm);
                }
            });
        }

        // PERBAIKAN: Harus mengembalikan objek $query agar kueri selanjutnya bisa digabungkan
        return $query;
    }
}
