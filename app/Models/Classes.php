<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = [
        'major_id',
        'id',
        'nama_kelas',
    ];

    public function major()
    {
        return $this->belongsTo(Major::class);
    }

    public function teachers() 
    {
    return $this->belongsTo(Teacher::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'class_id');
    }
}
