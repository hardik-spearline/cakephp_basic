<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<!-- <div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
        <br>
        <?php
            echo "<br>";
            echo $this->Form->control('email');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=> 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div> -->

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    	<div class="col-md-8 col-md-offset-0" style = "margin-top:10px;">
    		<div class="panel panel-primary">
			  	<div class="panel-heading">
			    	<h1 class="panel-title">Login </h1>
			 	</div>
			  	<div class="panel-body">
			    	<!-- <form accept-charset="UTF-8" role="form"> -->
                    <?= $this->Form->create() ?>
                    <fieldset>
			    	  	<div class="form-group">
                            <?php echo $this->Form->control('email'); ?>
			    		</div>
			    		<div class="form-group">
                            <?php echo $this->Form->control('password'); ?>
			    		</div>
			    		<!-- <div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div> -->
			    		<!-- <input class="btn btn-lg btn-success btn-block" type="submit" value="Login"> -->

                        <?= $this->Form->button(__('Submit'), ['class'=> 'btn btn-primary btn-block']) ?>
                        
			    	</fieldset>
                    <?= $this->Form->end() ?>
                      <hr/>
                    <center><h4>OR</h4></center>
                    <input class="btn btn-lg btn-facebook btn-block" type="submit" value="Login via facebook">
			    </div>
			</div>
		</div>
