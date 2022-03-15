@extends('layouts.master')
@section('content')
<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item active"
                        aria-current="page">All Units</li>
                </ol>
            </nav>
            <h1 class="m-0">List</h1>
        </div>
        <a href= "{{ url('units/create') }}" class="btn btn-info ml-3">Add Units</a>
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
                        <th>Name</th>
                        <th>Create at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($unit->isNotEmpty())
                    @foreach ($unit as $units)
                    <tr>
                      <td> {{ $units->id ?? '' }} </td>
                      <td> {{ $units->name ?? '' }} </td>
                      <td> {{ $units->created_at ?? '' }}</td>
                      <td>
                        <form method="POST" action="{{ url('units/'. $units->id) }}" >
                            @csrf
                            @method('DELETE')
                            <a href="{{ url('units/' . $units->id . '/edit') }}" class="btn btn-sm btn-primary">EDIT </a>
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete?')" type="submit">DELETE</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>
@endsection
