<?php

namespace App\Controllers;
use App\Models\MctModel;

class Landing extends BaseController
{
	public function index()
	{
		$meta['metatitle'] = 'Rejuvis MCT Oil';
		$meta['metadesc'] = 'Rejuvis MCT Oil เกิดจากการสะกัดน้ำมันมะพร้าวออแกนิค 100% ที่คัดแยกนำเฉพาะ Capryilic acid C8 และ Capric acid C10 เท่านั้น และไม่มีส่วนผสมของน้ำมันปาล์ม เพื่อให้ได้คุณสมบัติที่ดีที่สุดกลายมาเป็น MCT Oil เพื่อให้ในทุกช่วงเวลาของคุณนำไขมันมาใช้เป็นพลังงานได้ดีขึ้นและมีประสิทธิภาพมากที่สุด ที่สำคัญไม่มีสารตกค้าง หรือสารโลหะหนักแต่อย่างใด จึงมั่นใจได้ว่าทุกหยดที่คุณดื่มปลอดภัยและสามารถบริโภคได้ทุกคน';
		echo view('landing/header',$meta);
		echo view('layouts/navbar');
      	echo view('landing/landing');
      	echo view('landing/footer');
	}

	public function register()
	{
		$request = \Config\Services::request();
		$mctModel = new MctModel;
		$post = $request->getPost();
		if($post){
			$data = [
				'name' 		=> $post['txt_name'],
				'address'	=> $post['txt_address'],
				'phone'    	=> $post['txt_phone'],
				'email'    	=> $post['txt_email']

			];
			$mctModel->insert($data);
			if($mctModel->errors()){
				echo false;
			}else{
				echo true;
			}
		}
	}
}
