<?php

namespace App\Http\Services;

use App\Models\User;

class ACLService
{
    /**
     * @param User $user
     * @param array $roles
     */
    public function syncRoles(User $user, array $roles)
    {
        $user->syncRoles($roles);
    }

    /**
     * @param User $user
     * @param array $roles
     */
    public function assignRoles(User $user, array $roles)
    {
        $user->assignRole($roles);
    }

    /**
     * @param User $user
     * @param string $role
     */
    public function removeRole(User $user, string $role)
    {
        $user->removeRole($role);
    }
}
