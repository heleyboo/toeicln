@extends('layouts.admin')
@section('content')
        <form action="{{ route('backend_contact_update', $contact->id) }}" method="POST" class="form col-md-4 col-md-offset-4">
        {{ method_field('POST') }}
        {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Office Name</label>
                <input type="text" class="form-control" id="officeName" name="officename" value="{{$contact->officename}}">
            </div>
            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" class="form-control" id="contact" name="contact" value="{{$contact->contact}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$contact->email}}">
            </div>
            <div class="form-group">
                <label for="phonenumber">Phone Number</label>
                <input type="text" class="form-control" id="phonenumber" name="phonenumber" value="{{$contact->phonenumber}}">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="{{$contact->address}}">
            </div>
            </template>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>    
@endsection    