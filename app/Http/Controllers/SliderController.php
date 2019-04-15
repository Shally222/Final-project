<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    // index function
    public function index()
    {
        $sliders = Slider::orderby('id', 'desc')->paginate(10);
        return view('sliders.index', compact('sliders'));
    }

// create function
    public function create()
    {
        return  view('sliders.create');
    }

// store function
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title'=>'required|max:225',
            'photo'=>'required|image',
        ));
        $slider = new Slider;
        $slider->title = $request->input('title');
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = 'slide' . '-' . time() . '.' . $photo->getClientOriginalExtension();
            $location = public_path('images/');
            $request->file('photo')->move($location, $filename);

            $slider->photo = $filename;
        }
        $slider->save();
        return redirect()->route('slides.index');
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('sliders.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::find($id);
        $this->validate($request, array(
            'title'=>'required|max:225',
            'photo'=>'required|image'
        ));

        $slider = Slider::where('id',$id)->first();

        $slider->title = $request->input('title');

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = 'slide' . '-' . time() . '.' . $photo->getClientOriginalExtension();
            $location = public_path('images/');
            $request->file('photo')->move($location, $filename);

            $oldFilename = $slider->photo;
            $slider->photo= $filename;
            if(!empty($slider->photo)){
              Storage::delete($oldFilename);
                $slider->delete();
            }
        }

        $slider->save();

        return redirect()->route('slides.index',
            $slider->id)->with('success',
            'Slider, '. $slider->title.' updated');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
       Storage::delete($slider->photo);
        $slider->delete();

        return redirect()->route('slides.index')
            ->with('success',
                'Slide successfully deleted');
    }
}
