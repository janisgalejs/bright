<div class="col-md-4 position-relative">
    <h3>Plānotās aktivitātes</h3>
    @if(count($activities))
    <ul class="list-style-none m-0 p-0">
        @foreach($activities as $activity)
            <li>{{ date('d.m.Y', strtotime($activity->date)) }} - {{ $activity->name }}</li>
        @endforeach
    </ul>
    @else
        <p class="alert alert-info">Nav ieplānota neviena aktivitāte</p>
    @endif
    <div class="row position-absolute bottom-0">
        <div class="col text-end">
            <p>Vārda dienas svin: Digmārs, Juliāns, Rota, Zigmārs</p>
            <p>Dzimšanas dienas svin: Jānis Bērziņš</p>
        </div>
    </div>
</div>
