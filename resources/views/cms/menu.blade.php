<!-- Menu Items -->
<li>
  <a href="{{ url('/tournament') }}">
  	Torneos
  </a>
</li>
@foreach(App\Team::all() as $team)
<li>
  <a href="{{ route('team.view', $team->id) }}">
    {{$team->name}}
  </a>
</li>
@endforeach