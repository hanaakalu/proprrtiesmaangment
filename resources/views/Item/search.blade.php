@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('#################THIS IS Item DETAIL#################') }}
 </div>
 <div class="card-body">
 id : {{ $Item->id }}
 <br>
name : {{ $Item->name }}
 <br>
 model: {{ $Item->model }}
 <br>
unit: {{ $Item->unit }}
 <br>
 price: {{ $Item->price}}
 <br>
 quantity : {{ $Item->quantity }}
 <br>
 
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('Item/get_all') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection
