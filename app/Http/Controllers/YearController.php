<?php

namespace App\Http\Controllers;

use App\Http\Requests\Year\StoreRequest;
use App\Http\Requests\Year\UpdateRequest;
use App\Models\Movie;
use App\Models\Year;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $years = Year::paginate(50);

        return view('layouts/admin/years/index',compact('years'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts/admin/years/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->all();
        Year::create($data);

        return redirect()->route('admin.years.index')->with('alert', 'Год успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param Year $year
     * @return \Illuminate\Http\Response
     */
    public function show(Year $year)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $year = Year::find($id);

        return view('layouts/admin/years/edit', compact('year'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Year $year
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Year $year): RedirectResponse
    {
        $save = Year::find($year->id);
        $save['year'] = $request['year'];
        $save->save();

        return redirect()->route('admin.years.index')->with('alert', 'Год успешн обновлен!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = Movie::where('year_id',$id)->get()->count();

        if ($count>0)
        {
            return redirect()->route('admin.years.confirm', $id, $count);
        }

        $year = Year::where('id',$id);
        $year->delete();

        return redirect()->route('admin.years.index')->with('alert', 'Год успешно удален!');
    }

    public function confirm($id)
    {
        return view('layouts/admin/years/confirm', $id);
    }
}
