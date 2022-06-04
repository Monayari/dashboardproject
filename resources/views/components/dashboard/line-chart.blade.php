<div class="plain-card">
    <div class="card-inner">
        <h6 class="tx-primary m-b-10">گزارش فروش</h6>
        <div class="row">
            <div class="col col-block">
                <label class="font-14">امروز</label>
                <p>{{$day}}</p>
            </div>
            <div class="col col-block">
                <label class="font-14">این هفته</label>
                <p>{{$week}}</p>
            </div>
            <div class="col col-block">
                <label class="font-14">این ماه</label>
                <p>{{$month}}</p>
            </div>
        </div>
        <div class="progress shadow-style">
            <div class="progress-bar l-bg-{{$color}} width-per-70" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100">{{$percent}}</div>
        </div>
    </div>
</div>
