<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    //نستخدم هذه الدالة لتغيير اسم المسار في المتصفح
    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable=[
      'task','slug','description','category','user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
