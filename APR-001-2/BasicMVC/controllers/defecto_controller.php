<?php
class DefectoController extends BaseController {

    function get() {
        require("models/ejemplo_model.php");
        $model = new EjemploModel();
        $cantidad = $model->cantidad();

        $this->render("defecto_get", array(
            'cantidad' => $cantidad
        ));
    }
}