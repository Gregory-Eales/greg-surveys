<br>
<h1> Register</h1>

<?php
    
    echo $this->Form->create('User');
    echo $this->Form->input('First Name');
    echo $this->Form->input('Last Name');
    echo $this->Form->input('Email');
    echo $this->Form->input('Username');
    echo $this->Form->input('Password');
    echo $this->Form->end('Register');

?>



<br>