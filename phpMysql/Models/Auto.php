<?php

class Auto{
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;
    private $mensajeOp;

    function __construct()
    {
        $this->patente = "";
        $this->marca = "";
        $this->modelo = "";
        $this->dniDuenio = "";
        $this->mensajeOp = "";
    }

    public function setear($idAuto, $marca, $modelo, $dniDuenio){
        $this->setPatente($idAuto);
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setDniDuenio($dniDuenio);
    }

    public function getPatente(){
        return $this->patente;
    }

    public function setPatente($patente){
        $this->patente = $patente;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function getDniDuenio(){
        return $this->dniDuenio;
    }

    public function setDniDuenio($dniDuenio){
        $this->dniDuenio = $dniDuenio;
    }

    public function getMensajeOp(){
        return $this->mensajeOp;
    }

    public function setMensajeOp($mensajeOp){
        $this->mensajeOp = $mensajeOp;
    }

    public function cargar(){
        $resp = false;
        $base = new Db();
        $sql = "SELECT * FROM auto WHERE patente = ". $this->getPatente();
        if($base->iniciar()){
            $resp = $base->Ejecutar($sql);
            if($resp>-1){
                $row = $base->Registro();
                $this->setear($row['patente'], $row['marca'], $row['modelo'], $row['dniDuenio']);
            }
        }else{
            $this->setMensajeOp('Auto->listar: '.$base->getError());
        }
        return $resp;
        }

    
        public function insertar(){
            $resp = false;
            $base = new Db();
            $sql = 'INSERT INTO auto(Patente, Marca, Modelo, DniDuenio) VALUES("'.$this->getPatente().'","'.$this->getMarca().'","'.$this->getModelo().'","'.$this->getDniDuenio().'");';
            if($base->Iniciar()){
                if($elid = $base->Ejecutar($sql)){
                    $this->setPatente($elid);
                    $resp = true;
                }else{
                    $this->setMensajeOp('Auto->insertar: '.$base->getError());
                }
            }else{
                $this->setMensajeOp('Auto->insertar: '.$base->getError());
            }
            return $resp;
        }

        public function modificar(){
            $resp = false;
            $base = new Db();
            $sql = "UPDATE auto SET Marca='".$this->getMarca()."', Modelo='".$this->getModelo()."', DniDuenio='".$this->getDniDuenio()."' WHERE Patente ='".$this->getPatente()."';";
            if($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp = true;
                }else{
                    $this->setMensajeOp("Auto->modificar: ".$base->getError());
                }
            }else{
                $this->setMensajeOp("Auto->modificar: ".$base->getError());
            }
            return $resp;
        }

        public function eliminar(){
            $resp = false;
            $base = new Db();
            $sql = "DELETE FROM auto WHERE Patente=".$this->getPatente();
            if($base->Iniciar()){
                if($base->Ejecutar($sql)){
                    $resp = true;
                }else{
                    $this->setMensajeOp("Auto->eliminar: ".$base->getError());
                }
            }else{
                $this->setMensajeOp("Auto->eliminar: ".$base->getError());
            }
            return $resp;
        }

        public static function listar($parametro = ""){
            $arreglo = array();
            $base = new Db();
            $sql = "SELECT * FROM auto ";
            if($parametro != ""){
                $sql.="WHERE ".$parametro.";";
            }
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    while($row = $base->Registro()){
                        $obj = new Auto();
                        $obj->setear($row['Patente'], $row['Marca'], $row["Modelo"], $row['DniDuenio']);
                        array_push($arreglo, $obj);
                    }
                }
            }else{
                //$this->setMensajeOp("Auto->listar: ".$base->getError());
            }
            return $arreglo;
        }

}

?>