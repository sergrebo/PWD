<?php namespace TPfinal\Modelos;

use Illuminate\Database\Eloquent\Model;
use TPfinal\Modelos\Producto;

class Compraitem extends Model
{
  protected $table = 'compraitem';
  protected $primaryKey = 'idcompraitem';
  public $timestamps = false;
  protected $fillable = ['idproducto', 'idcompra', 'cicantidad'];
  
  /**
   * ----------------------------------------------------------------------------------
   * Podemos definir la inversa de una relación hasOne utilizando el método belongsTo.
   * Al invocar el método producto(), Eloquent intentará encontrar un modelo Producto que tenga un id que coincida con la columna producto_id del modelo Compraitem.
   * Eloquent determina el nombre de la clave externa examinando el nombre del método de relación y añadiendo _id como sufijo al nombre del método. Así, en este caso, Eloquent asume que el modelo Compraitem tiene una columna producto_id. Sin embargo, si la clave externa del modelo Compraitem no es producto_id, puede pasar un nombre de clave personalizado como segundo argumento del método belongsTo.
   * Si el modelo padre no utiliza id como clave principal, o desea encontrar el modelo asociado utilizando una columna diferente, puede pasar un tercer argumento al método belongsTo especificando la clave personalizada de la tabla padre.
   * Retorna el producto que corresponde al item de la compra.
   * 
   */
  public function producto()
  {
    return $this->belongsTo(Producto::class, 'idproducto', 'idproducto');
  }

  /**
   * Retorna la compra que corresponde al item de la compra.
   */
  public function compra()
  {
    return $this->belongsTo(Compra::class, 'idcompra', 'idcompra');
  }
}
