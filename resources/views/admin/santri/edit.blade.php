@extends('admin.parent')
@section('content')

<form action="{{route('santri.update',$santri->id)}}" method="post">
@csrf
@method('PUT')

<label for="" class="form-control m-1">Nama Santri</label>
<input type="text"class="form-control" name="name"
value="{{$santri->name}}" >

<label for="" class="form-control m-1">Phone Santri</label>
<input type="number"class="form-control" name="phone" value="{{$santri->phone}}">

<label for="" class="form-control">City Santri</label>
<input type="string"class="form-control" name="city" value="{{$santri->city}}" >

<label for="" class="form-control">Date Santri</label>
<input type="date"class="form-control" name="date" value="{{$santri->date}}">


<label for="" class="form-control m-1">Address Santri</label>
<textarea class="form-control" cols="30" rows="10" name="address" value="{{$santri->address}}"></textarea>



<button type="submit" class="btn btn-primary mt-3"> Add Santri</button>

</form>

@endsection
