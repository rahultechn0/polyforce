@extends('main_admin')
@section('title', 'Leadership-Report')
@section('content')
    <div class="container">
        <div class="active-package">
            <div class="section-heading">
                <h3>Leadership Report</h3>
            </div>
            <div class="package-table table-responsive">

                <table class="w-100">
                    <tr>
                        <th>Rank</th>
                        <th>Direct Business</th>
                        <th>Direct Team</th>
                        <th>Days</th>
                        <th>Rank Achiever</th>
                        <!--<th>High Leg</th>-->
                        <!--<th>Other Leg</th>-->
                        <th>status</th>
                    </tr>

                    @foreach ($packages as $key => $trans)
                        <?php $s2Rank = getRankS2($userData->id);
                        $s3Rank = getRankS3($userData->id);
                        $s4Rank = getRankS4($userData->id);
                        $rankdData = getHighLegBusiness($userData->id,$trans->id);
                                //dd($udate);

                            $end = Carbon\Carbon::parse($userData->created_at);
                            $current = Carbon\Carbon::now();
                            $length = $end->diffInDays($current);

                                ?>

                            <tr>
                                <td>{{$trans->name}}</td>
                                <td>{{$directBusiness}}</td>
                                <td>{{$teamSize}}</td>
                                <td>@if($trans->id==6) {{45-$length}} @else - @endif</td>
                                <!-- <td>0</td> -->
                                <td>@if($trans->priority==4) {{$s2Rank}} @elseif($trans->priority==5) {{$s3Rank}}  @elseif($trans->priority==6) {{$s4Rank}} @else - @endif</td>
                                <!--<td>@if($trans->priority==2 && isset($rankdData->highest_leg_business)) {{ $rankdData->highest_leg_business}} @elseif($trans->priority==3 && isset($rankdData->highest_leg_business)) {{ $rankdData->highest_leg_business}} @else - @endif</td>-->
                                <!--<td>@if($trans->priority==2 && isset($rankdData->other_leg_business)) {{ $rankdData->other_leg_business}} @elseif($trans->priority==3 && isset($rankdData->other_leg_business)) {{ $rankdData->other_leg_business}} @else - @endif</td>-->
                                <td>@if($trans->id == 1 && $userData->star==1) 1
                                    @elseif($trans->id == 2 && $userData->star1==1) Achieved
                                    @elseif($trans->id == 3 && $userData->star2==1) Achieved
                                    @elseif($trans->id == 4 && $userData->star3==1) Achieved
                                    @elseif($trans->id == 5 && $userData->star4==1) Achieved
                                    @elseif($trans->id == 6 && $userData->star5==1) Achieved
                                    @else Not Achieved
                                    @endif </td>
                            </tr>


                    @endforeach

                </table>
            </div>
        </div>
    </div>
@endsection
