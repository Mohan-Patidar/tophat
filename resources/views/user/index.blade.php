@extends('layouts.app')
@section('content')

<table>
    <thead>
        <tr>
            <th>User Id</th>
            <th>User Name</th>
            <th>Email Id</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
            <td>
                <a  href="{{route('users.edit',$user->id)}}">Edit</a>

                <form action="{{url('users', [$user->id])}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-danger" value="Delete"/>
                </form>               
                               
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

