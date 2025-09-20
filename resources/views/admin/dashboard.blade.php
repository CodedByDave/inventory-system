@include('layouts.header', ['title' => 'Admin Dashboard'])
<div class="my-4"></div>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
  <div class="layout-container">

    @include('partials.sidebar-superadmin')

    <!-- Layout page -->
    <div class="layout-page">

      @include('layouts.navbar')

      <!-- Content wrapper -->
      <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
          <div class="row">

            <!-- Statistics Cards -->
            <div class="col-12 order-1">
              <div class="row align-items-stretch">

                <!-- Profit Card -->
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                  <div class="card equal-card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <p class="mb-1">Profit</p>
                      <h4 class="card-title mb-2">$12,628</h4>
                      <small class="text-success fw-medium">
                        <i class="icon-base bx bx-up-arrow-alt"></i> +72.80%
                      </small>
                    </div>
                  </div>
                </div>

                <!-- Sales Card -->
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                  <div class="card equal-card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <p class="mb-1">Sales</p>
                      <h4 class="card-title mb-2">$4,679</h4>
                      <small class="text-success fw-medium">
                        <i class="icon-base bx bx-up-arrow-alt"></i> +28.42%
                      </small>
                    </div>
                  </div>
                </div>

                <!-- Total Employees Card -->
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                  <div class="card equal-card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <p class="mb-1">Total Employees</p>
                      <h4 class="card-title mb-2">128</h4>
                      <small class="text-success fw-medium">
                        <i class="icon-base bx bx-user"></i> Active Staff
                      </small>
                    </div>
                  </div>
                </div>

                <!-- Payroll This Month Card -->
                <div class="col-lg-3 col-md-6 col-12 mb-4">
                  <div class="card equal-card">
                    <div class="card-body d-flex flex-column justify-content-between">
                      <p class="mb-1">Payroll (This Month)</p>
                      <h4 class="card-title mb-2">$58,940</h4>
                      <small class="text-primary fw-medium">
                        <i class="icon-base bx bx-calendar"></i> September 2025
                      </small>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <!-- / Statistics Cards -->

            <!-- Total Revenue Chart -->
            <div class="col-12 col-xxl-8 order-2 order-md-3 order-xxl-2 mb-6 total-revenue">
              <div class="card">
                <div class="row row-bordered g-0">
                  <div class="col-lg-8">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Total Revenue</h5>
                      </div>
                      <div class="dropdown">
                        <button class="btn p-0" type="button" id="totalRevenue" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i class="icon-base bx bx-dots-vertical-rounded icon-lg text-body-secondary"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="totalRevenue">
                          <a class="dropdown-item" href="javascript:void(0);">Select All</a>
                          <a class="dropdown-item" href="javascript:void(0);">Refresh</a>
                          <a class="dropdown-item" href="javascript:void(0);">Share</a>
                        </div>
                      </div>
                    </div>
                    <div id="totalRevenueChart" class="px-3"></div>
                  </div>
                  <div class="col-lg-4">
                    <div class="card-body px-xl-9 py-12 d-flex align-items-center flex-column">
                      <div class="text-center mb-6">
                        <div class="btn-group">
                          <button type="button" class="btn btn-outline-primary">
                            <script>
                              document.write(new Date().getFullYear() - 1);
                            </script>
                          </button>
                          <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                          </button>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="javascript:void(0);">2021</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">2020</a></li>
                            <li><a class="dropdown-item" href="javascript:void(0);">2019</a></li>
                          </ul>
                        </div>
                      </div>

                      <div id="growthChart"></div>
                      <div class="text-center fw-medium my-6">62% Company Growth</div>

                      <div class="d-flex gap-11 justify-content-between">
                        <div class="d-flex">
                          <div class="avatar me-2">
                            <span class="avatar-initial rounded-2 bg-label-primary">
                              <i class="icon-base bx bx-dollar icon-lg text-primary"></i>
                            </span>
                          </div>
                          <div class="d-flex flex-column">
                            <small>
                              <script>
                                document.write(new Date().getFullYear() - 1);
                              </script>
                            </small>
                            <h6 class="mb-0">$32.5k</h6>
                          </div>
                        </div>
                        <div class="d-flex">
                          <div class="avatar me-2">
                            <span class="avatar-initial rounded-2 bg-label-info">
                              <i class="icon-base bx bx-wallet icon-lg text-info"></i>
                            </span>
                          </div>
                          <div class="d-flex flex-column">
                            <small>
                              <script>
                                document.write(new Date().getFullYear() - 2);
                              </script>
                            </small>
                            <h6 class="mb-0">$41.2k</h6>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <form id="logoutForm" action="{{ route('logout') }}" method="POST" style="display:none;">
              @csrf
            </form>
          </div>
        </div>
        <!-- / Content -->
      </div>
      <!-- Content wrapper -->
    </div>
    <!-- / Layout page -->
  </div>
</div>
<!-- / Layout wrapper -->

@include('layouts.footer')

<script>
document.getElementById('logoutBtn').addEventListener('click', function() {
    Swal.fire({
        title: 'Are you sure?',
        text: "You will be logged out!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, logout!'
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById('logoutForm').submit();
        }
    });
});
</script>


<!-- Custom CSS -->
<style>
  .equal-card {
    min-height: 140px;
    /* smaller card height */
  }
</style>