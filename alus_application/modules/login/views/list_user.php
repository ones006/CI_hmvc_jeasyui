<section class="grid_12">
	<div class="block-border"><form class="block-content form" id="table_form" method="post" action="">
		<h1>List of User <a href="<?php echo base_url(); ?>login/add"><img src="<?php echo base_url(); ?>metrasat-themes/images/icons/fugue/plus-circle-blue.png" width="16" height="16"> add  New User</a></h1>
			<div class="block-controls">
				<ul class="controls-buttons">
					<li><a href="#" title="Previous"><img src="<?php echo base_url(); ?>metrasat-themes/images/icons/fugue/navigation-180.png" width="16" height="16"> Prev</a></li>
					<li><a href="#" title="Page 1"><b>1</b></a></li>
					<li><a href="#" title="Page 2" class="current"><b>2</b></a></li>
					<li><a href="#" title="Page 3"><b>3</b></a></li>
					<li><a href="#" title="Page 4"><b>4</b></a></li>
					<li><a href="#" title="Page 5"><b>5</b></a></li>
					<li><a href="#" title="Next">Next <img src="<?php echo base_url(); ?>metrasat-themes/images/icons/fugue/navigation.png" width="16" height="16"></a></li>
					<li class="sep"></li>
					<li><a href="#"><img src="<?php echo base_url(); ?>metrasat-themes/images/icons/fugue/arrow-circle.png" width="16" height="16"></a></li>
			</ul>
			</div>
			<div class="no-margin"><table class="table" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th class="black-cell"><span class="loading"></span></th>
						<th scope="col">
							<span class="column-sort">
								<a href="#" title="Sort up" class="sort-up active"></a>
								<a href="#" title="Sort down" class="sort-down"></a>
							</span>
								User
							</th>
							<th scope="col" class="table-actions">Actions</th>
						</tr>
					</thead>

					<tbody>
						<?php if(isset($records)) : foreach($records as $row) : ?>
						<tr>
 							<th scope="row" class="table-check-cell"><input type="checkbox" name="selected[]" id="table-selected-1" value="1"></th>
							<td><?php echo $row->username; ?></td>
							<td class="table-actions">
							<a href="../login/view/<?php echo $row->id; ?>" title="View  <?php echo $row->username; ?>" class="with-tip"><img src="<?php echo base_url(); ?>metrasat-themes/images/icons/fugue/magnifier.png" width="16" height="16"></a>
								<?php //echo anchor("site/delete/$row->id", $row->username); ?>
								<a href="../login/edit/<?php echo $row->id; ?>" title="Edit  <?php echo $row->username; ?>" class="with-tip"><img src="<?php echo base_url(); ?>metrasat-themes/images/icons/fugue/pencil.png" width="16" height="16"></a>
								<a href="../login/delete/<?php echo $row->id; ?>" title="Delete <?php echo $row->username; ?>" class="with-tip"><img src="<?php echo base_url(); ?>metrasat-themes/images/icons/fugue/cross-circle.png" width="16" height="16"></a>
							</td>
						</tr>
							<?php endforeach; ?>
							<?php else : ?>
							<tr>
								<td>&nbsp;</td>
								<td><h2>No records were returned.</h2></td>
								<td>&nbsp;</td>
							</tr>
							<?php endif; ?>
				</tbody>
				</table></div>

				<ul class="message no-margin">
					<li>Results 1 - 5 out of 23</li>
				</ul>

				<div class="block-footer">
					<div class="float-right">
						<label for="table-display" style="display:inline">Display mode</label>
						<select name="table-display" id="table-display" class="small">
							<option value="table">Table</option>
							<option value="grid">Grid</option>
						</select>
					</div>

					<img src="<?php echo base_url(); ?>metrasat-themes/images/icons/fugue/arrow-curve-000-left.png" width="16" height="16" class="picto">
					<a href="#" class="button">Select All</a>
					<a href="#" class="button">Unselect All</a>
					<span class="sep"></span>
					<select name="table-action" id="table-action" class="small">
						<option value="">Action for selected...</option>
						<option value="validate">Validate</option>
						<option value="delete">Delete</option>
					</select>
					<button type="submit" class="small">Ok</button>
				</div>

			</form></div>
		</section>

