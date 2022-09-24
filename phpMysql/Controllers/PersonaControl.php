<?php

//include_once 'Models/modelPersona.php';

class PersonaControl extends Controller{

    public function __construct()
    {
        parent::__construct();
       //$this->personaObj = new Persona();
       //$this->view->personas = $this->listar();
    }

    function render(){
        $this->view->render('personas/index');
    }

    public function listar(){
        return $this->personaObj->listar();
    }

    public function insertar($datos){
        $fecha = $datos['inputFechaNac'];
        $fecha = explode('-', $fecha);
        $fecha = $fecha[2]."-".$fecha[1]."-".$fecha[0];
        echo $fecha."<br>";
        $this->personaObj->setear($datos['inputDni'],$datos['inputApellido'],$datos['inputNombre'],$fecha,$datos['inputTelefono'],$datos['inputDomicilio']);
    }


    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto($param){
        $obj = null; 
        if( array_key_exists('inputDni',$param)){
            $obj = new Persona();
            $obj->setear($param['inputDni'], $param['inputApellido'], $param['inputNombre'], $param['inputFechaNac'], $param['inputTelefono'], $param['inputDomicilio']);
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Tabla
     */

    private function cargarObjetoConClave($param){
        $obj = null;

        if(isset($param['inputDni'])){
            $obj = new Persona();
            $obj->setear($param['inputDni'], $param['inputApellido'], $param['inputNombre'], $param['inputFechaNac'], $param['inputTelefono'], $param['inputDomicilio']);
        }
        return $obj;
    }

    /**
     * permite agregar un objeto 
     * @param array $param
     * @return boolean
     */
    public function alta($param){
        $resp = false;
        //$param['inputDni'] = null;
        $elObjPersona = $this->cargarObjeto($param);

        if($elObjPersona != null AND $elObjPersona->insertar()){
            $resp = true;
        }
        return $resp;
    }

    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */

    private function seteadosCamposClaves($param){
        $resp = false;
        if(isset($param['inputDni'])){
            $resp = true;
        }
        return $resp;
    }

    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if($this->seteadosCamposClaves($param)){
            $elObjPersona = $this->cargarObjetoConClave($param);
            if($elObjPersona != null AND $elObjPersona->eliminar()){
                $resp = true;
            }else{
                $resp = 'No funca';
            }
        }
        return $resp;
    }

    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */

     public function modificacion($datos){
        $resp = false;
        if($this->seteadosCamposClaves($datos)){
            $elObjPersona = $this->cargarObjeto($datos);
            if($elObjPersona != null AND $elObjPersona->modificar()){
                $resp = true;
            }
        }
        return $resp;
     }


     /**
      * Buscamos a un persona por su numero de documento
      * @param string $dni
      * @return array // de objetos 
      */
     public function buscarPorDni($dni){
        $sql = 'NroDni = "'.$dni.'";';
        $persona = null;
        $objPersona = new Persona();
        if(count($objPersona->listar($sql)) > 0){
            $persona = $objPersona->listar($sql);
        }
        return $persona;
     }

     
     public function obtenerError(){
        $persona = new Persona();
        return $persona->getMensajeOp();
     }

}

?>