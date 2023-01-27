@extends('main_admin')
@section('title', 'Level-Report')
@section('content')

    <div class="container">
        <div class="active-package">
        <div class="section-heading">
            <h3>Level Report <h3>
        </div>
        <div class="package-table table-responsive">
            <table class="w-100">
            <tr>
                <th>S.No.</th>
                <th>Level</th>
                <th>Register Id</th>
                <th>Amount</th>
                <th>Date</th>
            </tr>
                @foreach($transactions as $key => $trans )
                    <tr class="odd" role="row">
                        <td>{{ $key+1 }}</td>
                        <td>@php echo $trans['type']; @endphp</td>
                        <td>@php echo !empty($trans->referralUser->registerId)  ? $trans->referralUser->registerId : 0; @endphp</td>
                        <td>$@php echo $trans['amount']; @endphp</td>
                        <td>{{ Carbon\Carbon::parse($trans->created_at)->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
        </div>
    </div>

  @endsection
