<?php

namespace App\Http\Controllers;

// use Intervention\Image\ImageManagerStatic as Image;
use Image;
use App\Models\Realisation;
use Illuminate\Support\Str;
use App\Http\Requests\StoreRealisationRequest;
use App\Http\Requests\UpdateRealisationRequest;
use Illuminate\Support\Facades\DB;

class RealisationController extends Controller
{
    private $image;
    private $input;
    private $imgFile2;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.realisation')->with('realisations', Realisation::all());
    }

    public function item(Realisation $realisation)
    {
        $realisations = DB::table('realisations')->inRandomOrder()->take(2)->get();
        return view('pages.realisation-item')
            ->with('realisation', $realisation)
            ->with('realisations', $realisations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRealisationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRealisationRequest $request)
    {   // image horizotanle
        if ($request->hasFile('thunmail')) {
            $image = $request->file('thunmail');
            $input['thunmail'] = time() . '.' . $image->getClientOriginalExtension();

            $destinationPath = public_path('/thumbnail');
            $imgFile = Image::make($image->getRealPath());
            $imgFile->resize(628, 764)->save($destinationPath . '/' . $input['thunmail']);
            $image->move($destinationPath, $input['thunmail']);
        }

        if ($request->hasFile('image')) {

            // image verticale 1920 x 800
            $this->image = $request->file('image');
            $input['image'] = time() . '.' . $this->image->getClientOriginalExtension();
            $this->input = $input['image'];

            $destinationPath2 = public_path('/image');
            $destinationPath3 = public_path('/image/min80');
            $destinationPath4 = public_path('/image/min353');
            $this->imgFile2 = Image::make($this->image->getRealPath());

            $this->imgFile2->resize(1920, 800)->save($destinationPath2 . '/' . $this->input);
            $this->imgFile2->resize(353, 276)->save($destinationPath3 . '/' . $this->input);
            $this->imgFile2->resize(80, 80)->save($destinationPath4 . '/' . $this->input);
            // $destinationPath = public_path('/uploads');
            $this->image->move($destinationPath2, $this->input);
        }

        // if ($request->hasFile('image')) {

        //     $destinationPath2 = public_path('/image/min353');
        //     $this->imgFile2 = Image::make($this->image->getRealPath());

        //     $this->imgFile2->resize(353, 273)->save($destinationPath2 . '/' . $this->input);
        //     // $destinationPath = public_path('/uploads');
        //     $this->image->move($destinationPath2, $this->input);
        //     // 353 x 276
        //     // $destinationPath3 = public_path('/image/min353');
        //     // $this->imgFile2->resize(353, 276)->save($destinationPath3 . '/' . $this->input);
        //     // $this->image->move($destinationPath3,  $this->input);
        // }
        // if ($request->hasFile('image')) {
        //     // 80 x 80
        //     $destinationPath2 = public_path('/image/min80');
        //     $this->imgFile2 = Image::make($this->image->getRealPath());

        //     $this->imgFile2->resize(80, 80)->save($destinationPath2 . '/' . $this->input);
        //     // $destinationPath = public_path('/uploads');
        //     $this->image->move($destinationPath2, $this->input);
        //     // $destinationPath4 = public_path('/image/min80');
        //     // $this->imgFile2->resize(100, 100)->save($destinationPath4 . '/' . $this->input);
        //     // $this->image->move($destinationPath4,  $this->input);
        // }


        Realisation::create([
            'categories' => $request->categories,
            'desc_content_1' => $request->desc_content_1,
            'desc_content_2' => $request->desc_content_2,
            'description' => $request->description,
            'thunmail' => $input['thunmail'],
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'image' => $this->input,
        ]);

        session()->flash('status', 'publication sauvergarer avec success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function show(Realisation $realisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Realisation $realisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRealisationRequest  $request
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRealisationRequest $request, Realisation $realisation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Realisation  $realisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Realisation $realisation)
    {
        //
    }
}
