<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ isset($user) ? $user->name : old('name') }}" placeholder="Enter the name of user">
    @error('name')
        <p class="text-danger">{{ $errors->first('name') }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ isset($user) ? $user->email : old('email') }}" placeholder="Enter the email of user">
    @error('email')
        <p class="text-danger">{{ $errors->first('email') }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="roles">Roles</label>
    <select name="roles[]" id="roles" class="form-control select2" multiple>
    @foreach($roles as $role)
        <option value="{{ $role->id }}" {{ isset($user) ? ($user->hasRole($role->name) ? 'selected' : '') : '' }}>{{ $role->name }}</option>
    @endforeach
    </select>
    @error('roles')
        <p class="text-danger">{{ $errors->first('roles') }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Enter the password of user">
    @error('password')
        <p class="text-danger">{{ $errors->first('password') }}</p>
    @enderror
</div>
