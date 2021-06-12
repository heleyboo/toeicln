@extends('layouts.admin')
@section('content')
  <div slot="buttons" class="box-body with-border">
    <a class="btn btn-success pull-right" href="{{ route('backend_user_form') }}" ><i class="ion-edit"></i>Create</a>
 </div> 
<div class="box-body table-responsive no-padding">   
              <table class="table table-striped table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Avartar</th>
                  <th>User Name</th>
                  <th>E-Mail Address</th>
                  <th>Status</th>
                  <th>Created At</th>
                  <th>Actions</th>
                </tr>
                <?php foreach($users as $user): ?>
                <tr>
                  <td>{{ $user->id }}</td>
                  <?php if(!$user->avatar) { $user->avatar='https://pigjian.com/uploads/default_avatar.png'; } ?>
                  <td><img src="{{$user->avatar}}" class="img-circle" width="50" height="50"></td>
                  <td>{{ $user->name }}</td>
                  <td>{{ $user->email}}</td>
                  <td>{{ $user->status}}</td>
                  <td>{{ $user->created_at}}</td>
                  <td style="width: 200px;">
                      <a class="btn btn-info" href="{{ route('backend_users_edit', $user->id) }}" ><i class="ion-edit"></i></a>
                      <a class="btn btn-danger" href="{{ route('backend_user_delete', $user->id) }}"><i class="ion-trash-b"></i></a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody></table>
</div>
@endsection