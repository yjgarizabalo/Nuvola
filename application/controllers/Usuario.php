<?php

class Usuario extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        //conexion modelo
        $this->load->model('Model_Usuario');
    }

    public function index()
    {
        $data['contenido'] = "usuario/index"; // enviar main usuario
        $data['selPerfil'] = $this->Model_Usuario->selPerfil();
        $data['listaUsuario'] = $this->Model_Usuario->listUsuario();
        $this->load->view("main", $data);
    }

    public function insert()
    {
        $datos = $this->input->post();

        if (isset($datos)) {
            $Id = $datos['Idper'];
            $nombres = $datos['nombres'];
            $apellidos = $datos['apellidos'];
            $correo = $datos['correo'];
            $this->Model_Usuario->insertUsuario($Id, $nombres, $apellidos, $correo);
            redirect('/#nsection1');
        }
    }

    public function delete($id = NULL)
    {
        if ($id != NULL) {
            $this->Model_Usuario->deleteUsuario($id);
        }
    }

    public function edit($id = NULL)
    {
        if ($id != NULL) {
            $data['contenido'] = 'usuario/edit';
            $data['selPerfil'] = $this->Model_Usuario->selPerfil();
            $data['datosUsuario'] = $this->Model_Usuario->editUsuario($id);
            $this->load->view('main', $data);
        } else {
            redirect('');
        }
    }

    public function update()
    {
        $datos = $this->input->post();
        if (isset($datos)) {
            $Usuid = $datos['Usuid'];
            $Idper = $datos['Idper'];
            $nombres = $datos['nombres'];
            $apellidos = $datos['apellidos'];
            $correo = $datos['correo'];
            $this->Model_Usuario->updateUsuario($Usuid, $Idper, $nombres, $apellidos, $correo);
            redirect('/#nsection1');
        }
    }
}
