<?php

namespace App\Repositories;

use Auth;
use App\Contact;
use App\Scopes\StatusScope;

class ContactRepository
{
    use BaseRepository;

    /**
     * User Model
     *
     * @var User
     */
    protected $model;

    /**
     * Constructor
     *
     * @param User $user
     */
    public function __construct(Contact $contact)
    {
        $this->model = $contact;
    }
    /**
     * Get number of the records
     *
     * @param  int $number
     * @param  string $sort
     * @param  string $sortColumn
     * @return Paginate
     */
    public function page($number = 10, $sort = 'desc', $sortColumn = 'officename')
    {
        return $this->model->withoutGlobalScope(StatusScope::class)->orderBy($sortColumn, $sort)->paginate($number);
    }

    /**
     * Get the article record without draft scope.
     * 
     * @param  int $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->withoutGlobalScope(StatusScope::class)->findOrFail($id);
    }

    /**
     * Update the article record without draft scope.
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



    // /**
    //  * Change the user password.
    //  * 
    //  * @param  App\User $user 
    //  * @param  string $password
    //  * @return boolean
    //  */
    // public function changePassword($user, $password)
    // {
    //     return $user->update(['password' => bcrypt($password)]);
    // }

    // /**
    //  * Save the user avatar path.
    //  * 
    //  * @param  int $id
    //  * @param  string $photo
    //  * @return boolean
    //  */
    // public function saveAvatar($id, $photo)
    // {
    //     $user = $this->getById($id);

    //     $user->avatar = $photo;

    //     return $user->save();
    // }

    public function store($contact) 
    {

        return $this->save($this->model, $contact);
    }

    /**
     * Delete the draft article.
     *
     * @param int $id
     * @return boolean
     */
    public function destroy($id)
    {
        return $this->getById($id)->delete();
    }
}
