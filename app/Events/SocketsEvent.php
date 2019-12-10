<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SocketsEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $latitud;
    public $longitud;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($latitud, $longitud)
    {
        $this->latitud = $latitud;
        $this->longitud = $longitud;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('home');
    }

    public function broadcastAs()
    {
        return 'SocketsEvent';
    }
    public function broadcastWith()
    {
        return [
            'latitud' => $this->latitud,
            'longitud' => $this->longitud
        ];
    }
}
