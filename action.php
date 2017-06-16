<?php
	class Respomse{
		public static function json($code, $message= "", $data= array()){
			if(!is_numeric($code)){
				return "";
			}
			$result= array(
					'code'=>$code,
					'message'=>$message,
					'data'=>$data
				)
			echo json_encode($result);
			exit();
		}
	}
	class Db{
		static private $_instance;
		private $_dbConfig= array(
				'host'=>'127.0.0.1',
				'user'=>'root@localhost',
				'password'=>'',
				'database'=>'video'
			);
		static private $_connectSource;
		private function __construct(){

		}
		static public function getInstance(){
			if(!self::$_instance instanceof self)
				self::$_instance= new self();
			return self::$_instance;
		}
		public function connect(){
			if(!self::$_connectSource){
				self::$_connectSource=mysql_connect($this->dbConfig['post'], $this->dbConfig['user'], $this->dbConfig['pawword']);
				if(!self::$_connectSource){
					die("mysql connect error ":mysql_error());
				}
				mysql_select_db($this->dbConfig['database'], self::$_connectSource);
				mysql_query("set names UTF8", self::$_connectSource);
			}
			return self::$_connectSource;
		}
	}
	// get the HTTP method, path and body of the request
	$method = $_SERVER['REQUEST_METHOD'];
	$input = json_decode(file_get_contents('php://input'),true);
	$message= ''
	header("HTTP/1.1 200 OK");
	if($method== "POST"){
		$token= $input["token"];
		$selection= $input["actions"]["name"];
		$userName= $input["user"]["name"];
		$token= $input["token"];
		$callback= $input["callback_id"]
		if($token!= "OdnxCyV2kBk0dH2PemlD0a46"){
			$message= array(
  				"response_type"=>"ephemeral",
  				"replace_original"=> false,
  				"text"=> "Wrong token."
				)
		}else{
			$message= array("attachments"=>array(
						"callback_id"=>$callback,
						"color": "3AA3E3"
					)
				)
		}
		echo json_encode($message);
	}	
?>