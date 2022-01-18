<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_info extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'student_name',
        'course_name',
        'amountpaid',
        'cardnumber',
        'cardholder',
        'expiry_date',
        'cvc',
        'paid',
        'course_cost',
        'created_at',
        'modified_by'

    ];
}
