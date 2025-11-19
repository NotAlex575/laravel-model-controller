<div class="col-6 col-md-2 mb-4">
    <div class="card text-white h-100" style="background-color: #1E1E1E; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.3);">
        <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title">{{ $title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $original_title }}</h6>
            <p class="card-text mb-1"><strong>Nazionalità:</strong> {{ $nationality }}</p>
            <p class="card-text mb-1"><strong>Anno:</strong>{{ $date }}</p>
            <p class="card-text mb-2"><strong>Voto:</strong> <span class="badge bg-success">{{ $vote }}</span></p>
        </div>
    </div>
</div>