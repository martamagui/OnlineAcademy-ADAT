<?php
include_once 'header.php'
?>
//TODO Recoger valores del select, me he quedado aqui.
<div class="wrapper">
    <form action="courses_list.php" method="post">
        <h4>Filtrar por categoría:</h4>
        <select name="category" id="select-category">
            <option value="All">Todos</option>
            <option value="Ilustración">Ilustración</option>
            <option value="Reciclaje">Reciclaje</option>
            <option value="Punto y Bordado">Punto y Bordado</option>
        </select>
        <h4>Ordenar por:</h4>
        <select name="orderBy" id="select-order">
            <option value="none">Relevancia</option>
            <option value="title">Orden álfabetico</option>
            <option value="price">Precio ascendente</option>
            <option value="priceDesc">Precio descendente</option>
        </select>
        <button type="submit" class="button-dark basic__button">Mostrar resultados</button>
    </form>
</div>
<div class='products__container'>
    <?php
    include_once 'php/list_component.php'
    ?>
</div>
<?php
include_once 'footer.php'
?>