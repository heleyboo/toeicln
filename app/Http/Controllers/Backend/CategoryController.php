<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller {
    protected $categoryRepository;
    public function __construct(
        CategoryRepository $categoryRepository
    ) 
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->page(config('blog.category.number'), config('blog.category.sort'), config('blog.category.sortColumn'));
        return view('backend.categories.index', compact('categories'));
    }

    public function edit($category)
    {
        $category = $this->categoryRepository->getById($category);
        return view('backend.categories.edit', compact('category'));
    }

    public function view($category)
    {
        $category = $this->categoryRepository->getById($category);
        return view('backend.categories.view', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = str_slug($data['name']);
        $data['path'] = '/category' . '/' .  $data['slug'];
        $updatedCategory = $this->categoryRepository->update($id, $data);
        
        return redirect()->route("backend_category_view", $id);
    }

    public function delete($categoryId)
    {
        $this->categoryRepository->delete($categoryId);
        return redirect()->route("categories_view");
    }

    public function add()
    {
        return view('backend.categories.add');
    }

    public function create(CategoryRequest $request)
    {
        $data = $request->all();
        $data['slug'] = str_slug($data['name']);
        $data['path'] = '/category' . '/' .  $data['slug'];
        $this->categoryRepository->store($data);
        return redirect()->route('categories_view');
    }
}