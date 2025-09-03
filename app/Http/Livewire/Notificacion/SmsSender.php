<?php

namespace App\Http\Livewire\Notificacion;

use Livewire\Component;
use Twilio\Rest\Client;

class SmsSender extends Component
{
    public $to;
    public $message;
    public $status;

    protected $rules = [
        'to' => 'required|string',
        'message' => 'required|string|min:5|max:160',
    ];

    public function sendSms()
    {
        $this->validate();

        $sid = config('services.twilio.sid');
        $token = config('services.twilio.token');
        $from = config('services.twilio.from');

        
        $sid="AC6d08e9ee1a34c0c9481171fd8d517571";
        $token="eb5af33a341078ea84f95717f4a83a47";
        $from="+18777804236";

        $client = new Client($sid, $token);

        try {
            $client->messages->create(
                $this->to,
                [
                    'from' => $from,
                    'body' => $this->message,
                ]
            );
            $this->status = 'success';
        } catch (\Exception $e) {
            $this->status = 'error';
            // Opcional: registrar el error para depuración
            // \Log::error('Twilio SMS error: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.notificacion.sms-sender');
    }
}