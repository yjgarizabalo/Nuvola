<?php

class Model_usuario extends CI_Model
{

    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // funcuion select - sql
    public function selPerfil()
    {
        $query =  $this->db->query("select * from perfil");
        return $query->result();
    }

    // insertar usuario
    public function insertUsuario($Idper, $nombres, $apellidos, $correo)
    {
        $arrayDatos = array(
            'per_id' => $Idper,
            'usu_nombres' => $nombres,
            'usu_apellidos' => $apellidos,
            'usu_correo' => $correo,
        );
        $this->db->insert('usuario', $arrayDatos);
    }

    // mostrar lista de usurio
    public function listUsuario()
    {
        $query = $this->db->query("select * from  usuario u inner join perfil p on u.per_id=p.per_id");
        return $query->result();
    }

    // eliminar usuario
    public function deleteUsuario($id)
    {
        $this->db->where('usu_id', $id);
        $this->db->delete('usuario');
        redirect('');
    }

    //editar usuario
    public function editUsuario($id)
    {
        $consulta = $this->db->query("select * from usuario u inner join perfil p on u.per_id = p.per_id where u.usu_id = $id");
        return $consulta->result();
    }

    public function updateUsuario($Usuid, $Id, $nombres, $apellidos, $correo)
    {
        $array = array(
            'per_id' => $Id,
            'usu_nombres' => $nombres,
            'usu_apellidos' => $apellidos,
            'usu_correo' => $correo
        );
        $this->db->where('usu_id', $Usuid);
        $this->db->update('usuario', $array);
    }
}
