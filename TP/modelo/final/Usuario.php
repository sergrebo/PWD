<?php namespace TPfinal\Modelos;

use Illuminate\Database\Eloquent\Model;
use TPfinal\Modelos\Rol;

class Usuario extends Model
{
  /**
   * Por convención, el nombre de la clase en plural y en formato "snake_case" será usado como el nombre de tabla a menos que otro nombre sea especificado expresamente.
   * Si la tabla de base de datos correspondiente a tu modelo no se ajusta a esta convención, puedes especificar manualmente el nombre de la tabla del modelo definiendo una propiedad de table en el modelo
   * Indica la tabla asociada con el modelo.
   * @var string
   */
  protected $table = 'usuario';

  /**
   * Eloquent también asumirá que la tabla de base de datos correspondiente a cada modelo tiene una columna de clave primaria llamada id. Si es necesario, puede definir una propiedad protegida $primaryKey en su modelo para especificar una columna diferente que sirva como clave primaria de su modelo
   * Indica la clave primaria del modelo.
   * @var string
   */
  protected $primaryKey = 'idusuario';

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

  /**
   * Devuelve las compras realizadas por el usuario.
   */
  public function compra()
  {
    return $this->hasMany(Compra::class, 'idusuario', 'idusuario');
  }
}