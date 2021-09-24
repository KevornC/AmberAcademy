<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class application extends Model
{
    use HasFactory;

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'table_id',
        'student_name',
        'student_course',
        'cost',
        'response',
        'paid',
        'id_doc',
        'trn_doc',
        'qual_doc',
        'image',
        'modified_by',
        'email',
        'dob',
        'address',
        'gender'
    ];
}
