@extends('layouts.admin')
@section('content')
<div class="row">
        <form method="POST" action="{{ route('backend_user_update', $user->id) }}" class="form col-md-4 col-md-offset-4">
        {{ csrf_field() }}
        <div class="form-group text-center">
                <img src="https://pigjian.com/uploads/default_avatar.png" id="avatar" name="avatar" class="img-circle" width="100">
            </div>
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $errors->has('name') ? old('name') : $user->name }}">
                @if($errors->has('name'))
                <span class='text-danger'>{{$errors->first('name')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $errors->has('email') ? old('email') : $user->email }}">
                @if($errors->has('email'))
                <span class='text-danger'>{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection    