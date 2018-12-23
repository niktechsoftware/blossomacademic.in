<?php
/* without table print 
foreach($val->result() as $row){
	echo $row->id."<br/>";
	echo $row->name."<br/>";
	echo $row->add."<br/>";
	echo $row->mobile."<br/>";
	echo "<br/>";
	echo "<br/>";

}*/
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="6" bgcolor="#FFFFFF"><center><strong>Student Records</strong></center> </td>
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>Id</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Name</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Address</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Mobile</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Update</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Delete</strong></td>
</tr>

<?php
foreach($val->result() as $row){
	?>
<form name="form1" method="post" action="<?php echo base_url();?>index.php/test/stuupdate">

<tr>

<td align="center" bgcolor="#FFFFFF">
	<input name="id" type="hidden" value="<?php echo $row->id; ?>">
	<input name="checkbox[]" type="checkbox" value="<?php echo $row->id; ?>">
</td>
<td bgcolor="#FFFFFF">
	<?php 
		if($id == $row->id){
			echo "<input type='hidden' value='".$row->id."' name='stid' />";
			echo $row->id;
		}
		else{
			echo $row->id;
		}
	?>
</td>
<td bgcolor="#FFFFFF">
	<?php 
		if($id == $row->id){
			echo "<input type='text' value='".$row->name."' name='name' />";
		}
		else{
			echo $row->name;
		}
	 ?>
</td>
<td bgcolor="#FFFFFF">
<?php 
		if($id == $row->id){
			echo "<input type='text' value='".$row->add."' name='add' />";
		}
		else{
			echo $row->add;
		}
	?>
</td>
<td bgcolor="#FFFFFF">
<?php 
		if($id == $row->id){
			echo "<input type='text' value='".$row->mobile."' name='mobile' />";
		}
		else{
			echo $row->mobile;
		}
	?>
</td>
<td bgcolor="#FFFFFF">
	<?php 
		if($id == $row->id){
			echo '<input name="save" type="submit" id="update" value="Save">';
		}
		else{
			echo '<input name="update" type="submit" id="update" value="Update">';
		}
	?>
	
</td>
<td bgcolor="#FFFFFF">
	<input name="delete" type="submit" id="delete" value="Delete">
</td>
</tr>
</form>
<?php
}
?>
</table></br>
<!-- <center><input name="delete" type="submit" id="delete" value="Delete"> </center> -->

<?php 
	$val = $this->uri->segment(3);
	if($val == "true"){
		echo "<font color='green'>".$this->uri->segment(4) ."Row Deleted successfully.....</font>";
	}
	
?>

