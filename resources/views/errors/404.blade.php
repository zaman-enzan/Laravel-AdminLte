@extends('layouts.screen')
@section('title', '404') 
@section('content')

    <section class="content">
        <div class="text-center">
        <h1 class="error_code">404</h1>
        <h3><i class="fa fa-warning text-maroon"></i> ページが見つかりません</h3>
        <p>ページが見つかりませんでした、ダッシュボードに戻るには
           <a href="{{ route('dashboard') }}">ここをクリックしてください。</a>
        </p>
    </div>
    </section>

@endsection
