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
                <h1 class="mb-5">Add Division</h1>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%; background-color:#EEB266;"
                        aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="card-body">
                <form action="/create-division" method="POST" class="d-flex flex-column gap-4">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="department_code" class="form-label fs-2">Department Code</label>
                            <select class="form-control fs-5  @error('department_code') is-invalid @enderror"
                                style="background-color:#EEB26626" id="department_code" name="department_code"
                                placeholder="Choose Department">
                                @foreach ($departments as $department)
                                    <option value={{ $department->id }}>{{ $department->kode }} - {{ $department->nama }}
                                    </option>
                                @endforeach
                            </select>
                            @error('department_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>
                        <div class="col-12">
                            <label for="division_code" class="form-label fs-2">Division Code</label>
                            <input type="text" class="form-control fs-5  @error('division_code') is-invalid @enderror"
                                style="background-color:#EEB26626" id="division_code" placeholder="Division code"
                                name="division_code">
                            @error('division_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="division_name" class="form-label fs-2">Division Name</label>
                            <input type="text" class="form-control fs-5  @error('division_name') is-invalid @enderror"
                                style="background-color:#EEB26626" id="division_name" placeholder="Division Name"
                                name="division_name">
                            @error('division_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12 form-switch">
                            <label for="status" class="form-label fs-2" for="status">Division Status</label>
                            <div class="row">
                                <div class="col-2">
                                    <label for="" class="form-control-plaintext fs-5">Inactive</label>
                                </div>
                                <div class="col-2">
                                    <input name="status" class="form-check-input w-50 h-50"
                                        style="background-color:#EEB26626" type="checkbox" role="switch" value="1"
                                        id="status">
                                </div>
                                <div class="col-2">
                                    <label for="" class="form-control-plaintext fs-5">Active</label>
                                </div>
                            </div>
                        </div>
                        <div class="row-3">
                            <div class="col-12">
                                <label for="description" class="form-label fs-2">Division Description</label>
                                <textarea name="description" type="text" class="form-control fs-5  @error('description') is-invalid @enderror"
                                    style="background-color:#EEB26626" id="description" rows="10" cols="10"
                                    placeholder="Division Description"> </textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center gap-5">
                        <a href="/division"><button type="button"
                                class="btn btn-light border-warning btn-lg">Cancel</button></a>
                        <button type="submit" class="btn btn-warning btn-lg text-light">Confirm</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
