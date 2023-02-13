<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('style.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <?php if($auth){?>
                <li><a target="_blank" href="https://book.cakephp.org/3/">
                    <?php echo $auth['User']['email'];?>
                </a>
            </li>
            <li>
                <?php echo $this->Html->link('Logout',['controller'=>'users', 'action'=>'logout']);?>
            </li>
            <?php } else{ ?>
                <li>
                <?php echo $this->Html->link('Login',['controller'=>'users', 'action'=>'login']);?>
            </li>

            <li>
                <?php echo $this->Html->link('Signup',['controller'=>'users', 'action'=>'signup ']);?>
            </li>

            <li>
                <?php echo $this->Html->link('Forgot Password',['controller'=>'users', 'action'=>'forgotPassword']);?>
            </li>
            
                <?php }?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">

    <?php
    if($auth){
        $currentViewDetails = strtolower($inflector::singularize($this->name)); // user Name 
        //Check if it's user module:
        if(isset($$currentViewDetails->user_id)){
            $currentViewDetailsId = $$currentViewDetails->user_id;
        }
        
        if($currentViewDetails == 'User'){
            $currentViewDetailsId = $$currentViewDetails->id;
        }
        // check if user is authorised:
        $isUserAuthorised =false;
        if(isset($$currentViewDetailsId) AND $$currentViewDetails->id == $auth['User']['id']){
            $isUserAuthorised =true;
        }
        echo $this->element('side_menu/login_side_menu',['viewName'=> $inflector::singularize($this->name),'isUserAuthorised'=>$isUserAuthorised]); 
        }else{
        echo $this->element('side_menu/logout_side_menu'); 
        } 
    ?>
    
    <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>