<?php namespace TPfinal\Modelos;

use Illuminate\Database\Eloquent\Model;

class Compraestadotipo extends Model
{
  protected $table = 'compraestadotipo';
  protected $primaryKey = 'idcompraestadotipo';
  public $timestamps = false;
  protected $fillable = ['cestdescripcion', 'cetdetalle'];

  /**
   * Devuelve los estados de la compra.
   */
  public function compraestado()
  {
    return $this->hasMany(Compraestado::class, 'idcompraestadotipo', 'idcompraestadotipo');
  }
}
