
 <div class="package-table table-responsive">
    <table id="dataTable" class="w-100">
   
        <tr>
            <th>S No</th>
            <th>RegisterId</th>
            <th>Team Business</th>
            <th>Date Joined    </th>
        </tr>
   
   
        @foreach($users as $key => $user )

            @php 
                $business       = \App\Models\Transaction::where("user_id",$user['id'])->where("trans",0)->sum("amount");
            @endphp

            <tr>
            <td>@php echo $key+1;@endphp</td>
            <td>@php echo $user['registerId'];@endphp</td>
            <td>$@php echo number_format($business,2); @endphp</td>
            <td>@php echo date("Y-m-d",strtotime($user['created_at'])); @endphp</td>
            </tr>
        @endforeach

   
</table>
</div>

