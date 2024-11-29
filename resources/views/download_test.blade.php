@extends('layouts.master')
@section('content')
	@foreach (get_class_methods('App\Http\Controllers\DownloadController') as $method)
		@include('download_test_component', ['method' => $method])
	@endforeach
@stop
@section('customScripts')
	<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
@stop
@section('customCSS')
	<style type="text/css">
		#content-row{
			max-width: none;
		}
	</style>
@stop