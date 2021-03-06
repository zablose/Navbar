<?php

namespace App\Http\ViewComposers;

use App\Http\Navigation\NavbarBuilder;
use App\Http\Navigation\NavbarRepo;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Zablose\Navbar\NavbarConfig;

class NavbarComposer
{
    public function compose(View $view)
    {
        $path = Request::path();

        $role = (stripos($path, 'home') === false) ? 'public' : 'user';

        $view->with(
            'navbar',
            new NavbarBuilder(
                new NavbarRepo(),
                (new NavbarConfig(config('navbar')))
                    ->setPath($path)
                    ->setRoles([$role])
            )
        );
    }
}
