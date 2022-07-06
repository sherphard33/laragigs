<h1>{{ $heading }}</h1>
@if (count($listings) == 0)
<h3>No Listings found</h3>
    
@endif

@foreach ($listings as $key)
    <h3>{{$key['id']}}</h3>
    <h3>{{$key['title']}}</h3>
    <p>{{$key['description'] }}</p>
 
@endforeach