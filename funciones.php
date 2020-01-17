<?php
// Funciones utilizadas en el programa

function obtenerCategorias($db) {
	$categorias = array();
	
	$sql = "SELECT id_categoria,nombre FROM categoria";
	
	$resultado = mysqli_query($db, $sql);
	if ($resultado) {
		while ($row = mysqli_fetch_assoc($resultado)) {
			$categorias[] = $row['nombre'];
		}
	}
	return $categorias;
}


function insertarCategoria($db,$id,$nombre){


	$sql1="insert into categoria(id_categoria,nombre) values ('$id','$nombre')"; 
	
	if (mysqli_query($db, $sql1)) {

    echo "New record created successfully";

	} else {

		echo "Error: " . $sql1 . "<br>" . mysqli_error($db);

	}
	
}


function insertarProducto($db,$id,$nombre,$precio,$categoria){


	$categoria="select $id_categoria from categoria where nombre=$categoria";

	
	
	

	$sql1="insert into producto(id_producto,nombre,precio,id_categoria) values ('$id','$nombre',$precio,'$categoria')"; 
	
	if (mysqli_query($db, $sql1)) {

    echo "New record created successfully";

	} else {

		echo "Error: " . $sql1 . "<br>" . mysqli_error($db);

	}
	
}

?>