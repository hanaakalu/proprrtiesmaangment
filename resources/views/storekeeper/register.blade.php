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
 <label for="s_sex" class="col-md-4 col-formlabel text-md-right">{{ __('s_sex') }}</label>
 <div class="col-md-6">
 <input id="s_sex" type="text" class="formcontrol @error('s_sex') isinvalid @enderror" name="s_sex" value="{{ old('s_sex') }}" required autocomplete
="s_sex">
 @error('s_sex')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="s_birthdate" class="col-md-4 col-formlabel text-md-right">{{ __('s_birthdate') }}</label>
 <div class="col-md-6">
 <input id="s_birthdate" type="text" class="formcontrol @error('s_birthdate') isinvalid @enderror" name="s_birthdate" value="{{ old('s_birthdate') }}" required autocomplete
="s_birthdate">
 @error('s_birthdate')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="s_email" class="col-md-4 col-formlabel text-md-right">{{ __('s_email') }}</label>
 <div class="col-md-6">
 <input id="s_email" type="text" class="formcontrol @error('s_email') isinvalid @enderror" name="s_email" value="{{ old('s_email') }}" required autocomplete
="s_email">
 @error('s_email')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="s_phone" class="col-md-4 col-formlabel text-md-right">{{ __('s_phone') }}</label>
 <div class="col-md-6">
 <input id="s_phone" type="text" class="formcontrol @error('s_phone') isinvalid @enderror" name="s_phone" value="{{ old('s_phone') }}" required autocomplete
="s_phone">
 @error('s_phone')
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