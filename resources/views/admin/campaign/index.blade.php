@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div >
                        <span class="float-left">{{ __('Campaing') }}</span>
                        <a href="{{ route('campaigns.create') }}" class="float-right">
                            {{ __('Create') }}
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Heading</th>
                            <th scope="col">Description</th>
                            <th scope="col">Frame One</th>
                            <th scope="col">Frame Two</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        @forelse($campaigns as $index=>$campaing)
                          <tr>
                            <th scope="row">{{ $index+1 }}</th>
                            <td>{{ $campaing->heading_en }}</td>
                            <td>{{ $campaing->description_en }}</td>
                            <td>
                                <a href="{{ asset('backend/images/'.$campaing->frame_one) }}">
                                    <img src="{{ asset('backend/images/'.$campaing->frame_one) }}" width="100" />
                                </a>
                            </td>
                            <td>
                                <a href="{{ asset('backend/images/'.$campaing->frame_two) }}">
                                    <img src="{{ asset('backend/images/'.$campaing->frame_two) }}" width="100" />
                                </a>
                                
                            </td>
                            <td>
                                @if($campaing->status == 1)
                                <a href="{{ route('campaigns.status-change',$campaing) }}" >Active</a>
                                @else
                                <a href="{{ route('campaigns.status-change',$campaing) }}" >In Active</a>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                    <form onsubmit="return confirm('Are you sure? you want to delete this!')" action="{{ route('campaigns.destroy',$campaing) }}"  method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick class="btn btn-outline-danger">Delete</button>
                                    </form>
                                
                                <a href="{{ route('campaigns.edit',$campaing) }}" class="btn btn-outline-info">Edit</a>
                                </div>
                            </td>
                          </tr>
                        @empty
                        <tr>
                            <th colspan="6" class="text-center">Data not found</th>
                        </tr>

                        @endforelse
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
