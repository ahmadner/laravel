@extends('layouts.master')

@section('title','department')

@section('content')
<section class=" mx-5 mt-4">
<form method="POST" action="{{ route('department.store') }}" class="row g-3">
    @csrf
    <div class="col-md-6">
      <label for="departmentName" class="form-label">department name</label>
      <input name='departmentName' type="text" class="form-control" id="departmentName" placeholder="dpartment name">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">create department</button>
    </div>
  </form>
</section>

@endsection
