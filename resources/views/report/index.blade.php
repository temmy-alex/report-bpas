@extends('layouts.app')

@section('title', 'Report')

@section('content')
    <div class="container">
        <h1 class="text-center">Report</h1>
        <br>
        <form action="{{ route('report.download','pdf') }}" method="POST" class="mb-2">
            @csrf
            <button class="btn btn-primary">Download Invoice</button>
        </form>
        <form action="{{ route('report.download','pdf_do_bpas') }}" method="POST" class="mb-2">
            @csrf
            <button class="btn btn-primary">Download Delivery Order</button>
        </form>
        <form action="{{ route('report.download','pdf_po_bpas') }}" method="POST">
            @csrf
            <button class="btn btn-primary">Download Purchase Order</button>
        </form>
        <br>
        @for ($i = 0; $i < 5; $i++)
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur maiores impedit, vitae consequatur laboriosam ratione quos ipsam,
                asperiores magnam nulla minima at molestias architecto facere laudantium similique enim officiis in?</p>
        @endfor
    </div>
@endsection
