@include('dashboard.header')

<div class="content-body">
    <div class="container-fluid">
        <div class="form-head mb-4 d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div>
                <h4 class="text-black font-w600 mb-1">Banking overview</h4>
                <p class="text-muted mb-0">Welcome back, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
            </div>
            <a href="{{ url('transactions') }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                <i class="fa fa-history me-2"></i>Transaction history
            </a>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-12">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm" style="background: linear-gradient(135deg, #0c3a67 0%, #1d5a93 58%, #3b79b1 100%);">
                    <div class="card-body p-4 p-lg-5">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-7">
                                <div class="text-white-50 small text-uppercase mb-2">Available balance</div>
                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                    <h2 id="visibleBalance" class="fw-bold text-white mb-0">
                                        {{ Auth::user()->currency }}{{ number_format($balance, 2) }}
                                    </h2>
                                    <h2 id="hiddenBalance" class="fw-bold text-white mb-0 d-none">********</h2>
                                    <label class="form-check form-switch mb-0 d-flex align-items-center gap-2 ms-2">
                                        <input class="form-check-input m-0" type="checkbox" id="balanceToggle" role="switch">
                                        <span class="text-white-50 small">Hide / Show</span>
                                    </label>
                                </div>
                                <div class="mt-3 d-flex align-items-center gap-3 flex-wrap">
                                    <span class="badge rounded-pill bg-white bg-opacity-10 text-white px-3 py-2">
                                        <i class="fa fa-user-circle me-2"></i>
                                        {{ Auth::user()->a_number ? 'Account ' . str_repeat('*', strlen(Auth::user()->a_number) - 4) . substr(Auth::user()->a_number, -4) : 'Account active' }}
                                    </span>
                                    <span class="badge rounded-pill bg-success bg-opacity-20 text-white px-3 py-2">
                                        <i class="fa fa-check-circle me-2"></i>Active account
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 mt-3 mt-md-0">
                                <div class="bg-white bg-opacity-10 rounded-4 border border-white border-opacity-10 p-3 text-white">
                                    <div class="small text-white-50">Primary account holder</div>
                                    <div class="fw-bold fs-5 mb-2">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>
                                    <div class="small text-white-50">Secure access to your banking account and services.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-xl-3 col-md-6">
                <div class="card border-0 rounded-4 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="text-muted small text-uppercase">Ledger</div>
                        <h5 class="text-black mb-1">Current balance</h5>
                        <div class="fs-4 fw-bold text-black">{{ Auth::user()->currency }}{{ number_format($balance, 2) }}</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card border-0 rounded-4 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="text-muted small text-uppercase">Deposits</div>
                        <h5 class="text-black mb-1">Incoming funds</h5>
                        <div class="fs-4 fw-bold text-success">{{ Auth::user()->currency }}{{ number_format($deposit ?? 0, 2) }}</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card border-0 rounded-4 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="text-muted small text-uppercase">Withdrawals</div>
                        <h5 class="text-black mb-1">Outgoing funds</h5>
                        <div class="fs-4 fw-bold text-danger">{{ Auth::user()->currency }}{{ number_format($withdrawal ?? 0, 2) }}</div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card border-0 rounded-4 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="text-muted small text-uppercase">Status</div>
                        <h5 class="text-black mb-1">Account security</h5>
                        <div class="fs-4 fw-bold text-primary">Protected</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-12">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div>
                                <h5 class="text-black mb-1">Quick actions</h5>
                                <p class="text-muted mb-0">Common banking services available instantly.</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ route('bank') }}" class="text-decoration-none">
                                    <div class="rounded-4 p-4 h-100 text-center shadow-sm border border-light bg-light">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-primary text-white mb-3" style="width: 58px; height: 58px;">
                                            <i class="fa fa-university fa-lg"></i>
                                        </div>
                                        <div class="fw-bold text-dark">Bank transfer</div>
                                        <small class="text-muted d-block mt-1">Send funds securely</small>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <a href="{{ route('deposit') }}" class="text-decoration-none">
                                    <div class="rounded-4 p-4 h-100 text-center shadow-sm border border-light bg-light">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-success text-white mb-3" style="width: 58px; height: 58px;">
                                            <i class="fa fa-plus-circle fa-lg"></i>
                                        </div>
                                        <div class="fw-bold text-dark">Deposit</div>
                                        <small class="text-muted d-block mt-1">Add money to your account</small>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <a href="{{ route('withdrawal') }}" class="text-decoration-none">
                                    <div class="rounded-4 p-4 h-100 text-center shadow-sm border border-light bg-light">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning text-dark mb-3" style="width: 58px; height: 58px;">
                                            <i class="fa fa-money fa-lg"></i>
                                        </div>
                                        <div class="fw-bold text-dark">Withdrawal</div>
                                        <small class="text-muted d-block mt-1">Request a payout</small>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <a href="{{ url('transactions') }}" class="text-decoration-none">
                                    <div class="rounded-4 p-4 h-100 text-center shadow-sm border border-light bg-light">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-info text-white mb-3" style="width: 58px; height: 58px;">
                                            <i class="fa fa-history fa-lg"></i>
                                        </div>
                                        <div class="fw-bold text-dark">Transactions</div>
                                        <small class="text-muted d-block mt-1">Review every entry</small>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-8 col-md-12">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="text-black mb-0">Account activity</h5>
                            <span class="text-muted small">Current statement snapshot</span>
                        </div>
                        <div class="alert alert-light border-0 rounded-4 mb-0">
                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                                <span><i class="fa fa-list-alt me-2"></i>Ledger summary</span>
                                <strong>{{ Auth::user()->currency }}{{ number_format($balance, 2) }}</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card border-0 rounded-4 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="text-muted small text-uppercase">Support</div>
                        <h5 class="text-black mb-3">Need assistance?</h5>
                        <p class="text-muted mb-3">Use your account activity and transaction history to resolve payments, transfer questions, or secure access issues.</p>
                        <a href="{{ url('transactions') }}" class="btn btn-primary btn-sm rounded-pill px-3">View statements</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('dashboard.footer')

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const balanceToggle = document.getElementById('balanceToggle');
        const visibleBalance = document.getElementById('visibleBalance');
        const hiddenBalance = document.getElementById('hiddenBalance');

        if (balanceToggle) {
            balanceToggle.addEventListener('change', function () {
                if (this.checked) {
                    visibleBalance.classList.add('d-none');
                    hiddenBalance.classList.remove('d-none');
                } else {
                    visibleBalance.classList.remove('d-none');
                    hiddenBalance.classList.add('d-none');
                }
            });
        }
    });
</script>
