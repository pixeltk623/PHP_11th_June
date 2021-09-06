<head>
<!-- <?php if ($this->session->flashdata('success')) { 
				 
	echo "<script>alert('You Have Successfully updated this Record!');</script>";
		 } ?>
  -->
  <style>
  .dd{
	  background-color: #80ffaa;
	  color:white;
	  font-size:38px;
	  height:150px;
	  width:80%;
	  letter-spacing:1.5px;
	  margin-top:8%;
	  padding-top:4%;	
	  border-radius:5px;
	  box-shadow: 0px 1px 129px -13px rgba(30,102,6,1);
  }
  h2 {
	 animation: mymove 4s infinite;

   }
   
  </style>
</head>
            <div class="banner">
            <img src="<?php base_url() ?>assets/user/images/banner1.jpg" alt="" class="img-responsive">
			</div>
			<h2 style="position:absolute;margin-top:-32%;color:gray;padding:5px">Home / Contact Us</h2>
            <h1 id="msg" class="text-center" style="position: absolute;top:15%;width:100%; left:10%">
			<?php if ($this->session->flashdata('success')) { ?>
				 
        <div class="dd"> <?= $this->session->flashdata('success') ?> </div>
    <?php } ?>
</h1>
<div class="container">
            <div class="row">
            <div class="col-md-7" style="box-shadow: -1px 0px 7px 3px rgba(209,209,209,1);border-radius:5px;">
				<div class="nav-header">
 
<!-- register model -->
						    			 <div role="tabpanel" class="tab-pane" id="register">
									 	<div class="row">
                                         <h1 class="text-center">Contact With Us !</h1>
                                         <form action="<?php echo base_url();?>Contact" method="post">
										 <div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Your Name </label>
													<input type="text" name="cname" class="form-control" id="from-place" value="<?php echo set_value('cname'); ?>" placeholder="Your Name"/>
													<?php echo form_error('cname', '<p style="color:red;font-weight:600;font-size:15px;letter-spacing:1px; ">', '</p>'); ?>        
												</div>
											</div>
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Your Email </label>
													<input type="email" name="cem" class="form-control" id="from-place" value="<?php echo set_value('cem'); ?>" placeholder="Email Address"/>
													<?php echo form_error('cem', '<p style="color:red;font-weight:600;font-size:15px;  letter-spacing:1px;">', '</p>'); ?>     
												</div>
											</div>
                                            <div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Subject </label>
													<input type="text" name="sub" class="form-control" id="from-place" value="<?php echo set_value('sub'); ?>" placeholder="Subject"/>
													<?php echo form_error('sub', '<p style="color:red;font-weight:600;font-size:15px;  letter-spacing:1px;">', '</p>'); ?>     
												</div>
											</div>
												 
											<div class="col-xxs-12 col-xs-12 mt">
												<div class="input-field">
													<label for="from">Message</label>
													<textarea name="mess" class="form-control" id="from-place" value="<?php echo set_value('mess'); ?>" placeholder="Type Some Text Hear"></textarea>
													<?php echo form_error('mess', '<p style="color:red;font-weight:600;font-size:15px;    letter-spacing:1px;">', '</p>'); ?>     
												</div>
											</div>
											 
											 
											<div class="col-xs-12">
												<input type="submit" class="btn btn-primary btn-block" name="contact" value="Send ">
											</div>
                                            <br><br>
                                           
										</div>
									 </div>
									</form>
									 
										</div>
									 </div>
                                     <div class="col-md-4">
                                     <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d29538.55602539932!2d70.7957469!3d22.2658838!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1560879615212!5m2!1sen!2sin" width="450" height="490" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
									</div>
                                    
								</div>
                                <br><br><br> <br><br><br>
                         

 