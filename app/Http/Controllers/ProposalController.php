<?php

namespace App\Http\Controllers;

use App\Events\NewProposalHasBeenSentEvent;
use App\Models\Project;
use App\Models\User;

class ProposalController extends Controller
{
    public function store(Project $project)
    {

        request()->validate([
            'hours' => 'required|numeric',
            'email' => 'required|email',
        ]);

        $proposal = $project->proposals()->updateOrCreate(
            ['user_id' => User::query()->firstOrCreate(['email' => request('email')])->id],
            ['hours' => request('hours')]
        );

        NewProposalHasBeenSentEvent::dispatch($proposal);

        return back();
    }
}
