<?php

namespace App\Http\Livewire\Notificacion;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Mail\TestMail;
use App\Models\Notificacion;
use Mail;

class EmailController extends Component
{
    public $index;

    public function mount($index = 0)
    {
        $this->index = $index;
    }

    public function render()
    {
        switch ($variable) {
            case '1':
                # code...
                break;
            
            default:
                return view('livewire.notificacion.email-controller');
                break;
        }        
    }

    public function sendEmail($operacion, $user)
    {
        switch ($operacion) {
            case 'welcome':
                $this->sendMailWelcome($user);
                break;
            
            default:
                return view('livewire.notificacion.email-controller');
                break;
        }        
    }

    public function sendMailWithAttachment($user, $title = '', $body = '')
    {
        // Laravel 8

        $data["email"] = $user->email;
        $data["title"] = "Techsolutionstuff";
        $data["body"] = "This is test mail with attachment";
 
        $files = [
            public_path('img/regalo.png'),
            public_path('img/test_pdf.pdf'),
        ];
  
        Mail::send('emails.test_mail', $data, function($message) use ($data, $files) {
            $message->to($data["email"])
                    ->subject($data["title"]);
 
            foreach ($files as $file){
                $message->attach($file);
            }            
        });

        // $mailData = [
        //     'title' => 'This is Test Mail',
        //     'files' => [
        //         public_path('img/regalo.png'),
        //         public_path('img/test_pdf.pdf'),
        //     ],
        // ];
           
        // Mail::to('to@gmail.com')->send(new TestMail($mailData));
 
    }

    public function sendMailNotificacion($user, Notificacion $notificacion)
    {
        // Laravel 8

        $data["email"] = $user->email;
        $data["title"] = $notificacion->title;
        $data["body"] = $notificacion->content;
 
        $files = [
            $notificacion->file_url,
        ];
  
        Mail::send('emails.test_mail', $data, function($message) use ($data, $files) {
            $message->to($data["email"])
                    ->subject($data["title"]);
 
            foreach ($files as $file){
                $message->attach($file);
            }            
        });

    }

    public function sendMailWelcome($user, $file = null)
    {
        // Laravel 8

        $data["user"] = $user;
        $data["email"] = $user->email;
        $data["title"] = 'Bienvenid(@) a PanExpres.com';
        $data["body"] = 'Te damos la bienvenida';
        
        if($file !== null)
        {
            $files = [
                $notificacion->file_url,
            ];
        }
  
        Mail::send('emails.welcome-panexpres', $data, function($message) use ($data, $files) {
            $message->to($data["email"])
                    ->subject($data["title"]);
 
            foreach ($files as $file){
                $message->attach($file);
            }            
        });

    }
}
