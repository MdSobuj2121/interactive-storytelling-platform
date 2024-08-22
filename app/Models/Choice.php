<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    protected $fillable = ['story_node_id', 'text', 'next_node_id'];

    public function storyNode()
    {
        return $this->belongsTo(StoryNode::class);
    }

    public function nextNode()
    {
        return $this->belongsTo(StoryNode::class, 'next_node_id');
    }
}
