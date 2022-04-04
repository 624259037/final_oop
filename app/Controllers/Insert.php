<?php namespace App\Controllers;
use App\Models\NameModel;
use CodeIgniter\Controller;
use App\Models\UserModel;

class Insert extends Controller {
    //show name
    public function index() {
        helper(['form']);
        $data = [];
        echo view('insert',$data);
    }
    public function save(){
        $model = new UserModel();
    $data = [
        'name' => $this->request->getVar('name'),
        'surname' => $this->request->getVar('surname'),
        'email' => $this->request->getVar('email'),
        'time' => $this->request->getVar('time'),
        'time_in' => $this->request->getVar('time_in'),
        'timeout' => $this->request->getVar('timeout'),
    ];
    $model->insert($data);
    return redirect()->to('/');
    }
    public function show_user(){
        helper(['form']);
        $UserModel = new UserModel();
        $data ['user'] =  $UserModel->orderby('S_id','Asc')->findAll() ;
        echo view('show_user',$data);
    }
} 
