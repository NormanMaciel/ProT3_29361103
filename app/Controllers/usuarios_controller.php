<?php
namespace App\Controllers;
Use App\Models\usuarios_model;
Use CodeIgniter\Controller;
class usuarios_controller extends Controller {
    public function __construct(){
    helper(['form', 'url']);
    }
    public function create() {
        $dato['titulo']='registro';
        echo view('front/head_view',$dato);
        echo view('front/navbar_view');
        echo view('back/usuario/registro');
        echo view('front/footer_view');
   }

    public function formValidation() {
        $input = $this->validate([
            'nombre' => 'required|min_length[3]',
            'apellido' => 'required|min_length[3]|max_length[25]',
            'usuario' => 'required|min_length[3]',
            'email' => 'required|min_length[5]|max_length[100]|valid_email|is_unique[usuarios.email]',
            'pass' => 'required|min_length[3]|max_length[10]'

        ],
    );
    $formModel = new usuarios_model();
    if (!$input){
        $data['titulo'] = 'Registro';
        echo view('front/head_view',$data);
        echo view('front/navbar_view');
        echo view('back/usuario/registro', ['validation' => $this->validator]);
        echo view('front/footer_view');
        
    }else{
        $formModel->save([
            'nombre' => $this->request->getVar('nombre'),
            'apellido' => $this->request->getVar('apellido'),
            'usuario' => $this->request->getVar('usuario'),
            'email' => $this->request->getVar('email'),
            'pass' => password_hash($this->request->getVar('pass'), PASSWORD_DEFAULT)

        ]);
        session()->setFlashdata('success', 'Usuario registrado con exito');
        return redirect()->to('/login');
    }
        
    }

}
