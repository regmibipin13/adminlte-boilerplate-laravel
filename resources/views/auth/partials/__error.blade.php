@if($errors->any()) 

@foreach($errors->all() as $error)

    <p class="text-danger">{{ $error }}</p>

@endforeach

@endif