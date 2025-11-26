<?php namespace TPfinal\Modelos;

use Illuminate\Database\Eloquent\Model;
use TPfinal\Modelos\Usuario;

class Compra extends Model
{
  protected $table = 'compra';
  protected $primaryKey = 'idcompra';
  public $timestamps = false;
  protected $fillable = ['cofecha', 'idusuario'];

  /**
   * Una relación uno a muchos se utiliza para definir relaciones en las que un único modelo es el padre de uno o más modelos hijos. Al igual que el resto de relaciones de Eloquent, las relaciones uno a muchos se definen definiendo un método en el modelo de Eloquent.
   * El método belongsTo es proporcionado por la clase base Illuminate\Database\Eloquent\Model y nos permite definir una relación uno a muchos.
   * El primer argumento es el nombre de la clase modelo relacionada y Eloquent buscará un id que coincida con la columna usuario_id en la tabla compra.
   * Eloquent determina el nombre de la clave externa por defecto examinando el nombre del método de relación y añadiendo al nombre del método el sufijo _ seguido del nombre de la columna de clave primaria del modelo padre. 
   * Sin embargo, si la clave externa de su relación no sigue estas convenciones, puede pasar un nombre de clave externa personalizado como segundo argumento del método belongsTo.
   * Si su modelo padre no utiliza id como clave principal, o desea encontrar el modelo asociado utilizando una columna diferente, puede pasar un tercer argumento al método belongsTo especificando la clave personalizada de su tabla padre.
   * Devuelve el usuario que realizó la compra.
   */
  public function usuario()
  {
    return $this->belongsTo(Usuario::class, 'idusuario', 'idusuario');
  }

  /**
   * Devuelve los items de la compra.
   */
  public function compraitem()
  {
    return $this->hasMany(Compraitem::class, 'idcompra', 'idcompra');
  }

  /**
   * Devuelve los estados de la compra.
   */
  public function compraestado()
  {
    return $this->hasMany(Compraestado::class, 'idcompra', 'idcompra');
  }
}