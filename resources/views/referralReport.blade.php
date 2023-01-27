@extends('main_admin')
@section('title', 'Referral-Report')
@section('content')

<div class="container">
    <div class="active-package">
      <div class="section-heading">
        <h3>Referral Report</h3>
      </div>
      <div class="package-table table-responsive">
        <table class="w-100 datatable">
          <thead>
             <tr>
            <th>S.No.</th>
            <th>Register Id</th>
            <th>Package Amount</th>
            <th>Date</th>
          </tr>
          </thead>
          <tbody>
            @foreach($transactions as $key => $trans)
                {{-- @if($trans['packageAmt']>0) --}}
                  <tr class="odd" role="row">
                      <td>{{ $key+1 }}</td>
                      <td>{{ !empty($trans->userData->registerId)  ? $trans->userData->registerId : 0 }} </td>
                      <td>${{ number_format($trans['amount'],4) }}  </td>
                      <td>{{ Carbon\Carbon::parse($trans->created_at)->format('d-m-Y') }}</td>
                  </tr>
                {{-- @endif --}}
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

@endsection
