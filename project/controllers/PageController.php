<?php
	namespace Project\Controllers;
	use \Core\Controller;
	
	class PageController extends Controller
	{
        public function show1()
		{
			echo 'Страница 1';
			echo '<br>';
			echo 'вывелась 1 страница';
		}
		
		public function show2()
		{
			echo 'Страница 2';
			echo '<br>';
			echo 'вывелась 2 страница';
		}        
        public function act($params)
        {
            var_dump($params); 
                //['var1' => 'eee', 'var2' => 'bbb'] 
        }
        
	}