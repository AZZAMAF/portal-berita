@extends('admin.parent')

@section('content')

<form action="{{route('santri.store')}}" method="post">
@csrf
@method('POST')

<label for="" class="form-control">Nama Santri</label>
<input type="text"class="form-control" name="name" >

<label for="" class="form-control">Phone Santri</label>
<input type="number"class="form-control" name="phone" >

<label for="" class="form-control">City Santri</label>
<input type="string"class="form-control" name="city" >

<label for="" class="form-control">Date Santri</label>
<input type="date"class="form-control" name="date" >

<label for="" class="form-control">Address Santri</label>
<textarea class="form-control" cols="30" rows="10"
name="address" ></textarea>

<button type="submit" class="btn btn-primary mt-3"> Add Santri</button>

</form>

@endsection

