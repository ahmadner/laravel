@extends('layouts.master')

@section('title','create employee')

@section('content')

<section class=" mx-5 mt-4">



    <form method="POST" action="{{ route('employee.store') }}" class="row g-3">
        @csrf
        <div class="col-md-6">
          <label for="fName" class="form-label">first name</label>
          <input name='firstName' type="text" class="form-control" id="fName" placeholder="first name">
        </div>
        <div class="col-md-6">
          <label for="lName" class="form-label">last name</label>
          <input name='lastName' type="text" class="form-control" id="lName" placeholder="last name">
        </div>

        <div class="col">
            <label for="username" class="form-label">username</label>
            <input name='username' type="text" class="form-control" id="username" placeholder="username">
          </div>

        <div class="col-12">
          <label for="phoneNumber" class="form-label">phone number</label>
          <input name='phoneNumber' id="phoneNumber" type="number" class="form-control" id="inputAddress" placeholder="phone number">
        </div>


        <div class="col-md-4">
            <label for="gender" class="form-label">gender</label>
            <select name='gender' id="gender" class="form-select">
              <option hidden>Gender</option>
              <option value='male'>male</option>
              <option value='femail'>female</option>
            </select>
        </div>



        <div class="col-12">
          <button type="submit" class="btn btn-primary">create employee</button>
        </div>
      </form>
</section>

@endsection
