<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Story;
use App\Models\StoryNode;
use App\Models\Choice;

class StorySeeder extends Seeder
{
    public function run()
    {
        // Create a story
        $story = Story::create([
            'title' => 'The Lost Treasure',
            'description' => 'A story about finding hidden treasure.',
        ]);

        // Create the start node
        $startNode = StoryNode::create([
            'story_id' => $story->id,
            'title' => 'The Jungle',
            'content' => 'You are an adventurer searching for hidden treasure in a mysterious jungle. After days of traveling, you arrive at a fork in the road.',
        ]);

        // Create the nodes for choices
        $leftNode = StoryNode::create([
            'story_id' => $story->id,
            'title' => 'The Cave',
            'content' => 'You venture deeper into the jungle, where the sounds of wild animals grow louder. After an hour, you find a hidden cave.',
        ]);

        $rightNode = StoryNode::create([
            'story_id' => $story->id,
            'title' => 'The River',
            'content' => 'You follow the river and find a small boat. The river seems to lead deeper into the jungle.',
        ]);

        // Create choices
        Choice::create([
            'story_node_id' => $startNode->id,
            'text' => 'Take the left path',
            'next_node_id' => $leftNode->id,
        ]);

        Choice::create([
            'story_node_id' => $startNode->id,
            'text' => 'Take the right path',
            'next_node_id' => $rightNode->id,
        ]);
    }
}
