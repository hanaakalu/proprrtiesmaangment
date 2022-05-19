@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btn-success" color="red"  href="{{ route('Item/register') }}" role="button"> {{ __('Register new Item') }}
</a>
</div>
<div class="container">
 <div class="row justiify-content-center">
 <div class="col-md-15">
 <div class="card">
 <div class="card-header">
 <div class="row justiify-content-center">
 {{ __('###############this is Items information###############') }}
</div>
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered 2">
 <thead class="thead-inverse">
 <tr>
 <th>ID</th>
<th>name</th>
<th>model</th>
 <th>unit</th>
 <th>price</th>
 <th>quantity</th>
 </tr>
 </thead>
 <tbody>
 @foreach($Item as $Item)
 <tr>
 <td> {{ $Item->id }}</td>
 <td> {{ $Item->name }}</td>
 <td> {{ $Item->model }}</td>
 <td> {{ $Item->unit }}</td>
 <td> {{ $Item->price }}</td>
 <td> {{ $Item->quantity }}</td>
 <td> {{ $Item->occupation }}</td>
 
 <td>
 <a class="btn btn-xs btn-success" title="Edit" href="/Item/edit/{{$Item->id }}">Edit</a>
</td>
<td>
 <a class="btn btn-xs btn-danger" title="Delete" href="/Item/delete/{{ $Item->id }}">Delete</a>
 </td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection