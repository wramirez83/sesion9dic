<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

    <title>Index</title>
</head>
<body>
   <header class="col-12">
        <nav class="navbar fixed-top navbar-dark bg-dark">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Sena_Colombia_logo.svg/1045px-Sena_Colombia_logo.svg.png" width="50" alt="">
                </a>
            </div>
        </nav>
   </header>
   <section>
       <article class="col-12">
           <img src="https://camaralucida.com/wp-content/uploads/2020/03/bannerrecorrido.jpg" alt="" class="img-fluid">
       </article>
       @foreach ($cards as $card )
            <div class="container">
                <div class="row">
            <article class="col-4">
                <div class="card" style="width: 19rem;">
                <img src="{{ $card['url'] }}" alt="" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nuestra Tecnologia</h5>
                        <p class="card-text">
                            Nuestros recorridos virtuales por el SENA - Escuela de Gastronomia
                        </p>
                    </div>
                </div>
            </article>
            <article class="col-8">
                <div class="card">
                    <div class="card-body">
                        {{ $card['data'] }}
                    </div>
                </div>
            </article>
            </div>
            </div>
       @endforeach
       
   </section>
   <aside>

   </aside>
   <footer class="navbar fixed-bottom navbar-dark bg-dark text-center" style="text-align: center; color:white;">
        <div class="container-fluid">
            <div class="col-12 text-center">
                Derechos Reservados SENA
            </div>
        </div>
   </footer>
</body>
</html>