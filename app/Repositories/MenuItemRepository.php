<?php

namespace App\Repositories;

use App\MenuItem;
use App\Scopes\DraftScope;

class MenuItemRepository
{
    use BaseRepository;

    protected $model;


    public function __construct(MenuItem $menuItem)
    {
        $this->model = $menuItem;
    }
 
}
