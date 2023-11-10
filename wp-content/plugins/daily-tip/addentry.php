<?php

global $wpdb;

// Add record
if(isset($_POST['but_submit'])){

  $tip = $_POST['txt_name'];
  $tablename = $wpdb->prefix."dailytip";

  if($tip != ''){
     $check_data = $wpdb->get_results("SELECT * FROM ".$tablename." WHERE tip='".$tip."' ");
     if(count($check_data) == 0){
       $insert_sql = "INSERT INTO ".$tablename."(tip) values('".$tip."') ";
       $wpdb->query($insert_sql);
       echo "Tip Saved sucessfully.";
     }
   }
}

?>
<h1>Add New Entry</h1>
<form method='post' action=''>
  <table>
    <tr>
      <td>Tip</td>
      <td><input type='text' name='txt_name'></td>
    </tr>
    <tr>
     <td>&nbsp;</td>
     <td><input type='submit' name='but_submit' value='Submit'></td>
    </tr>
 </table>
</form>