<?php

use Illuminate\Database\Eloquent\Model;

class UsuarioRol extends Model
{
  /**
   * Por convención y para Eloquent, el nombre de la clase en plural y en formato "snake_case" será usado como el nombre de tabla a menos que otro nombre sea especificado expresamente. Puedes especificar manualmente el nombre de la tabla del modelo definiendo una propiedad de table en el modelo.
   * Indica la tabla asociada con el modelo.
   * @var string
   */
  protected $table = 'usuariorol';

  /**
   * Indica si el modelo debe estar timestamped.
   * @var bool
   */
  public $timestamps = false;

  protected $fillable = ['idusuario', 'idrol'];
}