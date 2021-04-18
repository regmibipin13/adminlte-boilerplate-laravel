@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid pt-3">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Permissions') }}</h3>

                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <div class="row mb-2">
                                    <div class="col-md-2">
                                        <a href="" class="btn btn-success">Add New</a>
                                    </div>
                                    <div class="col-md-7">

                                    </div>
                                    <div class="col-md-3">
                                        <form action="{{ route('permissions.index') }}" method="GET">
                                            <input type="search" name="search" value="{{ old('search') }}" placeholder="Search" class="form-control">
                                        </form>
                                    </div>
                                </div>
                            </thead>
                            <thead>
                              <tr>
                                <th>
                                    <input type="checkbox" class="form-check-group" name="all_ids" id="all_ids">
                                </th>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="checkbox" class="form-check-group" name="column_id" id="column_id"></td>
                                    <td>1</td>
                                    <td>access_permissions</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection