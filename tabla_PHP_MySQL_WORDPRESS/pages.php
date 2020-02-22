<?php /* Template Name: Cabeza */ ?>
		
<?php
    global $wpdb; 
	$wpdb = new wpdb( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST ); 
	$wpdb ->show_errors(); 	
	
	$table="tableDB";
	$query = "SELECT * FROM $table;";
	$content = $wpdb->get_results( $query );
	if ( count($content) > 0 ) {
		echo '<table border="1">';
		echo '<tr>';
			echo '<th>titulo1</th>';
			echo '<th>titulo2</th>';
			echo '<th>titulo3</th>';
  		echo '</tr>';
    foreach ( $content as $row ) {	
		echo '<tr>';
			echo "<td>{$row->campo1}</td>";
			echo "<td>{$row->campo2}</td>";
			echo "<td>{$row->campo3}</td>";
		echo '</tr>';
    }
	echo '</table>';
}
	
?>
