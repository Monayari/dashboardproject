<tr>
    <td class="table-img">
        <img src="{{asset($img)}}" alt>
    </td>
    <td>{{$name}}</td>
    <td>{{$product}}</td>
    <td>
        <span class="label {{$color}} shadow-style">{{$status}}</span>
    </td>
    <td>{{$count}}</td>
    <td>
        <div class="progress shadow-style">
            <div class="progress-bar {{$progress}} width-per-{{$width}}" role="progressbar" aria-valuenow="{{$width}}" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </td>
</tr>
