@include('dashboard.header')

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

    <div class="container-fluid">
        <div class="form-head mb-4 d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div>
                <h4 class="text-black font-w600 mb-1">Make Deposit</h4>
                <p class="text-muted mb-0">Submit your deposit request with your account details.</p>
            </div>
            <div class="badge rounded-pill bg-primary px-3 py-2 text-white">
                Balance: {{ Auth::user()->currency }}{{ number_format($balance, 2, '.', ',') }}
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-4 p-lg-5">
                        <div class="mb-4">
                            <h5 class="text-black mb-2">Deposit funds</h5>
                            <p class="text-muted mb-0">Use this form to submit a bank deposit request. Enter the amount, your email, upload the required documents if needed, and confirm with your transaction PIN.</p>
                        </div>

                        <form action="{{ route('make.deposit') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="email" value="{{ Auth::user()->email }}">

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Amount</label>
                                    <input type="number" name="amount" class="form-control" placeholder="Enter amount" min="1" required>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email_display" class="form-control" value="{{ Auth::user()->email }}" readonly>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">Front cheque image</label>
                                    <input type="file" name="front_cheque" class="form-control" accept="image/png,image/jpeg,pdf">
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">License / ID document</label>
                                    <input type="file" name="license" class="form-control" accept="image/png,image/jpeg,pdf">
                                </div>

                                <div class="col-md-12">
                                    <label class="form-label">Transaction PIN</label>
                                    <input type="password" name="transaction_pin" class="form-control" maxlength="4" placeholder="Enter 4-digit transaction PIN" required>
                                </div>
                            </div>

                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary px-4">Submit deposit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

