<main class="card-focus">
    <div class="hero"></div>
    <div class="blue-banner">
        <div class="container">
          <div class="active-series">
            <img src="{{ $card['thumb']}}" alt="card">
          </div>
        </div>
    </div>
    <div class="container">
      {{-- <div class="contents"> --}}
 
        <h2>{{ $card['title'] }}</h2>
        <h5>{{ $card['type'] }}</h5>
        <p>U.S. Price: {{ $card['price'] }}</p>
        <p>{{ $card['description']}}</p>


      {{-- </div> --}}
    </div>
  </main>