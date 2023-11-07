<?php 
class Admindashboard extends Controller{
    public function index()
    {
        $data['judul'] = 'Manage User';
        $data['UserName'] = $this->model('ManageUser_model')->getAllUser();
        // $data['id_user'] = $this->model('ManageUser_model')->getAllUser();
        $this->view('tamplates/header', $data);
        $this->view('Admindashboard/index',$data);
        $this->view('tamplates/footer');
    }
    public function useredit()
    {
        $data['judul'] = 'Manage User';

        $this->view('tamplates/header', $data);
        $this->view('Admindashboard/useredit');
        $this->view('tamplates/footer');
    }
    public function parseURL()
    {
        if( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
    public function deleteuser(){
        $url = $this->parseURL();
        $id_user = $url[2];
        $success = $this->model('ManageUser_model')->deleteUser($id_user);
        if ($success) {
            echo "<script>
            alert('User deleted successfully!');
            window.location.href = '/inventaria/public/Admindashboard/';
            </script>
            ";
        } else {
            // Handle errors
            echo "<script>
            alert('Failed to delete user');
            </script>
            ";
        }
    }

    public function adduser() {
        $data['judul'] = 'Manage User';
        $data['UserName'] = $this->model('ManageUser_model')->getAllUser();
        $this->view('tamplates/header', $data);
        $this->view('Admindashboard/index',$data);
        $this->view('tamplates/footer');
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Handle form submission
            $username = $_POST['username'];
            $password = $_POST['password'];

            require_once __DIR__ . '/../model/ManageUser_model.php';
            $model = new ManageUser_model();
            $success = $model->addUser($username, $password);

            if ($success) {
                // User added successfully, you can redirect or show a success message here
                echo "<script>
                alert('User added successfully!');
                </script>
                ";
            } else {
                // Handle errors
                echo "<script>
                alert('Failed to add user');
                </script>
                ";
            }
        }
    }
    
}