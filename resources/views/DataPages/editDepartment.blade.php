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
                <h1 class="mb-5">Edit Department</h1>
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
            </div>
            <div class="card-body">
                <form action="/update-department/{{ $departments->id }}" method="POST" class="d-flex flex-column gap-4">
                    @csrf
                    @method('PATCH')
                    <div class="row g-3">
                        <div class="col-12">
                            <label for="department_code" class="form-label fs-2">Department Code</label>
                            <input value="{{ $departments->kode }}" type="text" style="background-color:#EEB26626;"
                                class="form-control fs-5 @error('department_code') is-invalid @enderror"
                                id="department_code" name="department_code" placeholder="Department Code">
                            @error('department_code')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <label for="department_name" class="form-label fs-2">Department Name</label>
                            <input name="department_name" value="{{ $departments->nama }}" type="text"
                                style="background-color:#EEB26626;"
                                class="form-control fs-5 @error('department_name') is-invalid @enderror"
                                id="department_name" placeholder="Department Name">
                        </div>
                        <div class="col-12 form-switch">
                            <label for="status" class="form-label fs-2" for="status">Department Status</label>
                            <div class="row">
                                <div class="col-2">
                                    <label for="" class="form-control-plaintext fs-4">Inactive</label>
                                </div>
                                <div class="col-2">
                                    <input value="{{ $departments->status == 0 ? '1' : '0' }}" name="status"
                                        style="background-color: #EEB26626" class="form-check-input w-50" type="checkbox"
                                        role="switch" id="status">
                                </div>
                                <div class="col-2">
                                    <label for="" class="form-control-plaintext fs-4">Active</label>
                                </div>
                            </div>
                        </div>
                        <div class="row-3">
                            <div class="col-12">
                                <label for="desc" class="form-label fs-2">Department Description</label>
                                <textarea name="desc" type="text" style="background-color: #EEB26626"
                                    class="form-control fs-4
                                    @error('desc') is-invalid @enderror" id="desc"
                                    rows="10" cols="10" placeholder="Department Description">{{ $departments->keterangan }}</textarea>
                                @error('desc')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
            </div>
            <div class="d-flex flex-row justify-content-center gap-5">
                <a href="/department"><button type="button" class="btn btn-light border-warning btn-lg">Cancel</button></a>
                <button type="submit" class="btn btn-warning btn-lg">Confirm</button>
            </div>
            </form>
        </div>
    </div>
    </div>
@endsection
