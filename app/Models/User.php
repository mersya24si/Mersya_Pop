<?php

namespace App\Models;

// Import yang hilang agar 'Builder' dikenali
use Illuminate\Database\Eloquent\Builder; // <-- BARIS INI DITAMBAHKAN

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // --- Local Scope untuk Searching ---

    /**
     * Menerapkan pencarian teks bebas di beberapa kolom.
     * @param Builder $query
     * @param object $request
     * @param array $columns
     * @return Builder
     */
    public function scopeSearch(Builder $query, $request, array $columns): Builder
    {
        // Parameter 'search' adalah nama input field di form pencarian
        if ($request->filled('search')) {
            $searchTerm = '%' . $request->search . '%';

            $query->where(function (Builder $q) use ($searchTerm, $columns) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'LIKE', $searchTerm);
                }
            });
        }

        // Sudah benar mengembalikan $query
        return $query;
    }
}
