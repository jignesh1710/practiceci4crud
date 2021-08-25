<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function hello()
	{
		return view('welcome_message');
	}
	public function fetch()
	{
		$db=\Config\Database::connect();
		$data["ftc"]=$db->query("select * from tbl_insert order by id asc")->getResultArray();
		// print_r("<pre>");
		// print_r($data);
		return view("fetch",$data);
	}   
	public function insert()
	{
		echo view("insert");
	} 
	public function insertcode()
	{
		helper(['form', 'url']);
		$validation =  \Config\Services::validation();
		$rules=
			[
				'fname'=>'required',
				'lname'=>'required',
				'email'=>'required',
				'pno'=>'required|max_length[10]|min_length[10]'
			];
			if(!$this->validate($rules))
			{
				return view("insert",["validation",$this->validator]);
			}
			else{
				$fname=$this->request->getvar("fname");
				$lname=$this->request->getvar("lname");
				$email=$this->request->getvar("email");
				$pno=$this->request->getvar("pno");
				$data=array(
					'fname'=>$fname,
					'lname'=>$lname,
					'email'=>$email,
					'pno'=>$pno,
				);
				$db=\Config\Database::connect();
				$builder=$db->table("tbl_insert");
				$builder->insert($data);
				return redirect()->to("home/fetch");

			}
		
	} 
	public function delete($id)
	{
		$db=\Config\Database::connect();
		
		$builder=$db->table("tbl_insert");
		$builder->where("id",$id);
		$builder->delete();
		return redirect()->to("fetch");
	}
	public function login()
	{
		echo view("login");
	}
	public function logincode()
	{
		$db=\Config\Database::connect();
		$fname=$this->request->getvar("fname");
		$email=$this->request->getvar("email");
		$builder=$db->query("select * from tbl_insert where fname='$fname' and email='$email'")->getRow();
		if($builder)
		{
			$session=session();
			$session->set("fname",$builder->fname);
			return redirect()->to("home/fetch");
		}
		else{
			echo "<script>alert('Login Is Not Successfully');</script>";
		}
	}
	public function image()
	{
		echo view("image");
	}
	public function imagecode()
	{
		$image=$this->request->getFile('image');
		if($image->isValid())
		{
			$image->store();
		}
	}
	public function imagecodemove()
	{
		$image=$this->request->getFile('image');
		if($image->isValid())
		{
			$image->move('./public/uploads');
			$title=$this->request->getvar('title');
			$image_name=$image->getname();
			

			$data=array(
				'title'=>$title,
				'image'=>$image_name,
				
			);
			$db=\Config\Database::connect();
			$builder=$db->table("image");
			$builder->insert($data);
		}
	}
}
