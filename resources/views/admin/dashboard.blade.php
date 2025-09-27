@extends('components.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="row">
        <!-- 4 Summary Cards -->
        <div class="col-lg-3 col-md-6 col-sm-12 mb-6">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h6 class="mb-2">Total Products</h6>
                    <h3 class="text-primary mb-0">1,245</h3>
                    <small class="text-muted">Active items in stock</small>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mb-6">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h6 class="mb-2">Categories</h6>
                    <h3 class="text-success mb-0">18</h3>
                    <small class="text-muted">Product groupings</small>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mb-6">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h6 class="mb-2">Suppliers</h6>
                    <h3 class="text-warning mb-0">12</h3>
                    <small class="text-muted">Registered suppliers</small>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mb-6">
            <div class="card h-100">
                <div class="card-body text-center">
                    <h6 class="mb-2">Users</h6>
                    <h3 class="text-info mb-0">25</h3>
                    <small class="text-muted">System users</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart Section -->
    <div class="row">
        <div class="col-12 mb-6">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="mb-3">Inventory Overview</h5>
                    <div style="height: 300px; background-color: #f9f9f9; border-radius: 6px;"
                        class="d-flex align-items-center justify-content-center text-muted">
                        [Mock Chart / Graph Placeholder]
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
