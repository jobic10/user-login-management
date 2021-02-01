@extends('templates.main')

@section('content')
<h3>Users</h3>
<div class="card">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-sm btn-primary">Edit</a></td>
              </tr>
            @endforeach
        </tbody>
      </table>
</div>
@endsection
