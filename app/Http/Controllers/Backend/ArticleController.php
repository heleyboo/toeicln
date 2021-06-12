<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Repositories\ArticleRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\TagRepository;
use App\Http\Requests\UpdateArticleRequest;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    protected $article;
    protected $category;
    protected $tag;
    protected $manager;

    public function __construct(
            ArticleRepository $article, 
            CategoryRepository $category,
            TagRepository $tag
            )
    {
        $this->manager = app('uploader');
        $this->article = $article;
        $this->category = $category;
        $this->tag = $tag;
    }

    public function index()
    {
        $articles = $this->article->all();
        return view('backend.articles.index', compact('articles'));
    }
    
    public function view($articleId) {
        $article = $this->article->getById($articleId);
        return view('backend.article.show', compact('article'));
    }
    
    public function destroy($articleId) {
        $this->article->destroy($articleId);
        return redirect()->route('backend_articles');
    }
    
    public function edit($articleId) {
        $categories = $this->category->all();
        $tags = $this->tag->all();
        $article = $this->article->getById($articleId);
        $articleTags = [];
        foreach($article->tags as $tag) {
            $articleTags[] = $tag->id;
        }
        return view('backend.articles.edit', compact('article', 'categories', 'tags', 'articleTags'));
    }
    
    public function update(UpdateArticleRequest $request, $id)
    {       
        
        $data = array_merge($request->all(), [
            'last_user_id' => \Auth::id(),
        ]);

        if ($request->file('page_image')) {
            $imagePath = $request->file('page_image')->store('page_image');
            $data['page_image']    = '/storage/' . $imagePath;
        }

        
        //$data['slug'] = str_slug($data['title']);
        $data['is_draft']    = false;
        $data['is_original'] = false;
        
        unset($data['tags']);
        $this->article->update($id, $data);
        if($request->get('tags')) {
			$this->article->syncTag($request->get('tags'));
		}

        return redirect()->route("backend_articles_edit",$id);
    }
    
    public function add()
    {
        $categories = $this->category->all();
        $tags = $this->tag->all();
        return view('backend.articles.add', compact('article', 'categories', 'tags'));
    }
    
    public function create(ArticleRequest $request)
    {
        $data = array_merge($request->all(), [
            'user_id'      => \Auth::id(),
            'last_user_id' => \Auth::id()
        ]);
        if ($request->file('page_image')) {
            $imagePath = $request->file('page_image')->store('page_image');
            $data['page_image']    = '/storage/' . $imagePath;
        } else {
            $data['page_image'] = config('blog.default_page_image');
        }

        if ($data['slug'] == '') {
            $data['slug'] = str_slug($data['title']);
        }
        
        $data['is_draft']    = false;
        $data['is_original'] = true;
        unset($data['tags']);


        $this->article->store($data);
		if($request->get('tags')) {
			$this->article->syncTag($request->get('tags'));
		}
        

        return redirect()->route("backend_articles");
    }
}
