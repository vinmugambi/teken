@extends('layouts.app')

@section('content')
@while(have_posts()) @php the_post() @endphp
@include('partials.page-header-intro')
 <div>
     contact us
 </div>
@endsection