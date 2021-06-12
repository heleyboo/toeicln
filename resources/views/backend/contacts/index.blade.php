@extends('layouts.admin')
@section('content')
<div class="box">
<div class="box-header with-border">
          <h3 class="box-title">Contacts</h3>
          <div slot="buttons">
          <a class="btn btn-success pull-right" href="{{ route('backend_contact_form') }}" ><i class="ion-edit"></i>Create</a>
          </div>
</div>
        <div class="box-body table-responsive no-padding">
              <table class="table table-striped table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Office Name</th>
                  <th>Contact</th>
                  <th>Email</th>
                  <th>Phone Number</th>
                  <th>Address</th>
                  <th>Action</th>
                </tr>
                <?php foreach($contacts as $contact): ?>
                <tr>
                  <td>{{ $contact->id }}</td>
                  <td>{{ $contact->officename }}</td>
                  <td>{{ $contact->contact }}</td>
                  <td>{{ $contact->email}}</td>
                  <td>{{ $contact->phonenumber}}</td>
                  <td>{{ $contact->address}}</td>
                  <td style="width: 200px;">
                      <a class="btn btn-info" href="{{ route('backend_contact_edit', $contact->id) }}" ><i class="ion-edit"></i></a>
                      <a class="btn btn-danger" href="{{ route('backend_contact_delete', $contact->id)}}"><i class="ion-trash-b"></i></a>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody></table>
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->
@endsection