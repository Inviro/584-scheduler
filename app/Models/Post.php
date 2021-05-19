<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public $primaryKey = 'id';
    protected $table = 'posts';
    public $timestamps =false;
    protected $fillable = [
        'title',
        'email',
        'eventTime',
        'eventLink',
        'eventId',
        'eventPassword'
    ];
}
