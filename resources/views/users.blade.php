@extends('main_admin')
@section('title', 'Dashboard')
@section('content')

    <div class="container">

            {{-- <div class="package-outer">
            <div class="section-heading">
                <h3>PACKAGE</h3>
            </div>
            <div class="package-inner">
                <div class="row">
                <div class="col-sm-3 col-12">
                    <div class="form-group">
                    <input type="number" name="amt_1" id="amt" class="form-control pgAmt"
                                            placeholder="Enter Amount" required>
                                            <div id="error" class="error"></div>
                    </div>
                </div>
                 <div class="col-sm-3 col-12">
                    <div class="form-group">
                    <input type="number" placeholder="0.00 JSS COIN" id="jssToken" readonly class="form-control"/>
                    </div>
                </div>

                <div class="col-sm-3 col-12">
                    <select class="form-select" id="package">
                        @foreach ($packages as $package)
                        <option value="{{ $package->id }}">{{ $package->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-sm-3 col-12">
                    <div class="approve-btn">
                        <button type="button" onclick="deposit();"
                            class="btn btn-primary depositRe">Stake</button>
                    </div>
                </div>
                </div>
            </div>
            </div> --}}

        <div class="active-package">
        <div class="section-heading">
            <h3>ACTIVE PACKAGE</h3>
        </div>

        <div class="package-table table-responsive">
            <table class="w-100">
            <tr>
                <th>S.No.</th>
                <th>Invest Amount</th>
                <th>Package</th>
                <th>Investment Date</th>
            </tr>
            @forelse($latestPackage as $key => $item)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>${{ $item->amount }}</td>
                <td>{{ $item->packageName->name }}</td>
                <td>{{ Carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}</td>
            </tr>
            @empty
            <p>No record found</p>
            @endforelse
            </table>
        </div>
        </div>
        <div class="referral-outer">
        <div class="section-heading">
            <h3>REFERRAL LINK</h3>
        </div>
        <div class="referral-inner text-center">
            {{-- <h6>Referral Link will activate after Investment</h6> --}}
            <div class="col-12">
                <div class="referral-left">
                    <h6>My Referral Link</h6>
                    @if ($userData->packageAmt > 0)
                        <h6 class="title-footer-dashboard">Your Referral Link:</br>
                            <p class="m-0" style="word-break:break-all;" id="refLink_1">
                                http://127.0.0.1:8000/register/{{ $userData['registerId'] }}</p>
                            <button class="btn btn-blue lighten-2"
                                onclick="copyElementText('refLink_1');">Copy</button>
                            </p>
                        @else
                            <p class="m-0" style="word-break:break-all;"> You will get your
                                referral link after investing</p>
                    @endif

                     <p> Sponsor ID:- {{ $userData->userRecord->registerId }} </p>
                </div>

            </div>
        </div>
        </div>
        <div class="income-main">
        <div class="section-heading">
            <h3>DASHBOARD</h3>
        </div>
        <div class="income-outer">
            <ul class="nav justify-content-between">
            <li>
                <div class="income-inner text-center">
                <div class="income-top border-bottom">
                    <h6>${{ $grnadTotal }}</h6>
                </div>
                <div class="income-bottom">
                    <p>Total Income</p>
                    <div class="withdraw-btn">
                        {{-- <a href="javascript:void(0)" data-trans="0" data-amount="{{ $grnadTotal }}" class="btn btn-primary withRe">Withdraw Now</a> --}}

                        {{-- <h5 class="text-white mb-2"><b>@php echo $grnadTotal;@endphp</b><br /><br /> --}}

                        <a href="javascript:void(0)"
                        data-trans="0" data-amount="{{ $grnadTotal }}"
                        class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Withdraw Now</a>
                        {{-- </h5> --}}
                    </div>
                </div>
                </div>
            </li>

            <li>
                <div class="income-inner text-center">
                <div class="income-top border-bottom">
                    <h6>${{ $unStackAmt }}</h6>
                </div>
                <div class="income-bottom">
                    <p>Unstack Amount </p>
                </div>
                </div>
            </li>
            <li>
                <div class="income-inner text-center">
                <div class="income-top border-bottom">
                    <h6>${{ $userRoi }}</h6>
                </div>
                <div class="income-bottom">
                    <p>Staking Dividend</p>
                </div>
                </div>
            </li>
            <li>
                <div class="income-inner text-center">
                <div class="income-top border-bottom">
                    <h6>${{ $userLevel }}</h6>
                </div>
                <div class="income-bottom">
                    <p>Referral Reward</p>
                </div>
                </div>
            </li>
            <li>
                <div class="income-inner text-center mt-3">
                <div class="income-top border-bottom">
                    <h6>${{ $userBonous }}</h6>
                </div>
                <div class="income-bottom">
                    <p>Bonous Reward</p>
                </div>
                </div>
            </li>
            <li>
                <div class="income-inner text-center mt-3">
                <div class="income-top border-bottom">
                    <h6>{{ $totalIncome }}</h6>
                </div>
                <div class="income-bottom">
                    <p>Total Reward</p>
                </div>
                </div>
            </li>
            </ul>
        </div>
        </div>
    </div>

@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
 <script>

    $(document).ready(function () {

    var token = "{{($tokenPrice->tokenValue) }}"
    // console.log(token);
      $('#amt').keyup(function () {

       var amt = $('#amt').val();
       var InjssToken  = amt / token;
        $('#jssToken').val(InjssToken);
      });

      $(".withClose").on("click",function(){
        location.reload();
      });

    });

  </script>
@endsection


<!-- Modal -->

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title text-black" id="exampleModalLabel">Withdraw</h5>
            <button type="button" class="btn-close withClose"  data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Withdraw</label>
                    <input type="number" name="withAmt" id="withAmt" class="form-control"
                                            placeholder="Enter Amount" required>

                    <input type="hidden" id="grnadTotal" value="@php echo $grnadTotal;@endphp">

                </div>
                <button type="button" data-trans="0" class="btn btn-primary withRe">Withdraw</button>
                </form>
            </div>
        </div>
        </div>
    </div>
