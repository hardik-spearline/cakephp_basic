<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>


<div class="users form large-9 medium-8 columns content">
    <!-- Create a new form form bootswatch -->
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend>Signup</legend>

        <div class="form-group">
            <!-- <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter email"> -->
            <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Enter email']) ?>
        </div>

        <div class="form-group">
            <!-- <label for="exampleInputPhone" class="form-label mt-4">Phone no</label>
                <input type="tel" class="form-control" name="phone" id="exampleInputPhone" aria-describedby="phoneHelp"
                placeholder="Enter Phone no."> -->
            <?= $this->Form->control('phone', ['class' => 'form-control', 'placeholder' => 'Enter phone number']) ?>
        </div>

        <div class="form-group">
            <!-- <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                <input type="password" name="password" name="password" class="form-control" id="exampleInputPassword1"
                placeholder="Password"> -->
            <?= $this->Form->control('password', ['type' => 'password', 'class' => 'form-control', 'placeholder' => 'Enter password']) ?>
        </div>

        <?= $this->Form->button(__('Sign Up'), ['class'=>'btn btn-primary']) ?>
    </fieldset>
    <?= $this->Form->end() ?>

</div>