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
        <a href="{{ url('roles/create') }}" class="btn btn-success ml-3">Create</a>
    </div>
</div>
<div class="container-fluid page__container">
    <div class="card">
        <div class="table-reponsive">
            <div class="container table-responsive text-center row">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Role name</th>
                        <th>Create At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($roles as $item)
                        <tr>
                            <td>
                                <div class="badge badge-soft-dark">#{{ $item->id ?? '' }}</div>
                            </td>
                            <td>{{$item->name }}</td>
                            <td>
                                <?php $dt = Carbon\Carbon::parse($item->created_at); echo $dt->diffForHumans(); ?>
                            </td>
                            <td>
                                <form method="POST" action="{{ url('roles'. $item->id) }}" >
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ url('roles/' . $item->id . '/edit') }}" class="btn btn-sm btn-primary">EDIT </a>
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
</div>
@endsection
