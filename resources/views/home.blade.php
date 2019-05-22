@extends('shell')

@section('content')
<div class="row container login">
  <div class="col-4">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif


      <h2>Välkommen <?php echo Auth::user()->name ?>!</h2>
      <p>Du är nu inloggad och har tillgång till allt extra material. <br><br>Xoxo, Scarlet-familjen</p>
  </div>
  <div class="col-8">
    <img src="./image/welcome.jpg" alt="">
  </div>
</div>
@endsection
