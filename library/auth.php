<?php 
	require_once('core.php');

	class Auth  extends Core
	{
		protected $listUser;

		public function __construct(){
			
			$listUser['admin_pass_a'] = 'admin';
			$listUser['admin_pass_a'] = 'admin';

			$listUser['user_a'] = 'ndeztea';
			$listUser['pass_a'] = 'password';

			$listUser['user_b'] = 'nani';
			$listUser['pass_b'] = 'password';
		}

		public function login($user){
			try {
				$this->prepareSession();
				$this->url(TEST_URL);
				$this->byId('username')->value($this->listUser['user_'.$user]);
				$this->byId('password')->value($this->listUser['pass_'.$user]);
				$this->byId('submit')->click();  
			}

			catch (InvalidArgumentException $expected) {
				$this->fail('Login invalid');
	            return;
	        }

		}

		public function logout(){
			$this->byId('submit')->getText('title="logout"');  
		}
	
	}
?>