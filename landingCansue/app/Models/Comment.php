<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables en masa..
     *
     * @var string
     */
    protected $table = 'comment';

    /**
     * Los atributos que deben ocultarse durante la serialización.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'comment',
        'game',
    ];
        /**
     * Los atributos que deben ser convertidos a tipos nativos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
