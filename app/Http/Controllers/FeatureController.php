<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFeature;
use App\Http\Requests\UpdateFeature;
use App\Interfaces\ModelInterface;
use Illuminate\Http\Request;

class FeatureController extends Controller
{

    protected $model;

    public function __construct(ModelInterface $model)
    {
        $this->model = $model;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = $this->model->paginate(10);
        return view('admin.features.index', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.features.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateFeature  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFeature $request)
    {
        $feature = $this->model->create($request->all());

        if($feature){
            $request->session()->flash('status',  'success');
            $request->session()->flash('message', 'New Feature was created successful!');
        } else {
            $request->session()->flash('status',  'danger');
            $request->session()->flash('message', 'Oops! Something went wrong...');
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feature = $this->model->find($id);

        if(!$feature) {
            request()->session()->flash('status',  'error');
            request()->session()->flash('message', 'Requested Feature not found!');
            return redirect()->route('features.index');
        }

        return view('admin.features.edit', compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateFeature  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFeature $request, $id)
    {
        $feature = $this->model->find($id);

        if($feature->update($request->all())){
            $request->session()->flash('status',  'success');
            $request->session()->flash('message', 'Feature was updated successful!');
        } else {
            $request->session()->flash('status',  'danger');
            $request->session()->flash('message', 'Oops! Something went wrong...');
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feature = $this->model->find($id);

        if($feature->delete()){
            request()->session()->flash('status', 'success');
            request()->session()->flash('message', 'Feature deleted successfully!');
        } else {
            request()->session()->flash('status', 'danger');
            request()->session()->flash('message', 'Oops! Something went wrong...');
        }

        return redirect()->back();
    }
}
