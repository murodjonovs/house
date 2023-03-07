@extends('layouts.front.main')

@section('style')
    <link rel="stylesheet" href="/css/fancybox.css">
@endsection

@section('content')
    <div class="wrapper">
        <div class="genplan">

        </div>
        <!-- /.genplan -->
    </div>
    <!-- /.wrapper -->
    @include('components.front.footer')
@endsection

@section('script')
    <script src="/js/fancybox.umd.js"></script>
@endsection
