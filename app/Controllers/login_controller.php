<?php
namespace App\Controllers;
Use App\Models\usuarios_model;
Use CodeIgniter\Controller;

class login_controller extends BaseController{
    
    public function index()
    {
        helper(['form','url']);

        $dato['titulo'] = 'login';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/login');
        echo view('front/footer_view');
    }

    public function auth(){
        $session = session();
        $model = new usuarios_model();

        //Traemos los datos del formulario
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('pass');

        $data = $model->where('email',$email)->first();
        if($data){
            $pass = $data['pass'];
            $baja = $data['baja'];

            if($baja == 'SI'){
                $session->setFlashdata('msg', 'Usuario Dado de Baja');
                return redirect()->to('/login');
            }
            //Se verifican los datos ingresados para iniciar sesion
            $verify_pass = password_verify($password, $pass);
            //Password_verify determina los requisitos de configuracion de la contraseña
            if($verify_pass){
                $ses_data = [
                    'id_usuario' => $data['id_usuario'],
                    'nombre' => $data['nombre'],
                    'apellido' => $data['apellido'],
                    'usuario' => $data['usuario'],
                    'email' => $data['email'],
                    'perfil_id' => $data['perfil_id'],
                    'logged_in' => TRUE
                ];
                //Si se cumple la verificacion inicia sesion
                $session->set($ses_data);
                session()->setFlashdata('msg', 'Bienvenido!');
                return redirect()->to('/panel');
                //Cambiar el return de panel a pagina principal
            }else{
                //No pasa la verificacion
                $session->setFlashdata('msg','Contraseña Incorrecta');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg','No existe el usuario - Usuario incorrecto');
            return redirect()->to('/login');
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}