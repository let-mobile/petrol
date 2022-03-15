@extends('layouts.master')
@section('content')
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active"
                        aria-current="page">User Manager</li>
                </ol>
            </nav>
            <h1 class="m-0">List</h1>
        </div>
        
    </div>
</div>
<div class="container-fluid page__container">
    <div class="card">
        <div class="table-reponsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>User name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @forelse ($users as $item)
                        <tr>
                            <td>
                                <div class="badge badge-soft-dark">#{{ $item->id ?? '' }}</div>
                            </td>
                            <td>{{$item->name }}</td>
                            <td>{{$item->email }}</td>
                            <td>
                            @foreach ($item->roles as $row)
                            {{$row->name}}
                            @endforeach
                        </td>

                            <td>
                                <form method="POST" action="{{ url('users/'. $item->id) }}" >
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ url('users/' . $item->id . '/edit') }}" class="btn btn-sm btn-primary">EDIT </a>
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')" type="submit">DELETE</button>
                                </form>
                            </td>
                        </tr>
                    @empty

                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
