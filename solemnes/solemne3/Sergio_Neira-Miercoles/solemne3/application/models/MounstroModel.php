<?php 
    
    class MounstroModel extends CI_Model
    {
        /**
        * Método que permite obtener todos los mounstros que están registrados en la compañía.
        */
        public function buscarMounstrosRegistrados($idAdministrador)
        {
            $mounstros = $this->db
                          ->select("mou_id, mou_nombre, mou_especialidad, mou_area_trabajo, mou_fecha_contratacion")
                          ->from("Mounstro")
                          ->where("adm_id",$idAdministrador)
                          ->get();
            
            return $mounstros->result();
        }
        /**
        * Método que permite registrar un mounstro 
        */
        public function registrarUnMounstro($nombre, $especialidad, $areaDeTrabajo, $fechaDeContratacion)
        {
            $idSiguienteMounstro = $this->db
                                    ->select("mou_id")
                                    ->from("Mounstro")
                                    ->where("adm_id",1)
                                    ->count_all_results();
            $datos = array(
                'mou_id' => ++$idSiguienteMounstro,
                'mou_nombre' => $nombre,
                'mou_especialidad' => $especialidad,
                'mou_area_trabajo' => $areaDeTrabajo,
                'mou_fecha_contratacion' => $fechaDeContratacion,
                'adm_id' => 1
            );
            
            $this->db->insert('mounstro', $datos);
        }
        /**
        * Método que permite actualizar los datos del mounstro
        */
        public function actualizarDatosMounstro($id, $nombre, $especialidad, $areaDeTrabajo, $fechaDeContratacion)
        {
            $data = array(
                'mou_nombre' => $nombre,
                'mou_especialidad' => $especialidad,
                'mou_area_trabajo' => $areaDeTrabajo,
                'mou_fecha_contratacion' => $fechaDeContratacion
            );
            $idMounstro = intval($id);
            $this->db->where('mou_id', $idMounstro);
            $this->db->update('mounstro', $data);   
        }
        /**
        * Método que permite obtener solo los nombres de los mounstros registrados
        */
        public function obtenerNombresDeMounstrosRegistrados()
        {
            $mounstros = $this->db
                          ->select("mou_nombre")
                          ->from("Mounstro")
                          ->where("adm_id",1)
                          ->get();
            
            return $mounstros->result();
        }
        /**
        * Método que permite obtener los datos de un mounstro
        */
        public function obtenerDatosDeUnMounstro($nombreMounstro)
        {
            $mounstros = $this->db
                          ->select("mou_id ,mou_nombre, mou_especialidad, mou_area_trabajo, mou_fecha_contratacion")
                          ->from("Mounstro")
                          ->where("mou_nombre", $nombreMounstro)
                          ->get();
            
            return $mounstros->result();
        }
    }