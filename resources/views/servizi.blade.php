<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    @vite(['resources/css/app.css','resouces/js/app.js'])
  </head>
  <body>
    <x-navbar/>

    <h1>Servizi per voi</h1>
    <div class='row'>
      @foreach ($servizi as $servizio)
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$servizio ['nome']}}</h5>
          <h5>{{$servizio ['prezzo']}} €</h5>
          <a href="#" class="btn btn-primary">acquista</a>
        </div>
      </div>
      @endforeach

    </div>
    
  </body>
</html>