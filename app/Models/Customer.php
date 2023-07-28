<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'kana',
        'tel',
        'email',
        'postcode',
        'address',
        'birthday',
        'gender',
        'memo',
    ];

    public function scopeSearchCustomers($query, $input=null)
    {
        $search_bool = Customer::where('kana', 'LIKE', '%'.$input.'%')->exists();

        if(!empty($input) && $search_bool){
            return $query->where('kana', 'LIKE', '%'.$input.'%');
        }
    }    
}
