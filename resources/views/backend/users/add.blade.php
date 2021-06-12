@extends('layouts.admin')
@section('content')
        <form action="{{ route('backend_user_add') }}" method="POST" class="form col-md-4 col-md-offset-4">
        {{ method_field('POST') }}
        {{ csrf_field() }}
            <div class="form-group text-center">
            <img src="https://pigjian.com/uploads/default_avatar.png" id="avatar" name="avatar" class="img-circle" width="100">
            </div>
            <div class="form-group">
                <label for="name">User Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                @if($errors->has('name'))
                <span class='text-danger'>{{$errors->first('name')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                @if($errors->has('email'))
                <span class='text-danger'>{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="nickname">Nick Name</label>
                <input type="text" class="form-control" id="nickname" name="nickname" value="{{ old('nickname') }}">
            </div>
            <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    @if($errors->has('password'))
                    <span class='text-danger'>{{$errors->first('password')}}</span>
                    @endif
            </div>
            </template>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>    
@endsection    