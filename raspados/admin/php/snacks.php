<?php
class snacks
{
    private $img;
    private $nom;
    private $pre;
    private $desc;
    private $tipo;
    public function conexion()
    {
        $con = mysqli_connect("localhost", "root", "", "mexicolindo");
        return $con;
    }
    public function inicializar($imagen, $nombre, $precio, $descripcion, $tipo)
    {
        $this->img = $imagen;
        $this->nom = $nombre;
        $this->pre = $precio;
        $this->desc = $descripcion;
        $this->tipo = $tipo;
    }
    public function agregarSnacks()
    {
        $imgBinario = mysqli_real_escape_string($this->conexion(), $this->img);
        $registro = mysqli_query($this->conexion(), "SELECT * FROM productos WHERE nombre = '$this->nom'") or die("Error de validación" . mysqli_error($this->conexion()));

        if (mysqli_num_rows($registro) > 0) {
            echo "<script>alert('Este registro ya existe');window.location.href = window.location.href = '../snacks.php';</script>";
        } else {
            mysqli_query($this->conexion(), "INSERT INTO productos (imagen, nombre, precio, descripcion, tipo) VALUES ('$imgBinario', '$this->nom', '$this->pre', '$this->desc','$this->tipo')") or die("No se pudo agregar" . mysqli_error($this->conexion()));
            echo "<script>alert('Se ha realizado el registro');window.location.href = window.location.href = '../snacks.php';</script>";
        }
    }
    public function modificar($id)
    {
        $query = "SELECT * FROM productos WHERE id ='$id'";
        $registro = mysqli_query($this->conexion(), $query);
        if ($reg = mysqli_fetch_assoc($registro)) {
            echo '<div id="modificar" class="modificar">
                <h3>Snacks</h3>
                <form action="" method="post" enctype="multipart/form-data">
                <div class="imagen">
                    <label for="img"><box-icon name="camera"></box-icon></label>
                    <input id="img" type="file" name="imagen" onchange="mostrarImagenM()" accept="image/*" autocomplete="off">
                    <img id="vista_previa" src="data:image/*;base64,' . base64_encode($reg['imagen']) . '">
                </div>
                <div class="datos">
                    <label for="nom">Nombre</label>
                    <input type="text" name="nombre" id="nom" autocomplete="off" value="' . $reg['nombre'] . '">
                    <label for="precio">Precio</label>
                    <input type="number" name="precio" id="precio" autocomplete="off" value="' . $reg['precio'] . '" step="0.01">
                    <label for="desc">Descripcion</label>
                    <textarea name="descripcion" id="desc" cols="25" rows="5" autocomplete="off">' . $reg['descripcion'] . '</textarea>
                </div>
                <div class="botones">
                    <button class="btn-borrar" id="cancelarM" type="button"><a href ="../snacks.php">Cancelar</a></button>
                    <input type="hidden" name="opciones" value="3">
                    <input type="hidden"  name="codigo" value="' . $reg['id'] . '">
                    <button class="btn-modificar" id="agregar" type="submit">Modificar</button>
                </div>
            </form>
        </div>';
        }
    }
    public function modificar2($imagen, $nombre, $precio, $descripcion, $id)
    {
        $imgBinario = '';

        if (isset($imagen['tmp_name']) && !empty($imagen['tmp_name'])) {
            $imgBinario = mysqli_real_escape_string($this->conexion(), file_get_contents($imagen['tmp_name']));
        } else {
            $registro = mysqli_query($this->conexion(), "SELECT * FROM productos WHERE id='$id'");
            if ($reg = mysqli_fetch_assoc($registro)) {
                $imgBinario = $reg['imagen'];
            }
        }

        $nombreEscaped = mysqli_real_escape_string($this->conexion(), $nombre);
        $precioEscaped = mysqli_real_escape_string($this->conexion(), $precio);
        $descripcionEscaped = mysqli_real_escape_string($this->conexion(), $descripcion);
        $imgEscaped = mysqli_real_escape_string($this->conexion(), $imgBinario);

        $modificar = mysqli_query($this->conexion(), "UPDATE productos SET imagen ='$imgEscaped', nombre = '$nombreEscaped', precio = '$precioEscaped', descripcion = '$descripcionEscaped' WHERE id ='$id'")
            or die(mysqli_error($this->conexion()));

        if ($modificar) {
            echo "<script>alert('Se modifico correctamente');window.location.href = window.location.href = '../snacks.php';</script>";
            exit();
        } else {
            echo "<script>alert('No se realizo la modificación correctamente');window.location.href = window.location.href = '../snacks.php';</script>";
            exit();
        }
    }
    public function borrar($id)
    {
        $registro = mysqli_query($this->conexion(), "SELECT * FROM productos WHERE id='$id'") or die("No se pudo borrar" . mysqli_error($this->conexion()));
        if (mysqli_fetch_array($registro)) {
            $registro = mysqli_query($this->conexion(), "DELETE FROM productos WHERE id='$id'") or die("No se pudo borrar" . mysqli_error($this->conexion()));
            echo "<script>alert('Se a borrado el registro del sistema');window.location.href = window.location.href = '../snacks.php';</script>";
        } else {
            echo "<script>alert('El producto ya fue borrado del sistema');window.location.href = window.location.href = '../snacks.php';</script>";
        }
    }
    public function pagina()
    {
        header("Location: ../snacks.php");
    }
    public function cerrarBD()
    {
        mysqli_close($this->conexion());
    }
}
