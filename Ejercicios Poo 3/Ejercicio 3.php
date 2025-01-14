<?php
class Producto
{
    protected $titulo, $precio;
    public function __construct($titulo, $precio)
    {
        $this->titulo = $titulo;
        $this->precio = $precio;
    }
    public function __tostring()
    {
        return "<p>Título: " . $this->titulo . "</p>
            <p>Precio: " . $this->precio . "</p>";
    }
}
class CD extends Producto
{
    protected $duracion;
    public function __construct($titulo, $precio, $duracion)
    {
        parent::__construct($titulo, $precio);
        $this->duracion = $duracion;
    }
    public function __tostring()
    {
        return "<h3>CD</h3>" . parent::__tostring() . "<p>Duración: " . $this->duracion . "</p>";
    }
}
class Libro extends Producto
{
    protected $numeroPaginas;
    public function __construct($titulo, $precio, $numeroPaginas)
    {
        parent::__construct($titulo, $precio);
        $this->numeroPaginas = $numeroPaginas;
    }
    public function __tostring()
    {
        return "<h3>Libro</h3>" . parent::__tostring() . "<p>Número de Páginas: " . $this->numeroPaginas . "</p>";
    }
}

class LibroAntiguo extends Libro
{
    protected $fecha;
    public function __construct($titulo, $precio, $numeroPaginas, $fecha)
    {
        parent::__construct($titulo, $precio, $numeroPaginas);
        $this->fecha = $fecha;
    }
    public function __tostring()
    {
        return "<h3>Libro Antiguo</h3>
            <p>Título: " . $this->titulo . "</p>
            <p>Precio: " . $this->precio . "</p>
            <p>Número de Páginas: " . $this->numeroPaginas . "</p>
            <p>Fecha: " . $this->fecha . "</p>";
    }
}
echo "<h1>Lista de productos disponibles</h1>";
$cd = new CD("La morena", "50€", "325 min");
echo $cd;
$libro = new Libro("El Quijote", "39,99€", "523 páginas");
echo $libro;
$libroAntiguo = new LibroAntiguo("Antiguo", "24,99€", "534 páginas", "12/10/1978");
echo $libroAntiguo;
?>