<?php $this->load->view('includes/header'); ?>
<!-- north region -->
<div region="north" border="false" style="height:60px;background:#C9EDCC;">
	<!-- start-menu -->
	<div style="padding:5px;float:left;">
			<h4 style="color:#0099FF;">Applikasi Penelitian</h4>
	</div>
		<!-- end menu -->
</div>
<!-- west content -->
<!-- <div region="west" split="true" title="Main Menu" style="width:150px;padding:10px;">
 -->
</div>
<!-- east region -->
<!-- <div region="east" split="true" title="Right Sidebar" style="width:100px;padding:10px;">right menu</div> -->
<!-- south region -->
<div region="south" border="false" style="height:25px;background:#A9FACD;padding:10px;">
	<div>Page rendered in {elapsed_time} seconds</div>
</div>
<div region="center" title="Main Title">
	<?php $this->load->view($main_content); ?>
</div>
<?php $this->load->view('includes/footer'); ?>