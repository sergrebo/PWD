<?php namespace TPfinal\Modelos;

use Illuminate\Database\Eloquent\Model;
use TPfinal\Modelos\Rol;

class Menu extends Model
{
  /**
   * Indica la tabla asociada con el modelo.
   * @var string
   */
  protected $table = 'menu';

  /**
   * Indica la clave primaria del modelo.
   * @var string
   */
  protected $primaryKey = 'idmenu';

  /**
   * Indica si el modelo debe estar timestamped.
   * @var bool
   */
  public $timestamps = false;

  /**
   * Indica los campos que pueden ser llenados por el usuario.
   * @var array
   */
  protected $fillable = ['menombre', 'medescripcion', 'idpadre', 'medeshabilitado'];

  /**
   * Devuelve los roles al que pertenece el menu.
   */
  public function roles()
  {
    return $this->belongsToMany(Rol::class, 'menurol', 'idmenu', 'idrol');
  }
}
