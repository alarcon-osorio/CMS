<?php /* Template Name: Cabeza */ ?>
		
<?php
    //Variable glbobal
    global $wpdb; 
    //Clase de conexión definida en WORDPRESS
	$wpdb = new wpdb( DB_USER, DB_PASSWORD, DB_NAME, DB_HOST ); 
	$wpdb ->show_errors(); 	
	  // Consulta a la base de datos y muetsra la informacion de los datos
	$table="anuncios";
	$query = "SELECT * FROM $table;";
	$content = $wpdb->get_results( $query );
	if ( count($content) > 0 ) {
		echo '<table border="1">';
		echo '<tr>';
			echo '<th>id</th>';
			echo '<th>Fallecido</th>';
			echo '<th>Sede</th>';
  		echo '</tr>';
    foreach ( $content as $row ) {	
		echo '<tr>';
			echo "<td>{$row->id}</td>";
			echo "<td>{$row->fallecido}</td>";
			echo "<td>{$row->sede}</td>";
		echo '</tr>';
    }
	echo '</table>';
}
	
?>
