<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    public function program()
    {
        return $this->belongsTo('App\Models\Program');
    }

    public function item()
    {
        return $this->hasMany('App\Models\ItemKegiatan');
    }

    public function indikator()
    {
        return $this->hasMany('App\Models\Indikator');
    }

    public function getRealisasiAttribute()
    {
        return $this->item->sum(function($item) {
            if ($item->realisasi != null)
            {
                return $item->realisasi->nilai_1 + $item->realisasi->nilai_2 + $item->realisasi->nilai_3 + $item->realisasi->nilai_4;
            }

            return 0;
        });
    }
}
