<?php

class EjemploModel extends BaseModel {

    function todos() {
        $query = "SELECT col1, col2 FROM ejemplos";
        $params = array();

        $stmt = $this->queryList($query, $params);

        //Arreglo con todos los datos que están en la tabla
        return $stmt->fetchAll();
    }

    function cantidad() {
        $query = "SELECT count(1) FROM ejemplos";
        $params = array();

        $stmt =$this->queryList($query, $params);

        $resultado = $stmt->fetchAll();

        return $resultado[0]['count(1)'];
    }
}