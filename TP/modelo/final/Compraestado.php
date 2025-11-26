<?php namespace TPfinal\Modelos;

use Illuminate\Database\Eloquent\Model;

class Compraestado extends Model
{
  protected $table = 'compraestado';
  protected $primaryKey = 'idcompraestado';
  public $timestamps = false;
  protected $fillable = ['idcompra', 'idcompraestadotipo', 'cefechaini', 'cefechafin'];

  /**
   * Devuelve la compra a la que pertenece el estado.
   */
  public function compra()
  {
    return $this->belongsTo(Compra::class, 'idcompra', 'idcompra');
  }

  /**
   * Devuelve el tipo de estado de la compra.
   */
  public function compraestadotipo()
  {
    return $this->belongsTo(Compraestadotipo::class, 'idcompraestadotipo', 'idcompraestadotipo');
  }
}