@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Client') }}</div>

                <div class="card-body">
                    @if(Session::has('error_message'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Error</strong> {{Session::get('error_message')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                      </button>
                    </div>
                    @endif
                    @if(Session::has('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      <strong>Success</strong> {{Session::get('success_message')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

              </div>
              @endif

              <img src="{{ $client->profile_image ? asset('storage/profile_images/'.$client->profile_image)
              : asset('storage/profile_images/default.png') }}" class="card-img-top" width="200" height="300" alt="Profile Image">

                <div class="card-body">
                  <h5 class="card-title">Name: {{$client->first_name.' '.$client->last_name}}</h5>
                  <h5 class="card-title">Email: {{$client->email}}</h5>
                  <h5 class="card-title">Profiled: {{date("d-m-Y", strtotime($client->date_profiled))}}</h5>

                  <p class="card-text">Case Details:{{$client->case_details}}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Primary Legal Counsel: {{$client->primary_legal_counsel}}</li>
                  <li class="list-group-item">Date of birth: {{date("d-m-Y", strtotime($client->date_of_birth))}}</li>
                </ul>
                <div class="card-body">
                  <a href="{{route('/')}}" class="card-link">Back to main</a>
                  <a href="{{route('create')}}" class="card-link">Create Another</a>
                </div>
              </div>


            </div>
        </div>
    </div>
</div>
@endsection

