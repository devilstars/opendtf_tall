<?php

namespace App\Http\Livewire\Auth\Modals;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    /** @var string */
    public $name = '';

    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var string */
    public $passwordConfirmation = '';

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register()
    {
        $this->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8', 'same:passwordConfirmation'],
        ]);

        $user = User::create([
            'email' => $this->email,
            'name' => $this->name,
            'password' => Hash::make($this->password),
        ]);

        event(new Registered($user));

        /* Assign default roles */
        app('ACL')->syncRoles($user, ['User']);

        Auth::login($user, true);

        session()->flash('closeAuthModal', true);

        return redirect()->intended(route('front.home'));
    }

    public function render()
    {
        return view('livewire.auth.modals.register');
    }
}
