<?php
	class Session
	{
		private $logged_in = false;
		public $u_id;
		
		function __construct()
		{
			session_start();
			$this->check_login();
			
			if( $this->logged_in )
			{
				//echo '<br />Already logged in... <be />';
			}
			else
			{
				//echo '<br />NOT already logged in... <be />';
			}
		}
		
		public function is_logged_in()
		{
			return $this->logged_in;
		}
		
		public function login( $user )
		{
			if( $user )
			{
				$_SESSION['u_id'] = (string)$user->id;
				$this->user_id =  $_SESSION['u_id'];
				$this->logged_in = true;
			}
		}
		
		public function logout()
		{
			unset ( $_SESSION['u_id'] );
			unset ( $this->u_id );
			$this->logged_in = false;
		}
		
		private function check_login()
		{
			if( isset( $_SESSION['u_id'] ) )
			{
				$this->u_id = $_SESSION['u_id'];
				$this->logged_in = true;
			}
			else
			{
				unset( $this->u_id );
				$this->logged_in = false;
			}
		}
		
	}

	$session = new Session();
	
?>