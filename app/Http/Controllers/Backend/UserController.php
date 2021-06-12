<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;


class UserController extends Controller {
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index() 
    {
        $users = $this->userRepository->page();
        return view('backend.users.index', compact('users'));
    }

    public function getById($userId)
    {
        $user = $this->userRepository->getById($userId);
        return view('backend.users.edit', compact('user'));
    }

    public function update(UserUpdateRequest $request, $userId)
    {
        $this->userRepository->update($userId, $request->all());
        return redirect()->route('backend_users_index');
    }

    public function add(UserRequest $request)
    {
        $data = array_merge($request->all(), [
            'password' => bcrypt($request->get('password')),
            'confirm_code' => str_random(64)
        ]);
        $this->userRepository->saveUser($data);
        return redirect()->route('backend_users_index');
    }

    public function getUserForm()
    {
        return view('backend.users.add');
    }

    public function delete($userId)
    {
        $this->userRepository->destroy($userId);
        return redirect()->route('backend_users_index');
    }
}