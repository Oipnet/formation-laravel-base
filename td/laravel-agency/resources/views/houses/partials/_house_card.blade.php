<div class="col">
    <div class="card h-100">
        <img src="{{ asset('storage/houses/'.$house->media->path) }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $house->title }}</h5>
            <p class="card-text">
                {{ $house->description }}
                <div class="row gap-1 row-cols-md-1">
                    @foreach($house->features as $feature)
                        <span class="badge rounded-pill text-bg-{{ $feature->color->value }}">{{ $feature->label }} : {{ $feature->pivot->value }}</span>
                    @endforeach
                    <span class="text-end">{{ $house->displayed_price }}</span>
                </div>
            </p>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn-primary">Voir le detail</a>
        </div>
    </div>
</div>
