<?php

namespace App\Http\Resources;

use App\Model\Workspace;
use Illuminate\Http\Resources\Json\JsonResource;

class ChannelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'workspace' => $this->workspace, // 所属するワークスペース
            'name' => $this->name,
            'status' => $this->status,
            'created_at' => $this->created_at->diffForHumans()
        ];
    }
}
