@extends('main_admin')
@section('title', 'ROI-Report')

@section('content')
    <div class="container">
        <div class="active-package">
            <div class="section-heading">
                <h3>Dividend Report</h3>
            </div>
            <div class="package-table table-responsive">
                <table class="w-100 datatable">
                    <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Package</th>
                        <th>Register Id</th>
                        <th>Package Amount</th>
                        <th>Dividend</th>
                        <th>Date</th>
                    </tr>
                        </thead>
                    <tbody>

                    @foreach ($transactions as $key => $trans)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $trans->packageName->name }}</td>
                            <td>{{ $trans->userData->registerId }}</td>
                            <td>${{ !empty($trans->transAmt->amount) ? $trans->transAmt->amount : 0 }}</td>
                            <td>${{ $trans['amount'] }}</td>
                            <td>{{ Carbon\Carbon::parse($trans->created_at)->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    

                </table>
            </div>
        </div>
    </div>
@endsection
