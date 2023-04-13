<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

//se añade el paquete atributos
//se añade el paquete atributos
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //se crea un método protegido(protected) con el nombre del atributo a modificar
    //se crea un método protegido(protected) con el nombre del atributo a modificar
    protected function name():Attribute
    {
        //esta es la forma de definirlo, pero se puede usar la "función flecha"
        //esta es la forma de definirlo, pero se puede usar la "función flecha"
        /*return new Attribute(
            get: function($value){
                return ucwords($value);
            },
            set: function($value){
                return strtolower($value);
            }
        );*/

        //forma de definir usando la "funcion flecha de php"
        //forma de definir usando la "funcion flecha de php"
        return new Attribute(
            get: fn($value) => ucwords($value),
            set: fn($value) => strtolower($value)
        );

    }

}
