<?php

namespace App\Models;

use CodeIgniter\Model;

class CarouselModel extends Model
{
    protected $table            = 'carousel';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['judul', 'deskripsi', 'gambar', 'link']; 
    protected $useTimestamps    = true;
}