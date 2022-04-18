<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class Contact extends Model
// {
//     use HasFactory;

//     public $id;
//     public $first_name;
//     public $last_name;
//     public $email;
// }

class Contact extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['propstack_id', 'first_name', 'last_name', 'email'];

}
