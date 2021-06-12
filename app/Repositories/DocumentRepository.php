<?php

namespace App\Repositories;

use Auth;
use App\Document;
use App\Scopes\StatusScope;

class DocumentRepository
{
    use BaseRepository;

    protected $model;

    public function __construct(Document $document)
    {
        $this->model = $document;
    }

    /**
     * Get number of the records
     *
     * @param  int $number
     * @param  string $sort
     * @param  string $sortColumn
     * @return Paginate
     */
    public function page($number = 10, $sort = 'asc', $sortColumn = 'text')
    {
        return $this->model->withoutGlobalScope(StatusScope::class)->orderBy($sortColumn, $sort)->paginate($number);
    }

    /**
     * Get the document record without draft scope.
     * 
     * @param  int $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->withoutGlobalScope(StatusScope::class)->findOrFail($id);
    }

    /**
     * Update the document record without draft scope.
     * 
     * @param  int $id
     * @param  array $input
     * @return boolean
     */
    public function update($id, $input)
    {
        $this->model = $this->model->withoutGlobalScope(StatusScope::class)->findOrFail($id);
        return $this->save($this->model, $input);
    }


    public function store($contact) 
    {

        return $this->save($this->model, $contact);
    }

    /**
     * Delete the draft document.
     *
     * @param int $id
     * @return boolean
     */
    public function destroy($id)
    {
        return $this->getById($id)->delete();
    }
}
