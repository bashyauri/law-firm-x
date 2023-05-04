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
              @empty($clients)
              <div class="form-group col-md-4">
                <label for="last-name-filter">Filter by last name:</label>
                <input type="text" class="form-control" id="last-name-filter">
            </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="client-list">

                    @php
                        $i = 1;

                    @endphp

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

                </tbody>
              </table>
              @else
              <p>No Clients found</p>
          @endempty
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(() => {
    const rows = $("#client-list tr");
    const lastNameFilter = $("#last-name-filter");

    lastNameFilter.on("input", () => {
      const filterValue = lastNameFilter.val().toUpperCase();
      rows.each((index, element) => {
        const lastName = $(element).find("td:nth-child(3)").text().toUpperCase();
        if (lastName.includes(filterValue)) {
          $(element).show();
        } else {
          $(element).hide();
        }
      });
    });
  });
  </script>
