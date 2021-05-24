<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class FillACL extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'acl:fill';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fill database with default ROLES and PERMISSIONS';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return boolean
     */
    public function handle(): bool
    {
        $this->roles();
        $this->permissions();

        $this->superUserPermission();

        return true;
    }

    private function roles()
    {
        /** @var array $roles */
        $roles = [
            ['name' => 'Super User'],
            ['name' => 'Moderator'],
            ['name' => 'User']
        ];

        $this->createRoles($roles);
    }

    /**
     * @param array $roles
     */
    private function createRoles(array $roles)
    {
        foreach ($roles as $role) {
            try {
                Role::query()->create($role);
            } catch (\Exception $e) {
                continue;
            }
        }
    }

    private function permissions()
    {
        $permissions = [
            // super user
            ['name' => 'super_user'],

            // admin
            ['name' => 'dashboard_view'],
            ['name' => 'dashboard_users_view'],
            ['name' => 'dashboard_users_edit'],
            ['name' => 'dashboard_users_block'],

            // basic user
            ['name' => 'post_create'],
            ['name' => 'post_edit'],
            ['name' => 'post_hide'],
            ['name' => 'post_delete']
        ];

        $this->createPermissions($permissions);
    }

    /**
     * @param array $permissions
     */
    private function createPermissions(array $permissions)
    {
        foreach ($permissions as $permission) {
            try {
                Permission::query()->create($permission);
            } catch (\Exception $e) {
                continue;
            }
        }
    }

    private function superUserPermission()
    {
        $role = Role::query()
            ->where('name', 'Super User')
            ->firstOrFail();

        $permission = Permission::query()
            ->where('name', 'super_user')
            ->firstOrFail();

        try {
            $role->givePermissionTo($permission);
        } catch (\Exception $e) {
            return;
        }
    }
}
