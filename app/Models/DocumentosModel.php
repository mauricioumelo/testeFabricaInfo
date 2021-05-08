<?php

namespace App\Models;

use App\Models\tipoDocumentosModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentosModel extends Model
{
    use HasFactory;
    protected $table = 'documentos';
    protected $fillable = ['titulo','nome_arquivo','id_tipo'];
    public $timestamps = false;

    public function tipo()
    {
        return $this->hasOne(tipoDocumentosModel::class, 'id', 'id_tipo');
    }

}
