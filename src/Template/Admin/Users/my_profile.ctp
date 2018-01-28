<!-- mid section starts -->
    <section class="mgtop72">
        <div class="mid-section">
            <!-- call element for profile_edit -->
            <?php echo $this->element('profile_edit',['action_url'=>'/admin/Users/myProfile']);?>
            <!--@add element for change password -->
             <?php echo $this->element('change_password',['action_url'=>'/admin/Users/change_password','form_name'=>$user])?>
        </div>
        <div class="cls"></div>
    </section>
	<script>
		$('.stopccp').stopCCP({"clas":"stopccp","pb":"enableP"});
		$('.stopccppro').stopCCPPRO({"clas":"stopccppro","pb":"enablePP"});
	</script>