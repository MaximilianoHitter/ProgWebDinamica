<?php

class Auto {
    // Atributos
    private $patente;
    private $marca;
    private $modelo;
    private $objPersona;
    private $mensajeOp;

    function __construct() {
        $this->patente    = '';
        $this->marca      = '';
        $this->modelo     = '';
        $this->mensajeOp  = '';
    }

    public function setear( $idAuto, $marca, $modelo, $objPersona ){
        $this->setPatente( $idAuto );
        $this->setMarca( $marca );
        $this->setModelo( $modelo );
        $this->setObjPersona( $objPersona );
    }

    // Getters & Setters
    public function getPatente() {
        return $this->patente;
    }
    public function setPatente( $patente ){
        $this->patente = $patente;
    }

    public function getMarca() {
        return $this->marca;
    }
    public function setMarca( $marca ){
        $this->marca = $marca;
    }

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo( $modelo ){
        $this->modelo = $modelo;
    }

    public function getObjPersona() {
        return $this->objPersona;
    }
    public function setObjPersona( $objPersona ){
        $this->objPersona = $objPersona;
    }

    public function getMensajeOp() {
        return $this->mensajeOp;
    }
    public function setMensajeOp( $mensajeOp ){
        $this->mensajeOp = $mensajeOp;
    }

    public function cargar($patente, $marca, $modelo, $documento){
        $objPersona = new Persona();
        
        $bandera = false;
        if( $objPersona->buscar($documento) ){
            $this->setPatente( $patente );
            $this->setMarca( $marca );
            $this->setModelo( $modelo );
            $this->setObjPersona( $objPersona );   
            $bandera = true;
        }
        return $bandera;
    }

    /* public function cargar() {
        $resp = false;
        $base = new db();
        $sql = "SELECT * FROM auto WHERE patente = ". $this->getPatente();
        if( $base->iniciar() ){
            $resp = $base->Ejecutar( $sql );
            if( $resp>-1 ){
                $row = $base->Registro();
                $this->setear( $row['patente'], $row['marca'], $row['modelo'], $row['dniDuenio'] );
            }
        } else {
            $this->setMensajeOp( 'Auto->listar: '.$base->getError() );
        }
        return $resp;
    } */

    
    public function insertar() {
        $base = new Db();

        $objPersona = $this->getObjPersona();
        $nroDni = $objPersona->getNroDni();

        $sql = 'INSERT INTO auto(Patente, Marca, Modelo, DniDuenio) VALUES("'.$this->getPatente().'","'.$this->getMarca().'","'.$this->getModelo().'","'.$nroDni.'");';
        
        $resp = false;
        if( $base->Iniciar() ){
            if( $elid = $base->Ejecutar($sql) ){
                $this->setPatente( $elid );
                $resp = true;
            } else {
                $this->setMensajeOp( 'Auto->insertar: '.$base->getError() );
            }
        } else {
            $this->setMensajeOp( 'Auto->insertar: '.$base->getError() );
        }
        return $resp;
    }

    public function modificar() {
        $base = new Db();

        $objPersona = $this->getObjPersona();
        $nroDni = $objPersona->getNroDni();

        $sql = "UPDATE auto SET Marca='".$this->getMarca()."', Modelo='".$this->getModelo()."', DniDuenio='".$nroDni."' WHERE Patente ='".$this->getPatente()."';";

        $resp = false;
        if( $base->Iniciar() ){
            if( $base->Ejecutar($sql) ){
                $resp = true;
            } else {
                $this->setMensajeOp( "Auto->modificar: ".$base->getError() );
            }
        } else {
            $this->setMensajeOp( "Auto->modificar: ".$base->getError() );
        }
        return $resp;
    }

    public function eliminar() {
        $base = new Db();

        $sql = "DELETE FROM auto WHERE Patente=".$this->getPatente();

        $resp = false;
        if( $base->Iniciar() ){
            if( $base->Ejecutar($sql) ){
                $resp = true;
            } else {
                $this->setMensajeOp( "Auto->eliminar: ".$base->getError() );
            }
        } else {
            $this->setMensajeOp( "Auto->eliminar: ".$base->getError() );
        }
        return $resp;
    }

    public static function listar( $parametro = "" ){
        $arreglo = array();
        $base = new Db();
        $sql = "SELECT * FROM auto ";
        if( $parametro != "" ){
            $sql.="WHERE ".$parametro.";";
        }
        $res = $base->Ejecutar( $sql );
        if( $res>-1 ){
            if( $res>0 ){
                while( $row = $base->Registro() ){
                    $patente = $row['Patente'];
                    $marca = $row['Marca'];
                    $modelo = $row['Modelo'];

                    $persona = new Persona();
                    $dniDuenio = $row['DniDuenio'];
                    $persona->buscar( $dniDuenio );
                    $objPersona = $persona;

                    $auto = new Auto();
                    $auto->setear( $patente, $marca, $modelo, $objPersona );
                    array_push( $arreglo, $auto );
                }
            }
        } else {
            //$this->setMensajeOp("Auto->listar: ".$base->getError());
        }
        return $arreglo;
    }
    
    public function buscar( $param ){
        $where = " true ";
        if( $param != null ){
            if ( isset($param['Patente']) ){
                $where .= " and patente = '" . $param['Patente'] . "'";
            } if ( isset($param['Marca']) ){
                $where .= " and marca = '" . $param['Marca'] . "'";
            } if ( isset($param['Modelo']) ){
                $where .= " and modelo ='" . $param['Modelo'] . "'";
            } if ( isset($param['DniDuenio']) ){
                $where .= " and dni_duenio = '" . $param['DniDuenio'] . "'";
            }
        }
        $array = Auto::listar( $where );
        return $array;
    }

}

?>