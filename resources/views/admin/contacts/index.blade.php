@extends('layout')

@section('content')
<div class="container py-4">

    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-danger mb-0">
            <i class="bi bi-chat-dots-fill me-2"></i> Contact Messages
        </h2>
    </div>

    <!-- Card Wrapper -->
    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body">
            <table id="contactsTable" class="table table-hover table-striped table-bordered align-middle w-100">
                <thead class="table-dark text-center">
                    <tr>
                        <th width="5%">#</th>
                        <th width="15%">Name</th>
                        <th width="20%">Email</th>
                        <th width="15%">Phone</th>
                        <th width="25%">Message</th>
                        <th width="20%">Date</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<!-- jQuery + Bootstrap -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- DataTables + Buttons -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap5.min.css">

<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

<script>
$(document).ready(function () {
    $('#contactsTable').DataTable({
        processing: true,
        serverSide: false,
        responsive: true,
        ajax: "{{ route('contacts.data') }}",
        dom: '<"row mb-3"<"col-md-6"l><"col-md-6 text-end"Bf>>rtip',
        buttons: [
            { extend: 'excel', text: '<i class="bi bi-file-earmark-excel-fill me-1"></i> Excel', className: 'btn btn-success btn-sm rounded-pill shadow-sm' },
            { extend: 'print', text: '<i class="bi bi-printer-fill me-1"></i> Print', className: 'btn btn-dark btn-sm rounded-pill shadow-sm' }
        ],
        columns: [
            { data: 'id', name: 'id', className: "text-center fw-bold text-primary" },
            { data: 'name', name: 'name', className: "fw-nowrap" },
            { data: 'email', name: 'email', className: "text-nowrap" },
            { data: 'phone', name: 'phone', className: "text-nowrap" },
            { data: 'message', name: 'message', className: "text-truncate", render: function(data){ return `<span title="${data}">${data}</span>`; } },
            { 
                data: 'created_at', 
                name: 'created_at',
                render: function (data) {
                    if (!data) return '';
                    let date = new Date(data);
                    return `<span class="badge bg-light text-dark shadow-sm">
                        ${date.toLocaleDateString('en-GB', { day: '2-digit', month: 'short', year: 'numeric' })}
                        <small class="text-muted">${date.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}</small>
                    </span>`;
                },
                className: "text-center"
            },
        ]
    });
});
</script>
@endpush
