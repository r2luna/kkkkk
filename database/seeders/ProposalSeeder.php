<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Proposal;
use Illuminate\Database\Seeder;

class ProposalSeeder extends Seeder
{
    public function run(): void
    {
        Project::all()
            ->each(
                fn(Project $p) => Proposal::factory()->count(rand(1, 10))->create(['project_id' => $p->id])
            );
    }
}
