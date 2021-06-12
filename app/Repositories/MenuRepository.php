<?php

namespace App\Repositories;

use App\Menu;
use App\Scopes\DraftScope;

class MenuRepository
{
    use BaseRepository;

    protected $model;


    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }

    /**
     * Get the menu record without draft scope.
     * 
     * @param  int $id
     * @return mixed
     */
     public function getById($id)
     {
         return $this->model->withoutGlobalScope(DraftScope::class)->findOrFail($id);
     }
}
