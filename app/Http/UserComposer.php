<?php

namespace App\Http;

use Illuminate\View\View;
use App\User;
class UserComposer 
{
    
    protected $users;

    public function __construct(User $users)
    {
        $this->users = $users;
    }

    public function compose(View $view){
        $view->with('name', $this->users->all());
    }

}


?>