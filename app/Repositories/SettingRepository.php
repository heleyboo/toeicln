<?php

namespace App\Repositories;

use App\Setting;

class SettingRepository
{
    use BaseRepository;

    protected $model;

    public function __construct(Setting $setting)
    {
        $this->model = $setting;
    }

    /**
     * Get record by the name.
     * 
     * @param  string $name
     * @return collection
     */
    public function getByName($name)
    {
        return $this->model->where('name', $name)->first();
    }

    public function page($number = 10, $sort = 'desc', $sortColumn = 'created_at')
    {
        $this->model = $this->checkAuthScope();

        return $this->model->orderBy($sortColumn, $sort)->paginate($number);
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
