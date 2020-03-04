<?php


namespace App\Http\ViewComposers;


use App\User;
use Illuminate\View\View;

class ProfileComposer
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function compose(View $view)
    {
        $view->with('count', $this->user->count());
    }
}