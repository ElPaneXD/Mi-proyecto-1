<?php
    require("cabecera.php");
?>

        <div class="row">
            <div class="col-4 bg-warning">
                <h3>REGISTRO DE CLIENTES</h3>
                <form action="" method="post">
                    <label for="txt-dni">DNI</label>
                    <div class="input-group">
                        <input type="text" name="txt-dni" id="txt_dni" class="form-control">
                    </div>
                    <label for="txt_pat" class="form-label">Apellido Paterno</label>
                    <div class="input-group">
                        <input type="text" name="txt_pat" id="txt_pat" class="form-control">
                    </div>
                    <label for="txt_mat" class="form-label">Apellido Materno</label>
                    <div class="input-group">
                        <input type="text" name="txt_mat" id="txt_mat" class="form-control">
                    </div>
                    <label for="txt_nom" class="form-label">Nombres</label>
                    <div class="input-group">
                        <input type="text" name="txt-nom" id="txt-nom" class="form-control">
                    </div>
                    <label for="" class="form-label">Sexo:</label>
                    <div class="form-check">
                        <input type="radio" name="sexo" value="1" class="form-check-input">Masculino
                    </div>
                    <div class="form-check">
                        <input type="radio" name="sexo" value="2" class="form-check-input">Femenino
                    </div>
                    <label for="txt_tel" class="form-label">Teléfono:</label>
                    <div class="input-group">
                        <input type="text" name="txt_tel" id="txt_tel" class="form-control">
                    </div>
                    <div class="input-group">
                        <button type="submit" class="btn btn-success mt-3 mb-3">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="col-8 bg-info">
                <p>Resultados para clientes</p>
            </div>
        </div>
<?php
    require("pie.php");
?>