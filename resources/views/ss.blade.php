@foreach ($schools as $school )
<h4>{{ $school->school_name}}</h4>
<h3>{{ $school->student }}</h3> 
@endforeach
