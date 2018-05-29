@foreach($users as $user)
	<li>{!! $user['firstname'] !!} {!! $user['lastname'] !!} from {!! $user['location'] !!} </li>

	{{ $user ['firstname']}}
@endforeach
