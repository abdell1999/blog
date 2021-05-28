<?php

namespace App\Policies;

use App\Models\Articulo;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticuloPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function update(User $user, Articulo $articulo)
    {
        //Revisar que el usuario que modifica un mensaje sea el que lo creo

        return $user->id === $articulo->user_id;



    }


    public function delete(User $user, Articulo $articulo)
    {
        return $user->id === $articulo->user_id;
    }






}
