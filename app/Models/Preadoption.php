<?php

namespace App\Models;

use App\Filters\SearchFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preadoption extends Model
{
    use HasFactory;

    public function scopeFilter(Builder $builder, $request)
        {
            return (new SearchFilter($request))->filter($builder);
        }

    use HasFactory;

    public function users(){
        return $this->belongsTo (User::class,'id_user');
    
       }
}
