<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Student;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get all of the students for the user.
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }

    /**
     * Get all of the roles of the user.
     */
     public function roles()
     {
         return $this->belongsToMany(Role::class);
     }

    /**
     * Check whether user has a particular role.
     */
     public function hasRole($name)
     {
         foreach ($this->roles as $role)
         {
             if ($role->name == $name) return true;
         }

         return false;
     }

     /**
      * Assign a role to the user.
      */
      public function assignRole($role)
      {
          return $this->roles()->attach($role);
      }

    /**
     * Remove a role from a user.
     */
     public function removeRole($role)
     {
         return $this->roles()->detach($role);
     }


}
