@extends('frontend.parent')
@section('content')

<h3 class="category-title">Detail News</h3>



    <!-- ======= Single Post Content ======= -->
    <div class="single-post">
      <div class="post-meta"><span class="date">{{ $news->category->name}}</span> <span class="mx-1">&bullet;</span> <span>{{$news->created_at}}</span></div>
      <h1 class="mb-5">{{$news->title}}</h1>
      <p><span class="firstcharacter"></span>orem ipsum dolor sit, amet consectetur adipisicing elit. Ratione officia sed, suscipit distinctio, numquam omnis quo fuga ipsam quis inventore voluptatum recusandae culpa, unde doloribus saepe labore alias voluptate expedita? Dicta delectus beatae explicabo odio voluptatibus quas, saepe qui aperiam autem obcaecati, illo et! Incidunt voluptas culpa neque repellat sint, accusamus beatae, cumque autem tempore quisquam quam eligendi harum debitis.</p>

      <figure class="my-4">
        <img src="{{$news->image}}" alt="" class="img-fluid  rounded" style="width: 600px; height: 900px;">
        <figcaption>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, odit? </figcaption>
      </figure>
      <p>
        {!! ($news->description)!!}
    </p>

    </div><!-- End Single Post Content -->





<!-- Paging -->
<div class="text-start py-4">
  <div class="custom-pagination">
    <a href="#" class="prev">Prevous</a>
    <a href="#" class="active">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#" class="next">Next</a>
  </div>
</div><!-- End Paging -->

@endsection
