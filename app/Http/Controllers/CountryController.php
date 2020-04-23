<?php

namespace App\Http\Controllers;

use App\Http\Requests\Country\StoreRequest;
use App\Http\Requests\Country\UpdateRequest;
use App\Models\Country;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::paginate(50);

        return view('layouts/admin/countries/index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts/admin/countries/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $data = $request->all();
        Country::create($data);

        return redirect()->route('admin.countries.index')->with('alert', 'Страна успешно добавлена!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
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
        $country = Country::find($id);

        return view('layouts/admin/countries/edit', compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Country $country): RedirectResponse
    {
        $save = Country::find($country->id);
        $save['name'] = $request['name'];
        $save->save();

        return redirect()->route('admin.countries.index')->with('alert', 'Страна успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::where('id',$id);
        $country->delete();

        return redirect()->route('admin.countries.index')->with('alert', 'Страна успешно удалена!');
    }
}
