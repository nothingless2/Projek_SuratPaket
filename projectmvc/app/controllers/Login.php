<?php
class Login extends Controller {
    public function index() {

        if (isset($_SESSION['login'])) {
            header('Location: '. BASEURLSL .'');
            exit;
        }
        $this->view('home/index');
    }

    public function authenticate() {
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = $this->model('User');
        $user = $userModel->getUserByUsername($username);

        if ($user && $password === $user['password']) {
            session_start();
            Flasher::setFlash('Berhasil!','Login Berhasil!','success');
            $_SESSION['login']= true;
            $_SESSION['nama_security']= $user['nama_security'];
            $_SESSION['security_id']= $user['security_id'];
            header('Location: '. BASEURLSL .'');
        } else {
            // Login gagal
            $_SESSION['login'] = false;
            
            Flasher::setFlash('Failed!','Username atau Password salah !!','error');
            $this->view('home/index');
        }
    }

    public function logout() {
     session_start();
     session_unset();
     session_destroy();
     header('Location: '. BASEURLBL);
     exit;
    }
}   
    
?>
