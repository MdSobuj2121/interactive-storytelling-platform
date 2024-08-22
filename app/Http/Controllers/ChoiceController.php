<?php
namespace App\Http\Controllers;

use App\Models\StoryNode;
use App\Models\Choice;
use Illuminate\Http\Request;

class ChoiceController extends Controller
{
    public function store(Request $request, StoryNode $node)
    {
        $request->validate([
            'text' => 'required',
            'next_node_id' => 'nullable|exists:story_nodes,id',
        ]);

        Choice::create([
            'story_node_id' => $node->id,
            'text' => $request->text,
            'next_node_id' => $request->next_node_id,
        ]);

        return redirect()->route('stories.show', $node->story);
    }
}
