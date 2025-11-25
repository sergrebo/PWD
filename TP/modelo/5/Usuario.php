<?php namespace TP5\Modelos;

use Illuminate\Database\Eloquent\Model;
use TP5\Modelos\Rol;

class Usuario extends Model
{
  /**
   * Por defecto, Eloquent espera que las columnas created_at y updated_at existan en la tabla correspondiente de la base de datos del modelo. Eloquent establecerá automáticamente los valores de estas columnas cuando se creen o actualicen los modelos. Si no quieres que estas columnas sean gestionadas automáticamente por Eloquent, debes definir una propiedad $timestamps en tu modelo con el valor false.
   * Indica si el modelo debe estar timestamped.
   * @var bool
   */
  public $timestamps = false;

  protected $fillable = ['usnombre', 'uspass', 'usmail', 'usdeshabilitado'];

  /**
   * Las relaciones muchos-a-muchos se definen escribiendo un método que devuelva el resultado del método belongsToMany. El método belongsToMany es proporcionado por la clase base Illuminate\Database\Eloquent\Model que es utilizada por todos los modelos Eloquent de su aplicación. El primer argumento pasado a este método es el nombre de la clase modelo relacionada.
   * Para determinar el nombre de tabla de la tabla intermedia de la relación, Eloquent unirá los dos nombres de modelos relacionados en orden alfabético. Sin embargo, puede sobreescribir esta convención. Puede hacerlo pasando un segundo argumento al método belongsToMany.
   * Además de personalizar el nombre de la tabla intermedia, también puede personalizar los nombres de las columnas de las claves de la tabla pasando argumentos adicionales al método belongsToMany. El tercer argumento es el nombre de la clave externa del modelo en el que se está definiendo la relación, mientras que el cuarto argumento es el nombre de la clave externa del modelo al que se está uniendo.
   * Devuelve los roles al que pertenece el usuario.
   */
  public function roles()
  {
    return $this->belongsToMany(Rol::class, 'usuariorol', 'idusuario', 'idrol');
  }
}