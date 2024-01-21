@extends('layouts.app')

@section('content')
    <div class="content">
    <div class="pb-5">
    <div class="row g-4">
        <div class="col-12 col-xxl-6">
        <div class="mb-8">
            <h2 class="mb-2">Ecommerce Dashboard</h2>
            <h5 class="text-700 fw-semi-bold">Here’s what’s going on at your business right now</h5>
        </div>
        <div class="row align-items-center g-4">
            <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"></span>
                <div class="ms-3">
                <h4 class="mb-0">57 new orders</h4>
                <p class="text-800 fs--1 mb-0">Awating processing</p>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center"><span class="fa-stack" style="min-height: 46px;min-width: 46px;"></span>
                <div class="ms-3">
                <h4 class="mb-0">5 orders</h4>
                <p class="text-800 fs--1 mb-0">On hold</p>
                </div>
            </div>
            </div>
            <div class="col-12 col-md-auto">
            <div class="d-flex align-items-center">
                <span class="fa-stack" style="min-height: 46px;min-width: 46px;"></span>
                <div class="ms-3">
                <h4 class="mb-0">15 products</h4>
                <p class="text-800 fs--1 mb-0">Out of stock</p>
                </div>
            </div>
            </div>
        </div>
        <hr class="bg-200 mb-6 mt-4">
        <div class="row flex-between-center mb-4 g-3">
            <div class="col-auto">
            <h3>Total sells</h3>
            <p class="text-700 lh-sm mb-0">Payment received across all channels</p>
            </div>
        </div>
    
    </div>
    </div>
    </div>
@endsection


