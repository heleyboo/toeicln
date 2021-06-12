<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Repositories\MenuRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ArticleRepository;
use Illuminate\Http\Request;

class MenuController extends Controller {
    protected $menu;
    protected $category;
    protected $article;
    
    public function __construct(
        MenuRepository $menuRepository,
        CategoryRepository $categoryRepository,
        ArticleRepository $articleRepository
    ) 
    {
        $this->menu = $menuRepository;
        $this->category = $categoryRepository;
        $this->article = $articleRepository;
    }

    public function index()
    {
        $menus = $this->menu->all();
        return view('backend.menus.index', compact('menus'));
    }

    public function create(Request $request) {
        $this->menu->store($request->all());
        return redirect()->route('backend_menus');
    }

    public function view($menuId) {

    }

    public function edit($menuId) {
        $categories = $this->category->all();
        $articles = $this->article->all();
        $menu = $this->menu->getById($menuId);
        $rootMenuItems = $menu->items->where('parent_id', 0);
        return view('backend.menus.edit', compact(
            'categories', 
            'menu', 
            'rootMenuItems',
            'articles'
        ));
    }

    public function delete($menuId) {
        $this->menu->destroy($menuId);
        return redirect()->route('backend_menus');
    }
}