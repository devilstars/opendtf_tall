<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push(__('front.nav.home'), route('front.home'));
});

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push(__('front.nav.dashboard'), route('front.dashboard'));
});

Breadcrumbs::for('dashboard.roles', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push(__('front.nav.roles'), route('front.dashboard.roles'));
});

Breadcrumbs::for('dashboard.role', function (BreadcrumbTrail $trail, $item) {
    $trail->parent('dashboard.roles');
    $trail->push($item->name, route('front.dashboard.roles.edit', $item->id));
});
