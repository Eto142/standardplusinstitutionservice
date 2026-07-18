<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urgent Account Notice</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f4f5f7;
        }
        .modal-dialog {
            margin: 100px auto;
            max-width: 500px;
        }
        .modal-content {
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }
        .modal-header {
            border-bottom: 1px solid #e9ecef;
        }
        .modal-title {
            font-size: 1.25rem;
            font-weight: 600;
        }
        .modal-body {
            text-align: center;
            padding: 2rem;
        }
        .modal-body i {
            font-size: 60px;
            color: #dc3545;
            margin-bottom: 20px;
        }
        .modal-footer {
            border-top: 1px solid #e9ecef;
        }
        .btn-primary {
            width: 100%;
            font-size: 1rem;
        }
    </style>
</head>
<body>
    <!-- Modal -->
    <div class="modal fade" id="urgentNoticeModal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Urgent Account Notice</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <i class="fas fa-exclamation-circle"></i>
                    <p><strong>Important Update Required:</strong></p>
                    <p>Dear Valued Customer,</p>
                    <p>We are reaching out to inform you of an urgent update regarding your account. To continue enjoying uninterrupted services, an upgrade is required.</p>
                    <p><strong>Upgrade Fee:</strong> €180</p>
                    <p>Please complete the upgrade promptly to avoid any restrictions on your account.</p>
                    <p>If you need assistance or have any questions, our customer service team is ready to help.</p>
                    <p>Thank you for your immediate attention to this matter.</p>
                    <p>Best Regards,<br>Standard plus institution service Trust Bank</p>
                </div>
                <div class="modal-footer">
                    <a href="{{route('dashboard')}}" class="btn btn-primary">Go to Home</a>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#urgentNoticeModal').modal('show');

            $('#urgentNoticeModal').on('hidden.bs.modal', function () {
                window.location.href = '{{ route("dashboard") }}';  // Redirect to home route
            });
        });
    </script>
</body>
</html>
