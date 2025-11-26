<?php namespace TPfinal\Modelos;

use Illuminate\Database\Eloquent\Model;
use TPfinal\Modelos\Usuario;

class Rol extends Model
{
  /**
   * Indica la tabla asociada con el modelo.
   * @var string
   */
  protected $table = 'rol';

  /**
   * Indica la clave primaria del modelo.
   * @var string
   */
  protected $primaryKey = 'idrol';

  /**
   * Indica si el modelo debe estar timestamped.
   * @var bool
   */
  public $timestamps = false;

  protected $fillable = ['rodescripcion'];

  /**
   * Devuelve los usuarios que pertenecen al rol.
   */
  public function usuarios()
  {
    return $this->belongsToMany(Usuario::class, 'usuariorol', 'idrol', 'idusuario');
  }

  /**
   * Devuelve los menus que pertenecen al rol.
   */
  public function menus()
  {
    return $this->belongsToMany(Menu::class, 'menurol', 'idrol', 'idmenu');
  }
}