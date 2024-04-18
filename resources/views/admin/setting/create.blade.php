@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Setting') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ !blank($setting) ? route('settings.update',$setting) : route('settings.store') }}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        @if(!blank($setting)) @method('PUT') @endif
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="company_name">{{ __('Company Name') }} *</label>
                                <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ !blank($setting) ? old('company_name',$setting->company_name) : old('company_name') }}" autofocus>

                                @error('company_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="meta_title">{{ __('Meta Title') }} </label>
                                <input id="meta_title" type="text" class="form-control @error('meta_title') is-invalid @enderror" name="meta_title" value="{{ !blank($setting) ? old('meta_title',$setting->meta_title) : old('meta_title') }}" autofocus>

                                @error('meta_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="logo">{{ __('Logo') }} *</label>
                                <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo">
                                @error('logo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if(!blank($setting))
                                <div>
                                    <img src="{{ asset('backend/images/'.$setting->logo) }}" alt="logo" width="100">
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="facebook">{{ __('Facebook') }}</label>
                                <input id="facebook" type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value="{{ !blank($setting) ? old('facebook',$setting->facebook) : old('facebook') }}" autofocus>

                                @error('facebook')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="youtube">{{ __('Youtube') }}</label>
                                <input id="youtube" type="text" class="form-control @error('youtube') is-invalid @enderror" name="youtube" value="{{ !blank($setting) ? old('youtube',$setting->youtube) : old('youtube') }}" autofocus>

                                @error('youtube')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="twitter">{{ __('Twitter') }}</label>
                                <input id="twitter" type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value="{{ !blank($setting) ? old('twitter',$setting->twitter) : old('twitter') }}" autofocus>

                                @error('twitter')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="linkedin">{{ __('Linkedin') }}</label>
                                <input id="linkedin" type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" value="{{ !blank($setting) ? old('linkedin',$setting->linkedin) : old('linkedin') }}" autofocus>

                                @error('linkedin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label for="instagram">{{ __('Instagram') }}</label>
                                <input id="instagram" type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram" value="{{ !blank($setting) ? old('instagram',$setting->instagram) : old('instagram') }}" autofocus>

                                @error('instagram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="telegram">{{ __('Telegram') }}</label>
                                <input id="telegram" type="text" class="form-control @error('telegram') is-invalid @enderror" name="telegram" value="{{ !blank($setting) ? old('telegram',$setting->telegram) : old('telegram') }}" autofocus>

                                @error('telegram')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="row mb-0">
                            <div class="col-md-12 text-end">
                                {{-- <a href="{{ route('settings.index') }}" type="button" class="btn btn-secondary">Cancel</a> --}}
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
