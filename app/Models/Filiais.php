<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filiais extends Model
{
    //quais coluna pode inserir
protected $fillable = ['nome','cidade','cnpj','endereco','email','latitude','longitude'];

    public function getResultFiliais($nome = null)
    {
          if(!$nome)
               return $this->get();
          return $this->where('nome', 'LIKE', "%{$nome}%")
                ->get();

    }
}
