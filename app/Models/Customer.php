<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchase;

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

    // 顧客検索
    public function scopeSearchCustomers($query, $input=null)
    {
        $search_bool = Customer::where('kana', 'LIKE', '%'.$input.'%')->exists(); //true or while

        if(!empty($input) && $search_bool){
            return $query->where('kana', 'LIKE', '%'.$input.'%');
        }
    }

    // 購買(Purchase)テーブルとのリレーション
    public function purchases(){
        return $this->hasMany(Purchase::class);
    }
}
