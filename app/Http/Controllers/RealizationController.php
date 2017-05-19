<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Realization;
use App\Models\Termin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RealizationController extends Controller
{
    public function index(Request $request)
    {
        $default = null;
        if (Auth::check())
        {
            $default = Auth::user()->skpd_id;
        }

        $realizations = null;
        $skpd = $request->input('skpd', $default);

        if ($skpd == null)
        {
            $realizations = Realization::all();
        }
        else
        {
            $realizations = Realization::whereHas('activity', function($query) use($skpd) {
                $query->whereHas('program', function($subQuery) use($skpd) {
                    $subQuery->where('skpd_id', $skpd);
                });
            })->get();
        }

        return View('pages.realization.index', [
            'skpd'         => $skpd != null ? Skpd::find($skpd) : null,
            'realizations' => $realizations
        ]);
    }

    public function create(Request $request)
    {
        $activity = Activity::find($request->input('kegiatan', null));
        return View('pages.realization.editor', [
            'activity' => $activity
        ]);
    }

    public function store(Request $request)
    {
        $realization = new Realization;
        $realization->activity_id = $request->input('activity', '1.06.1.06.01.001');
        $realization->value = $request->input('value');
        $realization->contract = $request->input('contract');
        $realization->executor = $request->input('executor');
        $realization->refensi  = $request->input('refensi');
        $realization->physical = $request->input('physical');
        $realization->save();

        $termins = $request->input('termins');
        for ($i = 0; $i < count($termins); $i++)
        {
            $termin = new Termin;
            $termin->realization_id = $realization->id;
            $termin->stage = $i + 1;
            $termin->value = $termins[$i];
            $termin->save();
        }

        return redirect('realisasi')->with(['success' => true]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }
}
