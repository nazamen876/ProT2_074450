<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\usuarios_model;

class login_controller extends BaseController {

	public function index() {
		helper(['form', 'url']);

		$dato['titulo'] = 'Login';
		echo view('front/header', $dato);
		echo view('front/navbar');
		echo view('back/login');
		echo view('front/footer');
	}

	public function auth() {
		$session = session();
		$model = new usuarios_model();

		//traemos los datos del formulario
		$email = $this->request->getVar('email');
		$password = $this->request->getVar('pass');

		$data = $model->where('email', $email)->first();
		if($data) {
			$pass = $data['pass'];
			$ba = $data['baja'];
			if($ba == 'SI') {
				$session->setFlashData('msg', 'Usuario dado de baja');
				return redirect()->to('/login');
			}

			// se verifican los datos ingresados para iniciar, si cumple la verificación inicia la sesión
			$verify_pass = password_verify($password, $pass);
			// password_verify determina los requisitos de configuración de la contraseña
			if($verify_pass) {
				$ses_data = [
					'id_usuario' => $data['id_usuario'],
					'nombre' => $data['nombre'],
					'apellido' => $data['apellido'],
					'email' => $data['email'],
					'usuario' => $data['usuario'],
					'perfil_id' => $data['perfil_id'],
					'logged_in' => TRUE
				];
				// si se cumple la verificación se inicia la sesión
				$session->set($ses_data);

				return redirect()->to('/');

			} else {
				// no pasó la validación de la contraseña
				$session->setFlashData('msg', 'Contraseña Incorrecta');
				return redirect()->to('/login');
			}
		} else {
			$session->setFlashData('msg', 'No existe el mail o es incorrecto');
			return redirect()->to('/login');
		}
	}

	public function logout() {
		$session = session();
		$session->destroy();
		return redirect()->to('/');
	}
}

?>