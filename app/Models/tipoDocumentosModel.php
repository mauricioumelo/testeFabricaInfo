<?php

namespace App\Models;

use App\Models\DocumentosModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class tipoDocumentosModel extends Model
{
    use HasFactory;
    protected $table = 'tipo';
    public $timestamps = false;

    public function documentos(): HasMany
    {
        return $this->hasMany(DocumentosModel::class, 'id');
    }
}
