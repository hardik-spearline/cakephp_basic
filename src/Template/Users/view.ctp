<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

//  echo $user->id;
?>

<div class="users view large-9 medium-8 columns content">
    
	<div class="row">
		<h2>My User Profile</h2>
        
        
       <div class="col-md-12 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >User Profile</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div align="center"> <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                
                <input id="profile-image-upload" class="hidden" type="file">
                <div style="color:#999;" >click here to change profile image</div>
                <!--Upload Image Js And Css-->
            </div>
<br>
    
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;">Negi Hardik </h4></span>
              <span><p>Aspirant</p></span>            
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              
<div class="col-sm-5 col-xs-6 tital " >Email:</div><div class="col-sm-7 col-xs-6 "><?= h($user->email) ?></div>
     <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Phone:</div><div class="col-sm-7"> <?= h($user->phone) ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Created:</div><div class="col-sm-7">
<?= 
    $this->Time->timeagoinwords($user->created); 
?>
</div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Date Of Modified:</div><div class="col-sm-7"> <?= h($user->modified) ?></div>

  <!-- <div class="clearfix"></div>
<div class="bot-border"></div> -->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
   </div>
<!-- </div> -->

</div>
