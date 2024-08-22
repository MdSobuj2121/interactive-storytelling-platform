<?php
namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\StoryNode;
use Illuminate\Http\Request;

class StoryNodeController extends Controller
{
    public function create(Story $story)
    {
        return view('story-nodes.create', compact('story'));
    }

    public function store(Request $request, Story $story)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        StoryNode::create([
            'story_id' => $story->id,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('stories.show', $story);
    }

    public function show(StoryNode $node)
    {
        return view('story-nodes.node', compact('node'));
    }
}
