@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div >
                        <span class="float-left">{{ __('Perticipant') }}</span>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse($perticipants as $index=>$perticipant)
                          <tr>
                            <th scope="row">{{ $index+1 }}</th>
                            <td>
                                <a href="{{ asset('backend/participant/'.$perticipant->photo) }}">
                                    <img src="{{ asset('backend/participant/'.$perticipant->photo) }}" style="height: 80px;width: 80px;border-radius:50%" alt="perticipant image" />
                                </a>
                            </td>
                            <td>{{ $perticipant->name }}</td>
                            <td>{{ $perticipant->mobile }}</td>
                            <td>
                                -
                            </td>
                          </tr>
                        @empty
                        <tr>
                            <th colspan="6" class="text-center">Data not found</th>
                        </tr>

                        @endforelse
                        </tbody>
                      </table>
                    {{-- Pagination --}}
                    <div class="d-flex justify-content-center">
                        {!! $perticipants->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
