<?php

namespace App\Http\Livewire\Auth\Modals;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $email = '';

    /** @var string */
    public $password = '';

    /** @var boolean */
    public $remember = false;

    protected $rules = [
        'email' => ['required', 'email'],
        'password' => ['required'],
    ];

    public function authenticate()
    {
        $this->validate();

        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            $this->addError('email', trans('auth.failed'));

            return;
        }

        session()->flash('closeAuthModal', true);

        return redirect()->intended(route('front.home'));
    }

    public function render()
    {
        return view('livewire.auth.modals.login');
    }
}
