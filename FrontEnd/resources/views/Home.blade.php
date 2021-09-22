@extends('layout.app')
@section('content')

    @include('component.Banner')
    @include('component.Intro')
    @include('component.Team')
    @include('component.Counter')
    @include('component.Services')
    @include('component.Cta')
    @include('component.Testimonial')
    @include('component.LatestProject')
    @include('component.Contact')
    @include('component.Footer')

@endsection

@section('script')
    <script type="text/javascript">

    </script>
@endsection
