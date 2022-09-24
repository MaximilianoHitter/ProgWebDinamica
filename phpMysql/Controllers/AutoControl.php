<?php

//require_once 'Models/Auto.php';

class AutoControl extends Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->autoObj = new Auto();
        // $this->view->auto = $this->listar();
    }

    function render()
    {
        $this->view->render('autos/index');
    }

    public function listar()
    {
        $lista = '';
        $objAuto = new Auto();
        $arrayAutos = $objAuto->listar();
        foreach ($arrayAutos as $key) {
            $lista .= 'Patente: ' . $key->getPatente() . '<br>' .
                'Marca: ' . $key->getMarca() . '<br>' .
                'Modelo: ' . $key->getModelo() . '<br>' .
                'DNI Dueño: ' . $key->getDniDuenio() . '<br>';
        }
        return $lista;
        //return $this->autoObj->listar();
    }

    public function insertar($datos)
    {
        $resp = null;
        $modeloAuto = new Auto();
        $modeloPersona = new PersonaControl();
        if ($modeloPersona->buscarPorDni($datos['inputDniDuenio'])) {
            $modeloAuto->setear($datos['inputPatente'], $datos['inputMarca'], $datos['inputModelo'], $datos['inputDniDuenio']);
            if ($modeloAuto->insertar()) {
                $resp = true;
            }
        };

        return $resp;
    }


    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto($param)
    {
        $obj = null;

        if (array_key_exists('inputId', $param) and array_key_exists('inputDniDuenio', $param)) {
            $obj = new Auto();
            $obj->setear($param['inputId'], $param['inputMarca'], $param['inputModelo'], $param['inputDniDuenio']);
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto
     */

    private function cargarObjetoConClave($param)
    {
        $obj = null;

        if (isset($param['inputId'])) {
            $obj = new Auto();
            $obj->setear($param['inputId'], $param['inputMarca'], $param['inputModelo'], $param['inputDniDuenio']);
        }
        return $obj;
    }

    /**
     * permite agregar un objeto 
     * @param array $param
     * @return boolean
     */
    public function alta($param)
    {
        $resp = false;
        //$param['inputDni'] = null;
        $elObjAuto = $this->cargarObjeto($param);

        if ($elObjAuto != null and $elObjAuto->insertar()) {
            $resp = true;
        }
        return $resp;
    }

    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */

    private function seteadosCamposClaves($param)
    {
        $resp = false;
        if (isset($param['inputId'])) {
            $resp = true;
        }
        return $resp;
    }

    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $elObjAuto = $this->cargarObjetoConClave($param);
            if ($elObjAuto != null and $elObjAuto->eliminar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */

    public function modificacion($datos)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($datos)) {
            $elObjAuto = $this->cargarObjeto($datos);
            if ($elObjAuto != null and $elObjAuto->modificar()) {
                $resp = true;
            }
        }
        return $resp;
    }

    /**
     * Creamos un obj persona para obtener los datos del duenio del auto
     */

    public function obtenerPorPatente($patente)
    {
        $sql = 'patente = "' . $patente . '";';
        $lista = null;
        $objAuto = new Auto();
        if ($objAuto->listar($sql)) {
            $lista = $objAuto->listar($sql);
        }
        return $lista;
    }

    /** Relacionamos el auto con los datos de su duenio, class Persona()
     * Nos devuelve un array asociativo
     * @return array
     *  */

    public function obtenerInfo()
    {
        $lista = null;
        $objPersona = new Persona();
        $objAuto = new Auto();
        $arrayObjAutos = $objAuto->listar();
        $arrayObjPersonas = $objPersona->listar();
        foreach ($arrayObjPersonas as $clave) {
            foreach ($arrayObjAutos as $key) {
                if ($clave->getNroDni() == $key->getDniDuenio()) {
                    $lista[] = array(
                        'duenio' => $clave,
                        'auto' => $key
                    );
                }
            }
        }
        return $lista;
    }

    public function cambiarDuenio($datos)
    {
        $resp = false;
        $ctrlPersona = new PersonaControl();
        $persona = $ctrlPersona->buscarPorDni($datos['inputDni']);
        $auto = $this->obtenerPorPatente($datos['inputPatente']);
        if (count($persona) > 0 and count($auto) > 0) {
            $auto[0]->setDniDuenio($datos['inputDni']);
            if ($auto[0]->modificar()) {
                $resp = true;
            };
        }
        return $resp;
    }
}
