<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class WishList extends BaseModel
{
    use HasFactory;

    protected $guarded;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
