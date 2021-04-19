@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Users') }}</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('users.index') }}" method="get">
                            <div class="row mb-2">
                                <div class="col-md-2">
                                    <a href="{{ route('users.create') }}" class="btn btn-success">Add New</a>
                                </div>
                                <div class="col-md-7">

                                </div>
                                <div class="col-md-3">
                                        <input type="search" name="search" value="{{ request()->search }}" placeholder="Search" class="form-control">
                                    </form>
                                </div>
                            </div>
                        </form>
                        <table class="table table-bordered table-hover">
                            <thead>
                              <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if(count($users) > 0)
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="{{ route('users.edit',$user->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm delete-button" onclick="document.getElementByClassName('delete-form').submit();">Delete</a>
                                            <form action="{{ route('users.destroy',$user->id) }}" method="POST" class="delete-form">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">No Data available</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer">
                        {{ $users->appends(Request::all())->links("pagination::bootstrap-4") }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
