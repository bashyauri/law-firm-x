@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Client') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="name" autofocus>

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="name" autofocus>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="date_profiled" class="col-md-4 col-form-label text-md-end">{{ __('Date Profiled') }}</label>

                            <div class="col-md-6">
                                <input id="date_profiled" type="date" class="form-control @error('date_profiled') is-invalid @enderror" name="date_profiled" value="{{ old('date_profiled') }}" required autocomplete="email">

                                @error('date_profiled')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="primary_legal_counsel" class="col-md-4 col-form-label text-md-end">{{ __('Primary Legal Counsel') }}</label>

                            <div class="col-md-6">
                                <input id="primary_legal_counsel" type="text" class="form-control @error('primary_legal_counsel') is-invalid @enderror" name="primary_legal_counsel" required autocomplete="primary_legal_counsel">

                                @error('primary_legal_counsel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="date_of_birth" class="col-md-4 col-form-label text-md-end">{{ __('Date of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="date_of_birth" type="date" class="form-control" name="date_of_birth" required autocomplete="date_of_birth">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="case_details" class="col-md-4 col-form-label text-md-end">{{ __('Case Details') }}</label>

                            <div class="col-md-6">
                                <textarea id="case_details" name="case_details"  class="form-control" rows="4" cols="50"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="case_details" class="col-md-4 col-form-label text-md-end">{{ __('Upload Passport') }}</label>

                            <div class="col-md-6">
                                <input id="profile_image" type="file" class="form-control" name="profile_image" >
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
