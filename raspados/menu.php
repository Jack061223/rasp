<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Raspados México Lindo</title>
  <link rel="stylesheet" href="CSS/menu.css">
  <style>
   .menu {
      display: flex;
      justify-content: space-between;
    }

    .producto {
      text-align: center;
    }

    .cantidad-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 10px;
    }

    .cantidad-symbol {
      font-size: 20px;
      cursor: pointer;
    }

    .cantidad-value {
      margin: 0 10px;
    }
  </style>
</head>

<body>
  <header>
    <div class="header-container">
      <div class="user-profile">
        <img src="profile.jpg" alt="User Profile">
        <span>Nombre de Usuario</span>
      </div>
      <nav>
        <ul>
          <li><a href="APP/menu.html">Menú</a></li>
          <li><a href="#paquetes">Paquetes</a></li>
          <li><a href="#ofertas">Ofertas</a></li>
          <li><a href="#carrito">Carrito</a></li>
          <li><a href="principal.html">cerrar sesion</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div class="menu">
    <div class="producto">
      <h3>LECHE</h3>
      <img src="imagen1.jpg">
      <h2>Lechera</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Chocolate</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Mamey</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Cajeta</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Rompope</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Nescafe</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Chocoretas</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera y chocolate liquido
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Piña colada</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Coco</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Arroz</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera y chocolate liquido
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera y canela
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Cereza</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Chocolate</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera y chocolate liquido
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Mazapan</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Moka</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Fresa de Leche</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Chicle rosa</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Chicle azul</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>
    </div>
















    <div class="producto">
      <h3>AGUA</h3>
      <img src="imagen1.jpg">
      <h2>Limón</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con Chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Uva</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Guanabana</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Guayaba</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con Chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Angelito</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con Chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Mango</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con Chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Piña</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con Chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Fresa</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con Chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Maracuya</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con Chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Grosella</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con Chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Tamarindo</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
       <label>
        <input type="radio" name="opcion" value="con_lechera"> Con Chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Cereza de agua</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con Chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Durazno</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con Chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Frutos rojos</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $30</option>
        <option value="opcion2">vaso N.12 $35</option>
        <option value="opcion3">vaso N.14 $45</option>
        <option value="opcion4">vaso N.16 $50</option>
        <option value="opcion5">vaso N.1L $100</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con Chile
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>
    </div>







    <div class="producto">
      <h3>SNACKS</h3>
      <img src="imagen1.jpg">
      <h2>Cueritos Preparados</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">chico $15</option>
        <option value="opcion2">mediano $30</option>
        <option value="opcion3">grande $60</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Papas locas</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">precio $40</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Chicharron preparado</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">mitas $15</option>
        <option value="opcion1">completo $30</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Chicharron especial</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">mitas $25</option>
        <option value="opcion1">completo $50</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Dorilocos</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">precio $40</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>


      <img src="imagen1.jpg">
      <h2>Pepinos locos</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">precio $40</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>
    </div>




    <div class="producto">
      <h3>ESPECIALIDADES</h3>
      <img src="imagen1.jpg">
      <h2>Sangria preparada</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">precio $40</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

       <img src="imagen1.jpg">
      <h2>Tehuacan Preparado</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">precio $40</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

       <img src="imagen1.jpg">
      <h2>Squirt preparado</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">precio $40</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Baileys</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $35</option>
        <option value="opcion2">vaso N.12 $40</option>
        <option value="opcion3">vaso N.14 $50</option>
        <option value="opcion4">vaso N.16 $60</option>
        <option value="opcion5">vaso N.1L $110</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Pistache</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $35</option>
        <option value="opcion2">vaso N.12 $40</option>
        <option value="opcion3">vaso N.14 $50</option>
        <option value="opcion4">vaso N.16 $60</option>
        <option value="opcion5">vaso N.1L $110</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Nuez</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $35</option>
        <option value="opcion2">vaso N.12 $40</option>
        <option value="opcion3">vaso N.14 $50</option>
        <option value="opcion4">vaso N.16 $60</option>
        <option value="opcion5">vaso N.1L $110</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>Napolitano</h2>
      <p>Cantidad de raspados que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">vaso N.10 $35</option>
        <option value="opcion2">vaso N.12 $40</option>
        <option value="opcion3">vaso N.14 $50</option>
        <option value="opcion4">vaso N.16 $60</option>
        <option value="opcion5">vaso N.1L $110</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <label>
        <input type="radio" name="opcion" value="solo"> Solo
      </label>
      <label>
        <input type="radio" name="opcion" value="con_lechera"> Con lechera
      </label>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>

      <img src="imagen1.jpg">
      <h2>RASPACHELAS</h2>
      <p>Cantidad que comprarás</p>
      <div class="cantidad-container">
        <span class="cantidad-symbol" onclick="decrementarCantidad(this)">-</span>
        <span class="cantidad-value">1</span>
        <span class="cantidad-symbol" onclick="incrementarCantidad(this)">+</span>
      </div>
      <p>¿De que tamaño y precio va a tener?</p>
      <select>
        <option value="opcion1">con una cerveza $65</option>
        <option value="opcion2">con dos cerveza $85</option>
      </select>
      <p>¿Qué vas a querer que lleve?</p>
      <select>
        <option value="opcion1">Guanabana</option>
        <option value="opcion2">Guayaba</option>
        <option value="opcion3">Mango</option>
        <option value="opcion4">Piña</option>
        <option value="opcion5">Fresa</option>
        <option value="opcion6">Maracuya</option>
        <option value="opcion7">Grosella</option>
        <option value="opcion8">Tamarindo</option>
        <option value="opcion9">Cereza de agua</option>
        <option value="opcion10">Durazno</option>
        <option value="opcion10">Frutos rojos</option>
      </select>
      <p></p>
      <button class="agregar" onclick="agregarProducto(this)">Agregar</button>
      <p></p>


    </div>
  </div>

  <footer>
    <p>&copy; 2023 Raspados Deliciosos. Todos los derechos reservados.</p>
  </footer>

  <script src="JS/pj.js"></script>
  <script>
    function incrementarCantidad(element) {
      var cantidadElement = element.parentElement.querySelector(".cantidad-value");
      var cantidad = parseInt(cantidadElement.textContent);
      cantidadElement.textContent = cantidad + 1;
    }

    function decrementarCantidad(element) {
      var cantidadElement = element.parentElement.querySelector(".cantidad-value");
      var cantidad = parseInt(cantidadElement.textContent);
      cantidadElement.textContent = cantidad - 1 >= 0 ? cantidad - 1 : 0;
    }

    function agregarProducto(element) {
      var productoElement = element.parentElement;
      var nombre = productoElement.querySelector("h2").textContent;
      var cantidad = parseInt(productoElement.querySelector(".cantidad-value").textContent);
      var opcion = productoElement.querySelector("select").value;
      // Aquí puedes hacer algo con los datos del producto, como agregarlos al carrito o enviarlos al servidor
    }
  </script>
</body>

</html>