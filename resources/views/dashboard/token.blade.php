@include('dashboard.header')

<!-- Content body start -->
<div class="content-body">
    @if (session('error'))
    <div class="alert alert-danger" role="alert">
        <b>Error!</b> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif (session('status'))
    <div class="alert alert-success" role="alert">
        <b>Success!</b> {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4">
                <!-- Additional content for col-xl-4 -->
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <i class="bi bi-lock-fill text-danger fs-3 me-3"></i>
                            <h4 class="card-title mb-0">VAT Code Required</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="mb-4">
                            The Federal IMF code is required for this transaction to be completed successfully. Please visit any of our nearest branches or contact our online customer care representative for more details on the IMF code.
                        </p>
                        <form action="{{ route('otp.pin') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="otp" class="form-label" style="color: black">Enter VAT Code:</label>
                                <input id="otp" type="number" name="otp" class="form-control" placeholder="****" required>
                            </div>
                            
                             <p class="mb-4">
                            We have security measures in place to safeguard your money, because we are commited to providing you with a secure banking experience.
                        </p>
                            <button type="submit" id="waitone" class="btn btn-primary w-100">Proceed</button>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Content body end -->

@include('dashboard.footer')
