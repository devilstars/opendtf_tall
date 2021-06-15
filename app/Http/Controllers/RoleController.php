<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        if (!auth()->user()->can('dashboard_roles_view')) {
            return redirect(route('front.home'));
        }

        $items = app('ACL')->getRoles();

        return view('pages.dashboard.roles.index', compact([
            'items',
        ]));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function edit()
    {
        if (!auth()->user()->canAny(['dashboard_roles_view', 'dashboard_roles_edit'])) {
            return redirect(route('front.home'));
        }

        return view('pages.dashboard.roles.edit');
    }
}
