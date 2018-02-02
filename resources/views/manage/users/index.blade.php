@extends('layouts.manage')

@section('content')

<div class="container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">Manage Users</h1>
    </div>
    <div class="column">
      <a href="{{ route('users.create') }}" class="button is-primary is-pulled-right">
        <i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;Create New User
      </a>
    </div>
  </div>
  <hr class="m-t-0">
  <div class="card">
    <div class="card-content">
      <table class="table is-narrow is-fullwidth">
        <thead>
          <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date Created</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
          <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at->toFormattedDateString() }}</td>
            <td class="has-text-right">
              <a href="{{ route('users.show', $user->id) }}" class="button is-outlined m-r-5">View</a>
              <a href="{{ route('users.edit', $user->id) }}" class="button is-outlined">Edit</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  {{ $users->links() }}

</div>

@endsection