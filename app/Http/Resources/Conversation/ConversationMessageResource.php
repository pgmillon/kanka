<?php
/**
 * Description of
 *
 * @author Ilestis
 * 10/11/2019
 */

namespace App\Http\Resources\Conversation;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class ConversationMessageResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'from_id' => $this->user_id ?: $this->character_id,
            'user' => $this->user ? $this->user->name : null,
            'character' => $this->character ? $this->character->name : null,
            'message' => $this->message,
            'created_at' => $this->created_at->diffForHumans(),
            'updated_at' => $this->updated_at->diffForHumans(),
            'created_by' => $this->created_by,
            'can_delete' => auth()->check() && auth()->user()->can('delete', $this->resource),
            'can_edit' => auth()->check() && auth()->user()->can('edit', $this->resource),
            'delete_url' => route('conversations.conversation_messages.destroy', [$this->conversation_id, $this->id]),
            'is_updated' => $this->updated_at != $this->created_at,
            'group' => $this->isGroup(),
        ];
    }
}
