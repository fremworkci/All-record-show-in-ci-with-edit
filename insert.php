<?php echo form_open("Insert/add"); ?>
<table align="center">
	<tr>
		<th>Name</th><th><input type="text" name="name"></th>
	</tr>
	<tr>
		<th>Email</th><th><input type="text" name="email"></th>
	</tr>
	<tr>
		<th>Password</th><th><input type="text" name="password"></th>
	</tr>
	<tr>
		<th><input type="submit" value="Insert"></th>
	</tr>
</table>
<?php echo form_close();  ?>
<table border="1" align="center">
	<tr>
		<th>Name</th><th>Email</th><th>Password</th><th>Edit</th><th>Delete</th>
	</tr>
	<?php
	foreach($data as $row)
	{
	?>
	<tr>
		<th><?php echo $row->name; ?></th>
		<th><?php echo $row->email; ?></th>
		<th><?php echo $row->password; ?></th>
		<th><?php echo anchor("Insert/edit/".$row->id,'Edit'); ?></th>
		<th><?php echo anchor("Insert/delete/".$row->id,'Delete'); ?></th>
	</tr>
	<?php
	}
	?>
</table>
