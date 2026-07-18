@include('dashboard.header')

<div class="content-body">
    <div class="container-fluid">
        <div class="form-head mb-4 d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div>
                <h4 class="text-black font-w600 mb-1">Overview</h4>
                <p class="text-muted mb-0">Welcome back, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</p>
            </div>
            <a href="{{ url('transactions') }}" class="btn btn-sm btn-outline-primary rounded-pill px-3">
                <i class="fa fa-history me-2"></i>Recent History
            </a>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-12">
                <div class="card border-0 rounded-4 overflow-hidden shadow-sm" style="background: linear-gradient(135deg, #0f3b63 0%, #305c89 55%, #4f7fa8 100%);">
                    <div class="card-body p-4 p-lg-5">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-7">
                                <div class="text-white-50 small text-uppercase mb-2">Total balance</div>
                                <div class="d-flex align-items-center gap-3 flex-wrap">
                                    <h2 id="visibleBalance" class="fw-bold text-white mb-0">
                                        {{ Auth::user()->currency }}{{ number_format($balance, 2) }}
                                    </h2>
                                    <h2 id="hiddenBalance" class="fw-bold text-white mb-0 d-none">********</h2>
                                    <label class="form-check form-switch mb-0 d-flex align-items-center gap-2 ms-2">
                                        <input class="form-check-input m-0" type="checkbox" id="balanceToggle" role="switch">
                                        <span class="text-white-50 small">Show / Hide</span>
                                    </label>
                                </div>
                                <div class="mt-3 d-flex align-items-center gap-3 flex-wrap">
                                    <span class="badge rounded-pill bg-white bg-opacity-10 text-white px-3 py-2">
                                        <i class="fa fa-user-circle me-2"></i>
                                        {{ Auth::user()->a_number ? 'Account ' . str_repeat('*', strlen(Auth::user()->a_number) - 4) . substr(Auth::user()->a_number, -4) : 'Account active' }}
                                    </span>
                                    <span class="badge rounded-pill bg-success bg-opacity-20 text-white px-3 py-2">
                                        <i class="fa fa-check-circle me-2"></i>Active
                                    </span>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-5 mt-3 mt-md-0">
                                <div class="bg-white bg-opacity-10 rounded-4 border border-white border-opacity-10 p-3 text-white">
                                    <div class="small text-white-50">Estimated BTC value</div>
                                    <div class="display-6 fw-bold mb-0">{{ number_format($btc ?? 0, 6) }}</div>
                                    <div class="small text-white-50 mt-2">Live market estimate</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-xl-4 col-md-6">
                <div class="card border-0 rounded-4 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="text-muted small text-uppercase">Wallet</div>
                                <h5 class="text-black mb-0">Ledger balance</h5>
                            </div>
                            <span class="badge rounded-pill bg-primary bg-opacity-10 text-primary">Primary</span>
                        </div>
                        <div class="fs-4 fw-bold text-black mb-3">
                            {{ Auth::user()->currency }}{{ number_format($balance, 2) }}
                        </div>
                        <div class="d-flex justify-content-between text-muted small">
                            <span>Account owner</span>
                            <span>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="card border-0 rounded-4 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="text-muted small text-uppercase">Performance</div>
                        <h5 class="text-black mb-3">Quick insights</h5>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="text-muted">Deposit total</span>
                            <span class="fw-bold text-success">{{ Auth::user()->currency }}{{ number_format($deposit ?? 0, 2) }}</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="text-muted">Withdrawal total</span>
                            <span class="fw-bold text-danger">{{ Auth::user()->currency }}{{ number_format($withdrawal ?? 0, 2) }}</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="text-muted">BTC estimate</span>
                            <span class="fw-bold text-primary">{{ number_format($btc ?? 0, 6) }} BTC</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-12">
                <div class="card border-0 rounded-4 shadow-sm h-100">
                    <div class="card-body p-4">
                        <div class="text-muted small text-uppercase">Security</div>
                        <h5 class="text-black mb-3">Account status</h5>
                        <div class="alert alert-success border-0 rounded-4 mb-3">
                            <i class="fa fa-shield me-2"></i>Your account is fully verified and active.
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <span class="text-muted">Protection level</span>
                            <span class="badge rounded-pill bg-success text-white px-3 py-2">High</span>
                        </div>
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
                                <p class="text-muted mb-0">Jump into the most common services in one click.</p>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-lg-3 col-md-6">
                                <a href="{{ route('bank') }}" class="text-decoration-none">
                                    <div class="rounded-4 p-4 h-100 text-center shadow-sm border border-light bg-light">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-danger text-white mb-3" style="width: 58px; height: 58px;">
                                            <i class="fa fa-university fa-lg"></i>
                                        </div>
                                        <div class="fw-bold text-dark">Bank Transfer</div>
                                        <small class="text-muted d-block mt-1">Move funds securely</small>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <a href="{{ route('cryptopage') }}" class="text-decoration-none">
                                    <div class="rounded-4 p-4 h-100 text-center shadow-sm border border-light bg-light">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning text-dark mb-3" style="width: 58px; height: 58px;">
                                            <i class="fa fa-bitcoin fa-lg"></i>
                                        </div>
                                        <div class="fw-bold text-dark">Crypto</div>
                                        <small class="text-muted d-block mt-1">Access digital asset services</small>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <a href="{{ route('loan') }}" class="text-decoration-none">
                                    <div class="rounded-4 p-4 h-100 text-center shadow-sm border border-light bg-light">
                                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-dark text-white mb-3" style="width: 58px; height: 58px;">
                                            <i class="fa fa-money fa-lg"></i>
                                        </div>
                                        <div class="fw-bold text-dark">Loan</div>
                                        <small class="text-muted d-block mt-1">Open a financing request</small>
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
            <div class="col-12">
                <div class="card border-0 rounded-4 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h5 class="text-black mb-0">Market update</h5>
                            <span class="text-muted small">Live estimate</span>
                        </div>

                        <div id="bankCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner rounded-4 overflow-hidden">
                                <div class="carousel-item active">
                                    <img src="bank-advert1.jpg" class="d-block w-100" alt="Bank Advert 1">
                                </div>
                                <div class="carousel-item">
                                    <img src="bank-advert2.jpg" class="d-block w-100" alt="Bank Advert 2">
                                </div>
                                <div class="carousel-item">
                                    <img src="bank-advert3.jpg" class="d-block w-100" alt="Bank Advert 3">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#bankCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#bankCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
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
