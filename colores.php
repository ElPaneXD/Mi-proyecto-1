<?php
    require("cabecera.php");
?>

        <div class="row">
            <div class="col-4 bg-warning">
                <h3>ELECCIÓN DE COLORES</h3>
                <form action="" method="post">
                    <label for="select_color">Escoja el color de su preferencia:</label>
                    <div class="input-group">
                        <select name="select_color" id="select_color">
                            <option value="azul">Azul</option>
                            <option value="rojo">Rojo</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="col-8 bg-info">
                <p>Resultados para colores</p>
            </div>
        </div>
<?php
    require("pie.php");
?>