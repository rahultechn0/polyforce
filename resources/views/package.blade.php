@extends('main_admin')
@section('title', 'Dashboard')
@section('content')

    <div class="container">
        <div class="package-outer">
            <div class="section-heading">
                <h3>PACKAGE</h3>
            </div>

            <div class="package-inner">
                <div class="row">
                    @foreach ($packages as $package)
                        <div class="col-sm-6 col-6">
                            <div class="card-info">
                                <div class="d-flex align-items-center">
                                    <div class="starter-outer">
                                        <h2 class="num-text font-w600">{{ $package->name }}</h2>
                                        <h4 class="mb-1 fs-14 mb-3">{{ $package->minDeposit }}</h4>
                                    </div>
                                    <div class="token-outer ms-5">
                                        <h2 class="num-text font-w600">Tokens</h2>
                                        <h4 class="mb-1 fs-14 mb-3">{{ $package->minDeposit * $priceData['tokenValue'] }}</h4>
                                    </div>
                                </div>
                                <input type="hidden" name="deposit_amt" class="depositAmount" id="deposit_amt_{{ $package->id }}" value="{{ $package->minDeposit }}">
                                <input type="hidden" name="deposit_token" class="depositAmount" id="deposit_token_{{ $package->id }}"
                                    value="{{ $package->minDeposit * $priceData['tokenValue'] }}">
                                <div class="svg-outer mb-3 text-end">
                                    {{-- <img class="logo-icon-image img-fluid"
                                        src="https://metasociality.io/meta-sociality/meta-dashboard/xhtml/images/logo-icon.png"
                                        alt=""> --}}
                                </div>

                                <div class="d-flex justify-content-between">
                                    {{-- <div class="me-3 ">
                                        <p class="fs-12 mb-1 op6">DAYS</p>
                                        <span>2100</span>
                                    </div>
                                    <div class="me-3 ">
                                        <p class="fs-12 mb-1 op6">Dividend</p>
                                        <span>0.14 / Day</span>
                                    </div> --}}
                                    <div class="me-3">
                                        <button type="submit" onclick="deposit({{ $package->id }})"
                                            class="btn btn-secondary depositRe">Stake</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-sm-6">
                <div class="card-bx stacked card">
                    <img src="https://metasociality.io/meta-sociality/meta-dashboard/xhtml/images/card/card1.jpg"
                        alt="">
                    <div class="card-info">
                        <div class="d-flex align-items-center">
                            <div class="starter-outer">
                                <h2 class="num-text font-w600">Starter</h2>
                                <h4 class="mb-1 fs-14 mb-3">$50</h4>
                            </div>
                            <div class="token-outer ms-5">
                                <h2 class="num-text font-w600">Tokens</h2>
                                <h4 class="mb-1 fs-14 mb-3">3.33</h4>
                            </div>
                        </div>
                        <input type="hidden" name="deposit_amt" class="depositAmount" id="deposit_amt_1" value="50">
                        <input type="hidden" name="deposit_token" class="depositAmount" id="deposit_token_1"
                            value="3.33">
                        <div class="svg-outer mb-3 text-end">
                            <img class="logo-icon-image img-fluid"
                                src="https://metasociality.io/meta-sociality/meta-dashboard/xhtml/images/logo-icon.png"
                                alt="">
                        </div>

                        <div class="d-flex justify-content-between">
                            <div class="me-3 ">
                                <p class="fs-12 mb-1 op6">DAYS</p>
                                <span>2100</span>
                            </div>
                            <div class="me-3 ">
                                <p class="fs-12 mb-1 op6">Dividend</p>
                                <span>0.14 / Day</span>
                            </div>
                            <div class="me-3 ">
                                <a href="javascript:void(0)" onclick="approve()"
                                    class="btn btn-secondary depositRe">Approve</a>
                            </div>

                            <div class="me-3 ">
                                <a href="javascript:void(0)" onclick="approveBUSD()"
                                    class="btn btn-secondary depositReBUSD">Approve BUSD</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div> --}}

    </div>

@endsection
