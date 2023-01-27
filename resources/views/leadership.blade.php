@extends('main_admin')
@section('title', 'Reward-Report')
@section('content')
    <div class="container">
        <div class="active-package">
            <div class="section-heading">
                <h3> Reward Report</h3>
            </div>
            <div class="package-table table-responsive">
                <table class="w-100 datatable">
                    <thead>
                        
                    <tr>
                        <th>S.No.</th>
                        <th>Reward Amount</th>
                        <th>Reward Type</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($package as $key => $trans)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                             <td>{{ $trans->amount }}</td> 
                             <td>{{ $trans->bonous }}</td> 
                             <!-- <td>{{ !empty($trans->transAmt->amount) ? $trans->transAmt->amount : 0 }}</td>  -->
                            <!-- <td>${{ $trans['amount'] }}</td> -->
                            <td>{{ Carbon\Carbon::parse($trans->created_at)->format('d-m-Y') }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                    

                </table>
            </div>
        </div>
    </div>
@endsection
