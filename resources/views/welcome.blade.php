@extends('layouts.app')
@section('content')
	<div class="title m-b-md">
		Laravel
	</div>

	<div class="links">
		<a href="{{ URL::route('allUsers') }}">Список всех пользователей</a>
		<a href="{{ URL::route('allTasks') }}">Список всех задач</a>
	</div>
@endsection				