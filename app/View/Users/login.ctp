<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>Login</h3>
          </div>
        </div>
        <div class="login-form">
          <?php echo $this->Form->create("User"); ?>
          <?php echo $this->Form->input("username");?>
          <?php echo $this->Form->input("password");?>
          <?php echo $this->Form->end("Login");?>
        </div>
      </div>
    </div>
</body>
</body>