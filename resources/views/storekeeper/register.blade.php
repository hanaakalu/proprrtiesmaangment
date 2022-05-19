@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('PLEACE REGISTER YOUR storekeeper') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('storekeeper/register') }}"
>
 @csrf
 <div class="form-group row">
 <label for="name" class="col-md-4 col-formlabel text-md-right">{{ __('name') }}</label>
 <div class="col-md-6">
 <input id="name" type="text" class="formcontrol @error('name') isinvalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="
name" autofocus>
 @error('name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="l_name" class="col-md-4 col-formlabel text-md-right">{{ __('l_name') }}</label>
 <div class="col-md-6">
 <input id="l_name" type="text" class="formcontrol @error('l_name') isinvalid @enderror" name="l_name" value="{{ old('l_name') }}" required autocomplete
="l_name">
 @error('l_name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div
 @csrf
 <div class="form-group row">
 <label for="sex" class="col-md-4 col-formlabel text-md-right">{{ __('sex') }}</label>
 <div class="col-md-6">
 <input id="sex" type="text" class="formcontrol @error('sex') isinvalid @enderror" name="sex" value="{{ old('sex') }}" required autocomplete
="sex">
 @error('sex')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="birthdate" class="col-md-4 col-formlabel text-md-right">{{ __('birthdate') }}</label>
 <div class="col-md-6">
 <input id="birthdate" type="text" class="formcontrol @error('birthdate') isinvalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete
="birthdate">
 @error('birthdate')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="email" class="col-md-4 col-formlabel text-md-right">{{ __('email') }}</label>
 <div class="col-md-6">
 <input id="email" type="text" class="formcontrol @error('email') isinvalid @enderror" name="email" value="{{ old('email') }}" required autocomplete
="email">
 @error('email')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="phone" class="col-md-4 col-formlabel text-md-right">{{ __('phone') }}</label>
 <div class="col-md-6">
 <input id="phone" type="text" class="formcontrol @error('phone') isinvalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete
="phone">
 @error('phone')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
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