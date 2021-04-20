@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid pt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Settings
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('settings.update.all') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                @if(count($settings) > 0)
                                @foreach($settings as $setting)
                                    @if($setting->type == "file" || $setting->type == "image")
                                    <div class="col-md-12">
                                        <img src="{{ $setting->value }}" alt="{{ $setting->name }}" width="200" height="200">
                                    </div>
                                    @endif
                                    <div class="col-md-12 form-group">
                                        <label for="{{ $setting->label }}">{{ $setting->label }}</label>
                                        {!! get_input_type($setting) !!}
                                    </div>
                                @endforeach
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Save Setting</button>
                                </div>
                                @else
                                <div class="col-md-12 text-secondary text-center">
                                    No Settings Available
                                </div>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Create a new Setting
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('settings.store') }}" method="POST">
                            @csrf
                            <div class="row d-flex align-items-center">
                                <div class="col-md-3">
                                    <label for="label">Label</label>
                                    <input type="text" class="form-control" name="label" placeholder="Label of the setting">
                                </div>
                                <div class="col-md-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="Name of the setting">
                                </div>
                                <div class="col-md-3">
                                    <label for="type">Type</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="text" selected>Text</option>
                                        <option value="textarea">Textarea</option>
                                        <option value="file">Image</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for=""></label><br>
                                    <button type="submit" class="btn btn-success">Create Setting</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">
                            Delete A Setting
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('settings.delete') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">Setting Label</label>
                                <select name="id" id="name" class="form-control" required>
                                    <option selected>Select A Setting</option>
                                    @foreach($settings as $setting)
                                        <option value="{{ $setting->id }}">{{ $setting->label }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
