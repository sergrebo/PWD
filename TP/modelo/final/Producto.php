<?php namespace TPfinal\Modelos;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  protected $table = 'producto';
  protected $primaryKey = 'idproducto';
  public $timestamps = false;
  protected $fillable = ['pronombre', 'prodetalle','procantstock'];

  /**
   * ----------------------------------------------------------------------------------
   * Una relación uno a uno es un tipo muy básico de relación de base de datos. Para definir esta relación, colocaremos un método con el nombre de la clase a relacionar en el modelo actual. El método debe llamar al método hasOne y devolver su resultado. El método hasOne está disponible para su modelo a través de la clase base Illuminate\Database\Eloquent\Model.
   * El primer argumento que se pasa al método hasOne es el nombre de la clase modelo relacionada. Una vez definida la relación, podemos recuperar el registro relacionado utilizando las propiedades dinámicas de Eloquent. Las propiedades dinámicas permiten acceder a los métodos de relación como si fueran propiedades definidas en el modelo.
   * Eloquent determina la clave externa de la relación basándose en el nombre del modelo padre. Se asume automáticamente que el modelo donde se define la relación tiene una clave externa que coincide con el nombre del modelo relacionado seguido de _id. Si desea sobreescribir esta convención, puede pasar un segundo argumento al método hasOne.
   * Además, Eloquent asume que la clave externa debe tener un valor que coincida con la columna de clave primaria del padre. Si desea que la relación utilice un valor de clave primaria distinto de id o de la propiedad $primaryKey de su modelo, puede pasar un tercer argumento al método hasOne.
   * 
   * Retorna el item de compra que corresponde al producto.
   */
  public function compraitem()
  {
    return $this->hasMany(Compraitem::class, 'idproducto', 'idproducto');
  }
}
