<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequestCreate;
use App\Mail\DevisApprove;
use App\Mail\DevisDenied;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\Component;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "salut la famille";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequestCreate $request)
    {
        // dd($request);
        Project::create([
            'prestation' => $request->prestation,
            'user_id' => auth()->user()->id,
            'phone' => $request->phone,
            'type_de_maison' => $request->type_de_maison,
            'nombres_de_pieces' => $request->nombres_de_pieces,
            'style_de_construction' => $request->style_de_maison,
            'type_de_construction' => $request->style_de_maison,
            'nombres_de_pieces' => $request->nombres_de_pieces,
            'surfaces' => $request->surface,
            'terrain' => $request->terrain,
            'personnel' => $request->personnel,
            'permis' => $request->permis,
            'budget' => $request->budjet,
            'finance' => $request->finance,
            'date_de_demarage' => $request->date_de_demarage,
            'objectif' => $request->objectif,
            'budget_appro' => $request->budget_appro,
            'description' => $request->description
        ]);

        session()->flash('status', 'Votre demande de devis a bien été enregistrée.');

        return redirect()->route('project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $user = DB::table('users')->where('id', $project->user_id)->first();
        return view('components.admin.devisapprouve')->with('project', $project)->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function approuve(Project $project)
    {
        DB::table('projects')->where('id', $project->id)->update(['status' => 'approved']);

        $user = DB::table('users')->find($project->user_id);

        Mail::to($user->email)->send(new DevisApprove($project->id));

        session()->flash('status', 'devis approuver avec succes');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function denied(Project $project)
    {
        DB::table('projects')->where('id', $project->id)->update(['status' => 'denied']);

        $user = DB::table('users')->find($project->user_id);

        Mail::to($user->email)->send(new DevisDenied($project));

        session()->flash('status', 'la demande a été refusée avec succès !');

        return back();
    }
}
