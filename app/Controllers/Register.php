<?php
namespace  App\Controllers;
use App\Models\Modelmember;
use App\Models\Modelregis;
// use App\Models\Modelregis;
use CodeIgniter\Controller;

class Register extends Controller
{
    public function index()
    {
        return view('detail');
    }

    public function card1()
    {
        helper('form');
        return view('card1');
    }

    public function card2()
    {
        helper('form');
        return view('card2');
    }

    public function card3()
    {
        helper('form');
        return view('card3');
    }

    public function insertdb()
    {
        helper('form');
        $rules = [
            'id_card' => 'required',
            'name' => 'required',
            'age' => 'required',
            'password' => 'required',
            'email' => 'required',
        ];
        if ($this->validate($rules)) {
            $modelMember = new Modelmember();
            $modelRegis = new Modelregis();
            $data = [
                'id_card' => $this->request->getVar('id_card'),
                'name' => $this->request->getVar('name'),
                'age' => $this->request->getVar('age'),
                'email' => $this->request->getVar('email'),
                'password'=> password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                
            ];

            $data2 = [

                'member' => $this->request->getVar('id_card'),
                'ID' => $this->request->getVar('ID'),
                'category_run' => $this->request->getVar('category_run'),


            ];
            
            
            $modelMember->insert($data);
            $modelRegis->insert($data2);
            return redirect()->to('/');
            
        }
    }
}
