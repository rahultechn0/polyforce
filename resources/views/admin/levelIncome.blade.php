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
                            <h5 class="mb-0">Level Report</h5>
                        </div>
                        <div class="font-22 ms-auto"><i class="bx bx-dots-horizontal-rounded"></i></div>
                    </div>
                    <hr />
                    <div class="table-responsive">
						<table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead class="table-light">
                                <tr>
                                    <th>S.No.</th>
                                    <th> Type</th>
                                    <th>User Id</th>
                                    <th>Register Id</th>
                                    <th>Amount</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
								@foreach($roiList as $key => $trans )
                                    <tr class="odd" role="row">
                                        <td>{{ $key+1 }}</td>
                                        <td>@php echo $trans['type']; @endphp</td>
                                        <td>@php echo !empty($trans->userData->registerId)  ? $trans->userData->registerId : 0; @endphp</td>
                                        <td>@php echo !empty($trans->referralUser->registerId)  ? $trans->referralUser->registerId : 0; @endphp</td>
                                        <td>$@php echo $trans['amount']; @endphp</td>
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
