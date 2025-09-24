@extends('components.layouts.app')

@section('title', 'Dashboard - Analytics')

@section('content')
<div class="row">
  <!-- Welcome Card -->
  <div class="col-xxl-8 mb-6 order-0">
    <div class="card">
      <div class="d-flex align-items-start row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary mb-3">Congratulations John! 🎉</h5>
            <p class="mb-6">
              You have done 72% more sales today.<br />Check your new badge in your profile.
            </p>
            <a href="javascript:;" class="btn btn-sm btn-outline-primary">View Badges</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-6">
            <img
              src="../assets/img/illustrations/man-with-laptop.png"
              height="175"
              alt="View Badge User" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Stats Cards -->
  <div class="col-xxl-4 col-lg-12 col-md-4 order-1">
    <div class="row">
      <div class="col-lg-6 col-md-12 col-6 mb-6">
        <div class="card h-100">
          <div class="card-body">
            <!-- Profit Card Content -->
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-12 col-6 mb-6">
        <div class="card h-100">
          <div class="card-body">
            <!-- Sales Card Content -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Total Revenue -->
  <div class="col-12 col-xxl-8 order-2 order-md-3 order-xxl-2 mb-6 total-revenue">
    <div class="card">
      <!-- Total Revenue Content -->
    </div>
  </div>

  <!-- Profile Report & Other Cards -->
  <div class="col-12 col-md-8 col-lg-12 col-xxl-4 order-3 order-md-2 profile-report">
    <div class="row">
      <!-- Payments, Transactions, Profile Report Cards -->
    </div>
  </div>
</div>

<div class="row">
  <!-- Order Statistics -->
  <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-6">
    <div class="card h-100">
      <!-- Order Statistics Content -->
    </div>
  </div>

  <!-- Expense Overview -->
  <div class="col-md-6 col-lg-4 order-1 mb-6">
    <div class="card h-100">
      <!-- Expense Overview Content -->
    </div>
  </div>

  <!-- Transactions -->
  <div class="col-md-6 col-lg-4 order-2 mb-6">
    <div class="card h-100">
      <!-- Transactions Content -->
    </div>
  </div>
</div>
@endsection
