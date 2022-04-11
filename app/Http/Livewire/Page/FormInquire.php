<?php

namespace App\Http\Livewire\Page;

use App\Models\TCategoria;
use App\Models\TDestino;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class FormInquire extends Component
{

    public $values_destinations = [], $values_categories = [], $name, $email, $phone, $number_travelers, $travel_day, $planning, $comment, $success;

    public function render()
    {
        $destinations = TDestino::all();
        $categories = TCategoria::all();

        return view('livewire.page.form-inquire', compact('destinations', 'categories'))->layout('layouts.page');

    }

    public function store(){

        $this->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $from = 'info@gotolatam.com';

        $destinations_s = '';
        foreach ($this->values_destinations as $item) {
            $destinations_s.=$item;
        }

        $categories_s = '';
        foreach ($this->values_categories as $item) {
            $categories_s.=$item;
        }

        Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $this->name], function ($messaje) {
            $messaje->to($this->email, $this->name)
                ->subject('GotoLatam')
                /*->attach('ruta')*/
                ->from('info@gotolatam.com', 'GotoLatam');
        });
        Mail::send(['html' => 'notifications.page.admin-form-contact'], [
            'nombre' => $this->name,
            'email' => $this->email,
            'destination_all' => $destinations_s,
            'category_all' => $categories_s,
            'telefono' => $this->phone,
            'travellers_all' => $this->number_travelers,
            'travel_day_all' => $this->travel_day,
            'planning' => $this->planning,
            'comentario' => $this->comment,

        ], function ($messaje) use ($from) {
            $messaje->to($from, 'GotoLatam')
                ->subject('GotoLatam')
//                    ->cc($from2, 'GotoLatam')
                /*->attach('ruta')*/
                ->from('info@gotolatam.com', 'GotoLatam');
        });

        $this->reset('values_destinations');
        $this->reset('values_categories');
        $this->reset('name');
        $this->reset('email');
        $this->reset('phone');
        $this->reset('number_travelers');
        $this->reset('travel_day');
        $this->reset('planning');
        $this->reset('comment');


        $this->success = __('message.msg_email');

    }


    public function load_submit(){
        return 'loading';
    }
}
