<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class AssignSuperUserACL extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'acl:super-user {userId}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign "super user" role to userId';

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
        $user = User::query()
            ->where('id', $this->argument('userId'))
            ->firstOrFail();

        $user->assignRole('Super User');

        return true;
    }
}
