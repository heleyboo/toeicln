<?php

namespace App\Repositories;

use App\Slider;

class SliderRepository
{
    use BaseRepository;

    protected $model;

    public function __construct(Slider $slider)
    {
        $this->model = $slider;
    }
    public function getById($id) 
    {
        return $this->model->withoutGlobalScope(DraftScope::class)->findOrFail($id);
    }

    public function update($id, $input)
    {
        $this->model = $this->model->findOrFail($id);
        return $this->save($this->model, $input);
    }

    public function checkAuthScope()
    {
        if (auth()->check() && auth()->user()->is_admin) {
            $this->model = $this->model->withoutGlobalScope(DraftScope::class);
        }

        return $this->model;
    }

    public function delete($id)
    {
       return $this->getById($id)->delete();
    }

    
}
