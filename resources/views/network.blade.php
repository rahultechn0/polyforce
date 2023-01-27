@extends('main_admin')
@section('title', 'My-Team')

@section('content')

<div class="container">
    <div class="team-main">
      <div class="row">
        <div class="col-sm-4 col-6">
          <div class="team-outer d-flex flex-wrap align-items-center justify-content-between">
            <div class="team-left">
              <p>Team Size</p>
              <h6>{{ count($teamSize) }}</h6>
            </div>
            <div class="team-right">
              <img src="images/team-icon.png" alt="" class="img-fluid"/>
            </div>
          </div>
        </div>
        <div class="col-sm-4 col-6">
          <div class="team-outer d-flex flex-wrap align-items-center justify-content-between">
            <div class="team-left">
              <p>Team Business</p>
              <h6>${{ $teamBusiness }} </h6>
            </div>
            <div class="team-right">
              <img src="images/team-icon.png" alt="" class="img-fluid"/>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="active-package">
      <div class="section-heading">
        <h3>My Team</h3>
      </div>
      <div class="package-table table-responsive">
        <table class="w-100 datatable">
          <thead>
          <tr>
            <th>S.No.</th>
            <th>Level Type</th>
            <th>Team Size</th>
            <th>Get Detail</th>
          </tr>
          </thead>
          <tbody>
          @if(!empty($levelArr))

            @foreach($levelArr as $key => $kk )
            @if($kk==!0)
               <tr>
                <td>{{ $key+1 }}</td>

                <td>Level @php echo ($key+1) ;@endphp</td>
                <td>@php echo $kk;@endphp</td>
                 <td><a href="javascript:void(0)" class="getDetails text-black text-decoration-underline" data-level="{{ $key+1 }}">Get Details</a></td>
                </tr>
                @endif
            @endforeach
        @endif
        </tbody>
        </table>
      </div>
    @if (count($teamSize)>1)
      <div class="section-heading mt-4">
          <h3>My Level Team</h3>
      </div>
    @endif

      <div id="directTeam">

      </div>

    </div>
  </div>
@endsection

@section('js')

    <style>
        .dis{ pointer-events: none;}
    </style>
    <script>
         $(".getDetails").click( function(){
          // alert('sdfsdfsd');
            $(".getDetails").addClass("dis");
            var levelNo       = $(this).data("level");
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "http://127.0.0.1:8000/get-team-info",
                data:{"levelNo":levelNo},
                dataType: 'json',
                type: 'POST',
                success: function(result)
                {
                    if(result.type =='success'){
                        $("#directTeam").html(result.table);
                        $(".getDetails").removeClass("dis");

                        $(window).scrollTop($('#directTeam').offset().top);

                    }else if(result.type =='error'){
                        $("#directTeam").html("");
                        $(".getDetails").removeClass("dis");
                    }
                }
            });
        });
        setTimeout(function(){  $("#totalBusiness").html(); } , 500);
    </script>
@endsection
