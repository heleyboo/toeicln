<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\MenuRepository;
use App\Repositories\MenuItemRepository;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;

class MenuItemController extends Controller {
    protected $menu;
    protected $menuItem;
    protected $article;
    public function __construct(
        MenuRepository $menuRepository, 
        MenuItemRepository $menuItemRepository,
        ArticleRepository $articleRepository
        ) 
    {
        $this->menu = $menuRepository;
        $this->menuItem = $menuItemRepository;
        $this->article = $articleRepository;
    }

    public function create(Request $request)
    {
        $data = $request->all();
        if ($data['parent_id'] == 0) {
            $data['depth'] = 0;
        } else {
            $data['depth'] = 1;
        }
        $this->menuItem->store($data);
        return redirect()->route('backend_menus_edit', $request->get('menu_id'));
    }

    public function update(Request $request, $item_id)
    {
        $this->menuItem->update($item_id, $request->all());
        return redirect()->route('backend_menus_edit', $request->get('menu_id'));
    }

    public function delete($itemId)
    {
        $item = $this->menuItem->getById($itemId);
        if ($item) {
            $menuId = $item->menu->id;
            $this->menuItem->destroy($itemId);
            return redirect()->route('backend_menus_edit', $menuId);
        }
    }
}