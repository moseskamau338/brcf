<?php

namespace App\Http\Livewire;

use App\Mail\MessageCreated;
use Livewire\Component;

class ContactForm extends Component
{
    public array $mess = ['show' => false,'type'=>'success', 'message' => ''];
    public ?string $name = null;
    public ?string $phone = null;
    public ?string $email = null;
    public ?string $message = null;

    protected array $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email',
        'phone' => 'required|min:9',
        'message' => 'required',
    ];

    public function submit()
    {
        // validate
        $this->validate();
        try {
            // send mail
            \Mail::to('info@bethraphafoundation.org')
                ->send(new MessageCreated((object)[
                    'name' => $this->name,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'message' => $this->message,
                ]));
            // notify
            $this->mess['message'] = "Thank you for reaching out! We'll get back to you shortly.";
            $this->mess['type'] = 'success';
            $this->mess['show'] = true;
        }catch(\Throwable $e){
            $this->mess['message'] = "Sorry, we encountered an error.".$e->getMessage();
            $this->mess['type'] = 'danger';
            $this->mess['show'] = true;
        }
    }


    public function clearNotification()
    {
        $this->mess['show'] = false;
        $this->mess['message'] = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
