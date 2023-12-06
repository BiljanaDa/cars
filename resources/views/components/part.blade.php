<div class="row">
    <div class="col">
      <div class="card-deck">
        <!-- Ovaj deo treba ponoviti za svaki automobil (sve ovo što sledi ide unutar petlje za prikaz automobila) -->
        <div class="card shadow-sm">
          <div class="card-body d-flex flex-column">
            <h1 class="card-title">{{ $part->name }}</h1>
            <img src="{{ $part->image_url }}" class="card-img-top" style="height: 200px; object-fit: cover;">
            <p class="card-text">{{ $part->category }}</p>
            <div class="mt-auto">
              <a href="/parts/{{ $part->id }}" class="btn btn-sm btn-outline-secondary">View</a>
            </div>
          </div>
        </div>
        <!-- Kraj dela koji se ponavlja -->
      </div>
    </div>
  </div>