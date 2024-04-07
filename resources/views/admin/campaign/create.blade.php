@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Campaign') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('campaigns.store') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="heading_en">{{ __('Heading (English)') }} *</label>
                                <input id="heading_en" type="text" class="form-control @error('heading_en') is-invalid @enderror" name="heading_en" value="{{ old('heading_en') }}" autofocus>

                                @error('heading_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="heading_bn">{{ __('Heading (Bangla)') }} *</label>
                                <input id="heading_bn" type="text" class="form-control @error('heading_bn') is-invalid @enderror" name="heading_bn" value="{{ old('heading_bn') }}" autofocus>

                                @error('heading_bn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="sub_heading_en">{{ __('Sub Heading (English)') }} *</label>
                                <input id="sub_heading_en" type="text" class="form-control @error('sub_heading_en') is-invalid @enderror" name="sub_heading_en" value="{{ old('sub_heading_en') }}" autofocus>

                                @error('sub_heading_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="sub_heading_bn">{{ __('Sub Heading (Bangla)') }} *</label>
                                <input id="sub_heading_bn" type="text" class="form-control @error('sub_heading_bn') is-invalid @enderror" name="sub_heading_bn" value="{{ old('sub_heading_bn') }}" autofocus>

                                @error('sub_heading_bn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="instruction_en">{{ __('Instruction (English)') }} *</label>
                                <input id="instruction_en" type="text" class="form-control @error('instruction_en') is-invalid @enderror" name="instruction_en" value="{{ old('instruction_en') }}" autofocus>

                                @error('instruction_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="instruction_bn">{{ __('Instruction (Bangla)') }} *</label>
                                <input id="instruction_bn" type="text" class="form-control @error('instruction_bn') is-invalid @enderror" name="instruction_bn" value="{{ old('instruction_bn') }}" autofocus>

                                @error('instruction_bn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="instruction_two_en">{{ __('Instruction Two (English)') }} *</label>
                                <input id="instruction_two_en" type="text" class="form-control @error('instruction_two_en') is-invalid @enderror" name="instruction_two_en" value="{{ old('instruction_two_en') }}" autofocus>

                                @error('instruction_two_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="instruction_two_bn">{{ __('Instruction Two (Bangla)') }} *</label>
                                <input id="instruction_two_bn" type="text" class="form-control @error('instruction_two_bn') is-invalid @enderror" name="instruction_two_bn" value="{{ old('instruction_two_bn') }}" autofocus>

                                @error('instruction_two_bn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="description_en">{{ __('Description (English)') }} *</label>
                                <textarea id="description_en" type="text" class="form-control @error('description_en') is-invalid @enderror" name="description_en" autofocus>{{ old('description_en') }}</textarea>

                                @error('description_en')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="description_bn">{{ __('Description (Bangla)') }} *</label>
                                <textarea id="description_bn" type="text" class="form-control @error('description_bn') is-invalid @enderror" name="description_bn" autofocus>{{ old('description_bn') }}</textarea>

                                @error('description_bn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="frame_one">{{ __('Frame One') }} *</label>
                                <input id="frame_one" type="file" class="form-control @error('frame_one') is-invalid @enderror" name="frame_one">

                                @error('frame_one')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="frame_two">{{ __('Frame Two') }}</label>
                                <input id="frame_two" type="file" class="form-control @error('frame_two') is-invalid @enderror" name="frame_two" value="{{ old('frame_two') }}" autocomplete="frame_two" autofocus>

                                @error('frame_two')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-12 text-end">
                                <a href="{{ route('campaigns.index') }}" type="button" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
