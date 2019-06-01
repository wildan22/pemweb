<?php
function check_session(){
	if(isset($_SESSION['logedin'])){
		if($_SESSION['logedin'] == 'admin'){
			return 'admin';
		}
		else if($_SESSION['logedin'] == 'user'){
			return 'user';
		}
	}
	else{
		return false;
	}
}
?>