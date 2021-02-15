<h1> Logins </h1>


<?php
	
	echo $this->Form->create("Login");
	echo $this->Form->input("email");
	echo $this->Form->input("password");
	echo $this->Form->end("login")


?>