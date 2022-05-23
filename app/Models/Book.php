<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    //setiap buku memiliki satu penulis, tetapi satu penulis bisa memiliki banyak buku
    // jika buku sebagai tabel kiri: one to one
    // jika penulis sebagai tabel kiri: one to many

    public function author()
    {
        return $this->hasOne(Author::class);
    }
}
