@extends('layouts.backend-dashboard.app')
@section('title','Add Posts')
@section('breadcrumb','Posts / Create')
@section('content')
  @include('Posts.Create.html')
@endsection

@section('extra_javascript')
  @include('Posts.Create.javascript')
@endsection
