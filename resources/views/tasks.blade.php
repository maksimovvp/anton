@extends('layouts.app')

@section('content')
	<h2>Список дел</h2>
	@forelse ($tasks as $task)
		<div>{{ $task->name }}</div>
	@empty
		<div>Все сделано</div>
	@endforelse
@endsection