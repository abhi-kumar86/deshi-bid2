<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminControl extends Model
{
    use HasFactory;

    protected $fillable = ['setting_name', 'value'];
}
