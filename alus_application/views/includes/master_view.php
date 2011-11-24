<?php $this->load->view('includes/header'); ?>
<!-- north region -->
<div region="north" border="false" style="height:60px;background:#C9EDCC;">
	<!-- start-menu -->
	<div style="padding-left:20px;float:left;">
			<h2 style="color:#119A1D;">Applikasi Penelitian</h2>
	</div>
	<div style="padding:5px;float:right;">
			<a href="javascript:void(0)" id="sb1" class="easyui-splitbutton" menu="#mm1" iconCls="icon-edit" onclick="javascript:alert('edit')">Menu</a>
			<a href="javascript:void(0)" id="sb2" class="easyui-splitbutton" menu="#mm2" iconCls="icon-ok" onclick="javascript:alert('ok')">Ok</a>
			<a href="javascript:void(0)" id="mb3" class="easyui-menubutton" menu="#mm3" iconCls="icon-help">Help</a>
		</div>
		<div id="mm1" style="width:150px;">
			<div iconCls="icon-undo">Undo</div>
			<div iconCls="icon-redo">Redo</div>
			<div class="menu-sep"></div>
			<div>Cut</div>
			<div>Copy</div>
			<div>Paste</div>
			<div class="menu-sep"></div>
			<div>
				<span>Toolbar</span>
				<div style="width:150px;">
					<div>Address</div>
					<div>Link</div>
					<div>Navigation Toolbar</div>
					<div>Bookmark Toolbar</div>
					<div class="menu-sep"></div>
					<div>New Toolbar...</div>
				</div>
			</div>
			<div iconCls="icon-remove">Delete</div>
			<div>Select All</div>
		</div>
		<div id="mm2" style="width:100px;">
			<div iconCls="icon-ok">Ok</div>
			<div iconCls="icon-cancel">Cancel</div>
		</div>
		<div id="mm3" style="width:150px;">
			<div>Help3</div>
			<div class="menu-sep"></div>
			<div>About3</div>
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
<div region="south" border="false" style="height:25px;background:#C9EDCC;padding:10px;">
	<div>Page rendered in {elapsed_time} seconds</div>
</div>
<div region="center" title="Main Title">
	<?php $this->load->view($main_content); ?>
</div>
<?php $this->load->view('includes/footer'); ?>