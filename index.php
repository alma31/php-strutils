<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>exercise POO</title>
</head>
<body>
	<?php 

	class StrUtils{
		private $str = "ma chaine de carractere";
		
		function __construct(){
			$this->str;
		}

		public function getStr(){
			return $this->str;
		}
		public function bold(){
			return '<b>'.$this->str.'</b></br>';
			$this->str = $bold;
		}

		public function italic(){
			return '<em>'.$this->str.'</em></br>';
			$this->str = $italic;
		}

		public function underline(){

		}

		public function capitalize(){

		}

		public function uglify(){
			$this->bold();
			$this->italic();		
		}
	}

	$str = new StrUtils();
	$str->uglify();

	echo  $str->uglify();



	?>
	
</body>
</html>