<body>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>Create Survey</h3>
          </div>
        </div>
        <div class="login-form">
          <?php
          	echo $this->Form->create("Survey");
          	echo $this->Form->input("user_id");
          	echo $this->Form->input("published");
            echo $this->Form->input("title");
            echo $this->Form->input("reward");
          	echo $this->Form->end("Submit");
          ?>
        </div>
      </div>
    </div>
</body>
</body>