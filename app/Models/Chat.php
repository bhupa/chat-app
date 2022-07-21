<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $table = 'chat';
    protected $fillable = [
        'send_by',
        'receive_by',
        'message',
        'file',
        'viewed_at',
    ];

    public function sender()
    {
        return $this->belongsTo(User::class, 'send_by');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class, 'receive_by');
    }

}
