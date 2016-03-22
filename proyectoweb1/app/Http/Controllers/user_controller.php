<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class user_controller extends Controller
{
    public function save_registro()
    {
    	 $this->validate_registro();
    	if($this=='Luis'){
    		echo 'yes';
    	}else{
    		echo 'no';
    	}	
    }
    public function validate_registro()
    {
    echo $nombre= $_POST['Nombre'];
      return $id ;	
  
    }
}
