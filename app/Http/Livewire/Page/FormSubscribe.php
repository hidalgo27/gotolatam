<?php

namespace App\Http\Livewire\Page;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class FormSubscribe extends Component
{

    public $name, $email, $success;

    public function render()
    {
        return view('livewire.page.form-subscribe');
    }

    public function store(){

        $this->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $from = 'info@gotolatam.com';


        Mail::send(['html' => 'notifications.page.response-subscribe'], ['name' => $this->name], function ($messaje) {
            $messaje->to($this->email, $this->name)
                ->subject('GotoLatam')
                /*->attach('ruta')*/
                ->from('info@gotolatam.com', 'GotoLatam');
        });
        Mail::send(['html' => 'notifications.page.admin-form-subscribe'], [
            'nombre' => $this->name,
            'email' => $this->email,

        ], function ($messaje) use ($from) {
            $messaje->to($from, 'GotoLatam')
                ->subject('GotoLatam')
//                    ->cc($from2, 'GotoLatam')
                /*->attach('ruta')*/
                ->from('info@gotolatam.com', 'GotoLatam');
        });


        $this->reset('name');
        $this->reset('email');


        $this->success = __('message.msg_email');

    }


    public function load_submit(){
        return 'loading';
    }
}
