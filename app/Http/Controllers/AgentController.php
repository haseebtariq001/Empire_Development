<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\Agent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($is_grid = null)
    {
        $user = Auth::user();
        if ($user->type == 'super admin' || $user->type == 'company') {
            $agents = Agent::all();
        } elseif ($user->type == 'agency') {
            $agents = Agent::agencyAgents($user->agency->id)
                ->select(
                    'agents.id as agent_id',
                    'agents.agency_id as agency_id',
                    'users.is_enable_login',
                    'users.id as user_id',
                    'users.password',
                    'users.avatar',
                    'users.name',
                    'users.email',
                    'users.plan_expire_date',
                    'users.trial_expire_date',
                )   
                ->get();
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }

        $agencies = Agency::getapproves()->get();
        return view('users.agency.agents.index', compact('agents', 'agencies'));
    }

    public function List()
    {
        $user = Auth::user();
        if ($user->type == 'super admin' || $user->type == 'company') {
            $agents = Agent::all();
        } elseif ($user->type == 'agency') {
            $agents = Agent::agencyAgents($user->agency->id)->get();
        } else {
            return redirect()->back()->with('error', __('Permission denied.'));
        }

        return view('users.agency.agents.list', compact('agents'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $agent = Agent::find($id);
        return view('users.agency.agents.show', compact('agent'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agent = Agent::find($id);
        return view('users.agency.agents.edit', compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (!Auth::user()->can('agent update')) {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
        $user = User::find($id);
        
        $is_updated = $user->update([
           'name' => $request->name,
           'email' => $request->email,
           'mobile_no' => $request->mobile_no,
        ]);
        if ($is_updated) {
            return redirect()->route('agents.index')->with('success', __('Agent Updated!.'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!Auth::user()->can('agent delete')) {
            return redirect()->back()->with('error', __('Permission denied.'));
        }
        $agent = Agent::findOrFail($id);
        $user = User::find($agent->user_id)->delete();
        if ($user) {
            $is_agent_deleted =  $agent->delete();
        }
        if ($is_agent_deleted) {
            return redirect()->route('users.index')->with('success', __('Agent successfully deleted.'));
        }
        return redirect()->back()->with('error', __('Something went wrong!'));
    }
}
