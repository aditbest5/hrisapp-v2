@extends('layouts.apps')

@section('content')
    <!-- <div class="container">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                <div class="row justify-content-center">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    <div class="col-md-8">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="card">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="card-header">Dashboard</div>

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="card-body">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                @if (session('status'))
    <div class="alert alert-success" role="alert">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        {{ session('status') }}
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
    @endif

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                You are logged in!
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            </div> -->
    <div class="d-flex flex-row justify-content-center mt-5 p-5">
        <div class="card my-5 bg-light p-5">
            <div class="card-title">
                <h1 class="mb-5">Add Employee</h1>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%; background-color:#EEB266;"
                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="card-body">
                <form action="/create-department" method="POST" class="d-flex flex-column gap-4">
                    @csrf
                    <div class="row g-xl-5">
                        <div class="col">
                            <label for="first_name" class="form-label fs-2">First Name</label>
                            <input type="text" class="form-control fs-5 @error('first_name') is-invalid @enderror"
                                style="background-color:#EEB26626" id="department-code" name="first_name"
                                placeholder="First Name">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col">
                            <label for="last_name" class="form-label fs-2">Last Name</label>
                            <input type="text" class="form-control fs-5  @error('last_name') is-invalid @enderror"
                                style="background-color:#EEB26626" id="first_name" placeholder="Last Name" name="last_name">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-xl-5">
                        <div class="col">
                            <label for="employee_code" class="form-label fs-2">Employee Code</label>
                            <input type="text" class="form-control fs-5  @error('employee_code') is-invalid @enderror"
                                style="background-color:#EEB26626" id="employee_code" name="employee_code"
                                placeholder="Employee Code">
                            @error('employee_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="job_title" class="form-label fs-2">Job Title</label>
                            <select class="form-control fs-5  @error('job_title') is-invalid @enderror"
                                style="background-color:#EEB26626" id="job_title" placeholder="Choose A Job"
                                name="job_title">
                                @foreach ($jobTitles as $jobTitle)
                                    <option value={{ $jobTitle->id }}>{{ $jobTitle->kode }} - {{ $jobTitle->nama }}</option>
                                @endforeach
                            </select>
                            @error('job_title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-xl-5">
                        <div class="col">
                            <label for="id_card" class="form-label fs-2">ID Card Number</label>
                            <input type="text" class="form-control fs-5  @error('id_card') is-invalid @enderror"
                                style="background-color:#EEB26626" id="id_card" name="id_card"
                                placeholder="ID Card Number">
                            @error('id_card')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="id_family" class="form-label fs-2">Family ID Number</label>
                            <input type="text" class="form-control fs-5  @error('id_family') is-invalid @enderror"
                                style="background-color:#EEB26626" id="id_family" placeholder="Family ID Number"
                                name="id_family">
                            @error('id_family')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-xl-5">
                        <div class="col">
                            <label for="birth_place" class="form-label fs-2">Place of Birth</label>
                            <input type="text" class="form-control fs-5  @error('birth_place') is-invalid @enderror"
                                style="background-color:#EEB26626" id="birth_place" name="birth_place"
                                placeholder="Place of Birth">
                            @error('birth_place')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="id_family" class="form-label fs-2">Date of Birth</label>
                            <input type="date" class="form-control fs-5  @error('id_family') is-invalid @enderror"
                                style="background-color:#EEB26626" id="id_family" placeholder="Familiy ID Number"
                                name="id_family">
                            @error('id_family')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
            </div>
            <div class="d-flex flex-row justify-content-center gap-5">
                <a href="/department"><button type="button"
                        class="btn btn-light border-warning btn-lg">Cancel</button></a>
                <button type="submit" class="btn btn-warning btn-lg text-light">Next</button>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
