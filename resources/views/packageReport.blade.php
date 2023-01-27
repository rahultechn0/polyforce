@extends('main_admin')
@section('title', 'Package-Report')
@section('content')
    <div class="container">
        <div class="active-package">
            <div class="section-heading">
                <h3>Package Report</h3>
            </div>
            <div class="package-table table-responsive">
                <table class="w-100 datatable">
                    <thead>
                        <tr>
                            <th>S.No.</th>
                            <th>Package</th>
                            <th>Package ID</th>
                            <th>Package Amount</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($package as $key => $trans)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $trans->packageName->name }}</td>
                                <td>{{ $trans->id }}</td>
                                <td>${{ !empty($trans->amount) ? $trans->amount : 0 }}</td>
                                <td>{{ Carbon\Carbon::parse($trans->created_at)->format('d-m-Y') }}</td>
                                <td>
                                    @if ($trans->status == 0 || $trans->planExpiryDate <= Carbon\Carbon::now()->toDateString())
                                        Inactive
                                    @else
                                        Active
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                //alert("jhhgj");
                $('#example').DataTable();
            });
        </script> -->

@endsection
