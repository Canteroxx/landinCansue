<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;

    /**
     * Los atributos que son asignables en masa..
     *
     * @var string
     */
    protected $table = 'contact';

    /**
     * Los atributos que deben ocultarse durante la serialización.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'comment',
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
