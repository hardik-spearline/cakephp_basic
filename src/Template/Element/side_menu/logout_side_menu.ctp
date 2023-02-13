<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Login'), ['controller'=>'users','action' => 'login']) ?></li>
        <li><?= $this->Html->link(__('SignUp'), ['controller'=>'users','action' => 'signup']) ?></li>
        <li><?= $this->Html->link(__('Forgot Password'), ['controller'=>'users','action' => 'forgot-password']) ?></li>
        <li><?= $this->Html->link(__('About Us'), ['controller'=>'users','action' => 'about-us']) ?></li>
        <li><?= $this->Html->link(__('Contact Us'), ['controller'=>'users','action' => 'contact-us']) ?></li>
    </ul>
</nav>