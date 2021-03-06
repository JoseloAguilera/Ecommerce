<?php 
	include_once "conn.php";
	// include_once "./objs/funcoes.php";

	function getAllProductos () {
		$connection = conn();
		$sql = "SELECT tb_producto.*, tb_marca.nombre AS marca FROM tb_producto LEFT JOIN tb_marca ON tb_producto.id_marca = tb_marca.id ORDER BY id ASC";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function countAllProductos () {
		$connection = conn();
		$sql = "SELECT SUM(CASE 
							WHEN tb_producto_stock.stock > 0 THEN 1
							ELSE 0
						END) AS EnStock,  
						SUM(CASE 
							WHEN tb_producto_stock.stock = 0 THEN 1
							ELSE 0
						END) AS OutStock
				FROM tb_producto_stock";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getAllProductoStock () {
		$connection = conn();
		$sql = "SELECT tb_producto_stock.*, tb_producto.nombre AS PROD, tb_producto.unique_hits, tb_producto.total_hits FROM tb_producto_stock 
				LEFT JOIN tb_producto ON tb_producto_stock.id_producto = tb_producto.id";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}
	
	function getProducto ($codigo) {
		$connection = conn();
		$sql = "SELECT tb_producto.* FROM tb_producto WHERE tb_producto.id = '$codigo'";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetch();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getProdbyCategoria ($categoria) {
		$connection = conn();
		if($categoria != 'ALL') {
			$sql = "SELECT tb_producto.*, tb_producto_categoria.id_categoria FROM tb_producto_categoria 
			LEFT JOIN tb_producto ON tb_producto_categoria.id_producto = tb_producto.id
			LEFT JOIN tb_categoria ON tb_producto_categoria.id_categoria = tb_categoria.id
			WHERE tb_producto.activo = 1 AND tb_categoria.activo = 1 AND tb_producto_categoria.id_categoria = $categoria ORDER BY tb_producto.nombre";
		} else {
			$sql = "SELECT tb_producto.*, tb_producto_categoria.id_categoria FROM tb_producto_categoria 
			LEFT JOIN tb_producto ON tb_producto_categoria.id_producto = tb_producto.id
			WHERE tb_producto.activo = 1 ORDER BY tb_producto.nombre";
		}

		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function newProducto ($referencia, $nombre, $descripcion, $valorminorista, $valormayorista, $categorias, $cod_marca, $destacado, $activo) {
		$connection = conn();
		
		try {
			$sql = "INSERT INTO tb_producto (referencia, nombre, descripcion, valor_minorista, valor_mayorista, id_marca, activo, destaque)
		 			VALUES ('$referencia', '$nombre', '$descripcion', $valorminorista, $valormayorista, $cod_marca, $activo, $destacado)";
			$query = $connection->prepare($sql);
			$query->execute();

			if ($query->rowCount() > 0) {
				$result = $connection->lastInsertId();

				$prodCat = saveProdCategoria ($categorias, $result);

				if ($prodCat == $result ) {
					$result = $result;
				} else {
					$result = 'Erro en las categorias.';
				}
			} else {
				$result = null;
			}
		} catch (\Exception $e) {
			$result = $e;
		}

		$connection = disconn($connection);
		return $result;
	}

	function saveProducto ($codigo, $referencia, $nombre, $descripcion, $valorminorista, $valormayorista, $categorias, $cod_marca, $atributos, $destacado, $activo) {
		$connection = conn();
		try {
			$sql = "SELECT * from tb_producto WHERE id = '$codigo'";
			$query = $connection->prepare($sql);
			$query->execute();

			if ($query->rowCount() > 0) {
				$sql = "UPDATE tb_producto SET referencia = '$referencia', nombre = '$nombre', descripcion = '$descripcion', valor_minorista = '$valorminorista', valor_mayorista = '$valormayorista', id_marca = $cod_marca, activo = $activo, destaque = $destacado
	 					WHERE id = '$codigo'";
				$query = $connection->prepare($sql);
				$query->execute();

				if ($query->rowCount() > 0) {
					$result = $codigo;
				} else {
					$result = $codigo; //Sem alteração
				}

				if ($result == $codigo) {
					$prodCat = saveProdCategoria ($categorias, $codigo);

					if ($prodCat == $codigo ) {
						$result = $codigo;
					} else {
						$result = 'Erro en las categorias.';
					}
				}

				if ($result == $codigo) {
					if ($atributos != null) {
						$prodAtr = saveProdAtributo ($atributos, $codigo);

						if ($prodAtr == $codigo ) {
							$result = $codigo;
						} else {
							$result = 'Erro en las categorias.';
						}	
					} else {
						$result = $codigo;
					}
				}
			} else {
				$result = null;
			}			
		} catch (\Exception $e) {
			$result = $e;
		}
		$connection = disconn($connection);
		return $result;
	}

	function deleteProducto ($codigo) {
		$connection = conn();
		try {
			$sql = "SELECT * from tb_producto_img WHERE id_producto = '$codigo'";
			$query = $connection->prepare($sql);
			$query->execute();
			$images = $query->fetchAll();

			//Apaga as imagens da pasta
			foreach ($images as $img) {
				if (!unlink("img/productos/".$img['url'])) {  
					return $img['url']." cannot be deleted due to an error";  
				} 
			}
			//Delete Imagenes
			$sql = "DELETE FROM tb_producto_img WHERE id_producto = '$codigo'";
			$query = $connection->prepare($sql);
			$query->execute();

			//Delete Atributos
			$sql = "DELETE FROM tb_producto_atributo WHERE id_producto = '$codigo'";
			$query = $connection->prepare($sql);
			$query->execute();

			//Delete Categoria
			$sql = "DELETE FROM tb_producto_categoria WHERE id_producto = '$codigo'";
			$query = $connection->prepare($sql);
			$query->execute();

			//Delete Stock
			$sql = "DELETE FROM tb_producto_stock WHERE id_producto = '$codigo'";
			$query = $connection->prepare($sql);
			$query->execute();

			//Delete Stock Valor
			$sql = "DELETE FROM tb_stock_valor WHERE id_producto = '$codigo'";
			$query = $connection->prepare($sql);
			$query->execute();

			//Delete Producto
			$sql = "DELETE FROM tb_producto WHERE id = '$codigo'";
			$query = $connection->prepare($sql);
			$query->execute();

			if ($query->rowCount() > 0) {
				$result = $codigo;
			} else {
				$result = null;
			}
		} catch (\Exception $e) {
			$result = $e;
		}

		$connection = disconn($connection);
		return $result;
	}

	function saveProdCategoria ($categorias, $producto) {
		$connection = conn();
		$result = null;
		try {
			$result = $producto;
			$sql = "DELETE FROM tb_producto_categoria WHERE id_producto = '$producto'";
			$query = $connection->prepare($sql);
			$query->execute();

			foreach ($categorias as $categoria) {
				$sql = "INSERT INTO tb_producto_categoria (id_producto, id_categoria)
				VALUES ('$producto', '$categoria')";

				$query = $connection->prepare($sql);
				$query->execute();

				if ($query->rowCount() <= 0) {
					$result = null;
				}
			}

			$sql = "SELECT * FROM tb_categoria WHERE tb_categoria.id IN (SELECT id_categoria FROM tb_producto_categoria WHERE id_producto = '$producto')";
			$query = $connection->prepare($sql);
			$query->execute();
			$cats = $query->fetchAll();

			foreach ($cats as $cat) {
				if ($cat['id_padre'] != null) { //categoria é uma subcategoria
					$id_padre = $cat['id_padre'];
					$sql = "SELECT id_categoria FROM tb_producto_categoria WHERE id_producto = '$producto' AND id_categoria = '$id_padre'";
					$query = $connection->prepare($sql);
					$query->execute();
					
					// Caso no esté registrado, registra categoria padre
					if ($query->rowCount() <= 0) {
						$sql = "INSERT INTO tb_producto_categoria (id_producto, id_categoria)
						VALUES ('$producto', '$id_padre')";

						$query = $connection->prepare($sql);
						$query->execute();
					}
				}				
			}

		} catch (\Exception $e) {
			$result = $e;
		}
		$connection = disconn($connection);
		return $result;
	}

	function saveProdAtributo ($atributos, $producto) {
		$connection = conn();
		$result = null;
		try {
			$result = $producto;
			$sql = "DELETE FROM tb_producto_atributo WHERE id_producto = '$producto'";
			$query = $connection->prepare($sql);
			$query->execute();

			foreach ($atributos as $atributo) {
				$sql = "INSERT INTO tb_producto_atributo (id_producto, id_atributo)
				VALUES ('$producto', '$atributo')";

				$query = $connection->prepare($sql);
				$query->execute();

				if ($query->rowCount() <= 0) {
					$result = null;
				}
			}

		} catch (\Exception $e) {
			$result = $e;
		}
		$connection = disconn($connection);
		return $result;
	}

	function getProductoStock ($producto) {
		$connection = conn();
		$sql = "SELECT tb_producto_stock.* FROM tb_producto_stock WHERE tb_producto_stock.id_producto = '$producto'";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function getStockValor ($stock) {
		$connection = conn();
		$sql = "SELECT * FROM tb_stock_valor LEFT JOIN tb_atr_valor ON tb_stock_valor.id_atr_valor = tb_atr_valor.id WHERE tb_stock_valor.id_stock = '$stock' ORDER BY tb_atr_valor.id_atributo";
		$query = $connection->prepare($sql);
		$query->execute();

		if ($query->rowCount() > 0) {
			$result= $query->fetchAll();
		} else {
			$result = null;
		}

		$connection = disconn($connection);
		return $result;
	}

	function newStock ($valores, $producto, $stock, $valorminorista, $valormayorista) {
		$connection = conn();
		try {	
			//VERIFICA VALORES, SI YA EXSITE ACTUALIZA EL STOCK, SI NO, CREA NUEVO
			$sql = "SELECT id_stock from tb_stock_valor WHERE id_producto = '$producto' GROUP BY id_stock";
			$query = $connection->prepare($sql);
			$query->execute();

			$nuevo = 1;

			if ($valores != NULL) {
				sort($valores); //Sort ASC
			}
			if ($query->rowCount() > 0) {
				//combinaciones ya existentes 
				$combinaciones = $query->fetchAll();
	
				foreach ($combinaciones as $combinacion) {
					$id_stock = $combinacion['id_stock'];
					$sql = "SELECT * from tb_stock_valor WHERE id_producto = '$producto' AND id_stock = '$id_stock' ORDER BY id_atr_valor";
					$query = $connection->prepare($sql);
					$query->execute();

					if ($query->rowCount() > 0) {
						//dentre las existentes, existe alguna que és igual a que estamos intentando crear?
						$stockValores = $query->fetchAll();	
						$i = 0;
						foreach ($stockValores as $stockValor) {
							if ($stockValor['id_atr_valor'] == $valores[$i]) {
								$i++;
							} else {
								break; //não é gual, próximo item das combinações
							}
						}

						if ($i == sizeof($valores)) {
							$nuevo = 0; //tem que atualizar
							break;
						}
					}
				}
			} else {
				if ($valores == NULL) {
					$sql = "SELECT id from tb_producto_stock WHERE id_producto = '$producto'";
					$query = $connection->prepare($sql);
					$query->execute();

					if ($query->rowCount() > 0) { //si ya hay un stock para ese producto y no tiene combinación
						$unico = $query->fetch();
						$id_stock = $unico['id'];
						$nuevo = 0;
					} else {
						$nuevo = 1;
					}
				} else {
					$nuevo = 1; //nueva combinación
				}
			}

			if ($nuevo == 1) {
				$sql = "INSERT INTO tb_producto_stock (id_producto, stock, valor_minorista, valor_mayorista, activo)
						VALUES ('$producto', '$stock', $valorminorista, $valormayorista, 1)";
				$query = $connection->prepare($sql);
				$query->execute();

				if ($query->rowCount() > 0) {
					$result = $connection->lastInsertId();

					if ($valores != null) {
						foreach ($valores as $valor) {
							$sql = "INSERT INTO tb_stock_valor (id_atr_valor, id_stock, id_producto)
							VALUES ('$valor', '$result', '$producto')";
							$query = $connection->prepare($sql);
							$query->execute();
	
							if ($query->rowCount() <= 0) {
								$result = null;
							}
						}	
					}
				} else {
					$result = null;
				}
			} else {
				$sql = "SELECT stock from tb_producto_stock WHERE id = '$id_stock'";
				$query = $connection->prepare($sql);
				$query->execute();
				$stockAntiguo = $query->fetch();

				$stockAntiguo = $stockAntiguo['stock'] + $stock;

				$sql = "UPDATE tb_producto_stock SET stock = '$stockAntiguo', valor_minorista = $valorminorista, valor_mayorista = $valormayorista
						WHERE id = '$id_stock'";
				$query = $connection->prepare($sql);
				$query->execute();

				if ($query->rowCount() > 0) {
					$result = $id_stock;
				} else {
					$result = null;
				}
			}

		} catch (\Exception $e) {
			$result = "Error -> ".$e;
		}

		$connection = disconn($connection);
		return $result;
	}

	function verificaValores () {

	}

	// function newStockValor ($stock) {
	// 	$connection = conn();
	// 	$sql = "SELECT * FROM tb_stock_valor LEFT JOIN tb_atr_valor ON tb_stock_valor.id_atr_valor = tb_atr_valor.id WHERE tb_stock_valor.id_stock = '$stock'";
	// 	$query = $connection->prepare($sql);
	// 	$query->execute();

	// 	if ($query->rowCount() > 0) {
	// 		$result= $query->fetchAll();
	// 	} else {
	// 		$result = null;
	// 	}

	// 	$connection = disconn($connection);
	// 	return $result;
	// }
?>