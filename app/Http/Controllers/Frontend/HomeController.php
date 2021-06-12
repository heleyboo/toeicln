<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\TagRepository;
use App\Repositories\ContactRepository;

class HomeController extends Controller
{
    protected $article;
    protected $category;
    protected $tag;
    protected $contact;

    public function __construct(
            ArticleRepository $article, 
            CategoryRepository $category,
            TagRepository $tag,
            ContactRepository $contact
            )
    {
        $this->article = $article;
        $this->category = $category;
        $this->tag = $tag;
        $this->contact = $contact;
    }

    public function index() {
        return view('frontend.index');
    }
    public function getBySlug($slugId)
    {
        $article = $this->article->getBySlug($slugId);
        return view('frontend.single', compact('article'));
    }

    public function getCategoryBySlug($slug) {
        $category = $this->category->getBySlug($slug);
        return view('frontend.category', compact('category'));
    }

    public function contact() {
        $contacts = $this->contact->all();
        return view('frontend.contact', compact('contacts'));
    }
    public function search(Request $request) {
        $key = trim($request->get('query'));
        $articles = $this->article->search($key);
        return view('frontend.search', compact('articles', 'key'));
    }

}
