<?php
class Info {
    private $_id;
    private $_nombre;
    private $_edad;
    private $_raza;
    private $_photo;
    private $_active;

    public function __construct($id, $nombre, $edad, $raza, $photo, $active) {
        $this->setId($id);
        $this->setNombre($nombre);
        $this->setEdad($edad);
        $this->setRaza($raza);
        $this->setPhoto($photo);
        $this->setActive($active);
    }

    public function getId() {
        return $this->_id;
    }

    public function setId($id) {
        $this->_id = $id;
    }


    public function getNombre() {
        return $this->_nombre;
    }

    public function setNombre($nombre) {
        $this->_nombre = $nombre;
    }
    

    public function getRaza() {
        return $this->_raza;
    }

    public function setRaza($raza) {
        $this->_raza = $raza;
    }

    public function getEdad() {
        return $this->_edad;
    }

    public function setEdad($edad) {
        $this->_edad= $edad;
    }

    public function getPhoto() {
        return $this->_photo;
    }

    public function setPhoto($photo) {
        $this->_photo = base64_encode($photo);
    }

    public function getActive() {
        return $this->_active;
    }

    public function setActive($active) {
        $this->_active= $active;
    }


    public function getArray() {
        $array = array();

        $array["id"] = $this->getId();
        $array["nombre"] = $this->getNombre();
        $array["edad"] = $this->getEdad();
        $array["raza"] = $this->getRaza();
        $array["photo"] = $this->getPhoto();
        $array["active"] = $this->getActive();
        return $array;
    }
}

?>