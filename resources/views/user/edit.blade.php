@extends('layouts.app')
@section('content')

<div>
    <form method="Post" action="{{route('users.update',$users->id)}}">
        <input type="hidden" name="_method" value="PUT">
        @csrf
            <div>
                <input type="hidden" name="id" value="{{$users->id}}" />
                <label>User Name</label>
                <input type="text" name="name" value="{{$users->name}}">
            </div>
            <div>
                <label>Email Id</label>
                <input type="text" name="email" value="{{$users->email}}">
            </div>
            <div>
                <input type="submit" name="save" value="Update User">
            </div>
    </form>
</div>

@endsection