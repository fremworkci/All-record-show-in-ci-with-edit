<?php
foreach($data as $row)
{
?>
<?php  echo form_open("Insert/update"); ?>
<table border="1">
	<tr>
		<input type="hidden" name="getid" value="<?php  echo $row->id; ?>">
		<th>Name</th><th><input type="text" name="name" value="<?php echo $row->name; ?>"></th>
	</tr>
	<tr>
		<th>Password</th><th><input type="text" name="password" value="<?php echo $row->password; ?>"></th>
	</tr>
	<th><input type="submit" value="Update"></th>
</table>
<?php echo form_close(); ?>
<?php	
}

?>