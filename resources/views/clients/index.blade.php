@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registered Clients') }}</div>

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
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;

                    @endphp
                    @if (!empty($clients))
                    @foreach ($clients as $client)
                    <tr>
                        <th scope="row">{{$i++}}</th>
                        <td>{{strtoupper($client->first_name)}}</td>
                        <td>{{strtoupper($client->last_name)}}</td>
                        <td><a href="{{route('show',['id'=>$client->id])}}" class="text-secondary font-weight-normal text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            view
                          </a></td>
                      </tr>
                    @endforeach

                    @else
                      <p>No Record found</p>
                    @endif

                </tbody>
              </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection