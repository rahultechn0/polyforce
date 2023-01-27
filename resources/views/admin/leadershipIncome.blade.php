@include("admin.adminCommon.head")

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<!--navigation-->
				@include("admin.adminCommon.sidebar")
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		@include("admin.adminCommon.header")
		<!--end header -->
        <!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">



            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <h5 class="mb-0">Leadership Income Report</h5>
                        </div>
                        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                    </div>
                    <hr />
                    <div class="table-responsive">
                        <table class="table align-middle mb-0" id="example">
                            <thead class="table-light">
                                <tr>
                                    <th>S.No.</th>
                                    <th>User Id</th>
                                    <th>Reward</th>
                                    <th>Rank</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach ($leadershipList as $key => $trans)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>@php echo !empty($trans->userData->registerId)  ? $trans->userData->registerId : 0; @endphp</td>
                                        <td>{{ $trans->amount }}</td>
                                        <td>{{ $trans->ranks->name }}</td>
                                        <!-- <td>{{ $trans->userData->registerId }}</td>  -->
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


			</div>
		</div>
	@include("admin.adminCommon.footer")
