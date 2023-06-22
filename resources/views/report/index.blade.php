@extends('layouts.app')

@section('title', 'Report')

@section('content')
    <div class="container">
        <h1 class="text-center">Report</h1>
        <br>
        <form action="{{ route('report.download') }}" method="POST">
            @csrf
            <button class="btn btn-primary">Download</button>
        </form>
        <br>
        @for ($i = 0; $i < 5; $i++)
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur maiores impedit, vitae consequatur laboriosam ratione quos ipsam, 
                asperiores magnam nulla minima at molestias architecto facere laudantium similique enim officiis in?</p>
        @endfor
    </div>
@endsection