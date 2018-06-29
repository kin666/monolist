@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>素敵なモノと出会う場所</h1>
                <h1>門リストブラン地　</h1>
                @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">モノリストを始める</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
    @include('items.items')
    {!! $items->render() !!}
<<<<<<<<< saved version
    
=========
<<<<<<<<< saved version

=========
    {!! $items->render() !!}
    
>>>>>>>>> local version
>>>>>>>>> local version
@endsection