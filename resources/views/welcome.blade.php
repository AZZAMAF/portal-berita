@extends('parent')
@section('content')
     {{-- navbar --}}


    {{-- card --}}

<div class="table-responsive">

    <thead>
        <tr>

        </tr>
    </thead>
    <div class="d-flex flex-wrap m-4 " >
@foreach ( $news as $row )

<div class="card mx-2 m-4 " style="width: 45rem;">
<div class="card-body shadow bg-body rounded">
    <h5 class="card-title my-2">{{$row->title}}</h5>
    <div>
        <td class="text-center">
            <img src="{{$row->image}}" class="card-img-top w-50" style="object-fit: cover; height: 300px;" alt="">
        </td>
    </div>
    <div class="text-truncate">
        <p class="card-text order-1 p-2 bd-highlight text-">{{$row->description}}</p>
    </div>
    <a href="{{route('detailNews',$row->slug)}}">Detail-Berita </a>

</div>
</div>
@endforeach

</div>
</div>
@endsection

