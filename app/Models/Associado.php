<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Associado extends Model
{
    use HasFactory;

    public $table = "associado";

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nome_completo',
        'morada',
        'freguesia',
        'distrito',
        'concelho',
        'codigo_postal',
        'pais',
        'sexo',
        'bloqueado',
        'data_de_adesao',
        'estado_de_socio',
        'telefone',
        'email',
        'id_associacao'
    ];

    protected static function boot()
    {
        parent::boot();
        static::saving(function ($model) {
            User::create(
                [
                    'name' => $model->nome_completo,
                    'email' => $model->email,
                    'email_verified_at' => now(),
                    'associado_id' => $model->id,
                    'role_id' => 3,
                    'password' => Hash::make('12345')
                ]
            );
        });
    }

    public function quotas()
    {
        return $this->hasMany(Quota::class);
    }
}
