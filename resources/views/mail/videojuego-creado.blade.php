<h3>
    {{ $videojuego->user->name }}
</h3>
<p>
    <a href="{{url('/videojuegos/' . $videojuego->id) }}">ha añadido un videojuego nuevo</a>
</p>