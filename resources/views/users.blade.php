@extends('layouts.app')

@section('content')
	<h2>Список пользователей</h2>
	@forelse ($users as $user)
		<div><a href="{{ URL::route('userTasks', ['id' => $user->id]) }}">{{ $user->name }} {{ $user->lastName }}</a></div>
	@empty
		<div>Никого</div>
	@endforelse
@endsection