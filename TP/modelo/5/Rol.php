<?php namespace TP5\Modelos;

use Illuminate\Database\Eloquent\Model;
use TP5\Modelos\Usuario;

class Rol extends Model
{
  /**
   * Indica la tabla asociada con el modelo.
   * @var string
   */
  protected $table = 'roles';

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
}