<?php

namespace App\Http\Livewire\Page;

use App\Models\TCategoria;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class FormFooter extends Component
{
    public $values_categories = [], $values_destinations = [], $values_number, $values_trip_length, $travel_day, $comment, $name, $email, $phone, $phonecountry, $values_number_input, $success;
    public function render()
    {
        $categories = TCategoria::all();

        $number = ['1','2','3','4','5'];
        $trip_lengths = ['3-5','6-8','9-11','12-16','16+'];
        $hotels = [
            [
                'star'=>'5',
                'category'=>__('message.form_footer_par15')
            ],
            [
                'star'=>'4',
                'category'=>__('message.form_footer_par16')
            ],
            [
                'star'=>'3',
                'category'=>__('message.form_footer_par17')
            ]
        ];

        $destino = [
            [
                'destino'=>'Perú',
            ],
            [
                'destino'=>'Colombia',
            ],
            [
                'destino'=>'Chile',
            ],
            [
                'destino'=>'Ecuador',
            ],
            [
                'destino'=>'Bolivia',
            ],
            [
                'destino'=>'Argentina',
            ],
            [
                'destino'=>'Brasil',
            ]
        ];


//        [
//            'star'=>'2',
//            'category'=>__('message.form_footer_par18')
//        ]


        return view('livewire.page.form-footer', compact('categories', 'number','trip_lengths','hotels','destino'));
    }

    public function store(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $from = 'info@gotolatam.com';

        if ($this->values_number == '6'){
            $travellers = $this->values_number_input;
        }else{
            $travellers = $this->values_number;
        }

        $hotels_s = '';
        foreach ($this->values_categories as $item) {
            $hotels_s.=$item;
        }

        $destino_s = '';
        foreach ($this->values_destinations as $item) {
            $destino_s.=$item;
        }

        Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $this->name], function ($messaje) {
            $messaje->to($this->email, $this->name)
                ->subject('GotoLatam')
                /*->attach('ruta')*/
                ->from('info@gotolatam.com', 'GotoLatam');
        });
        Mail::send(['html' => 'notifications.page.admin-form-footer'], [

            'category_all' => $hotels_s,
            'destinations_all' => $destino_s,
            'travellers_all' => $travellers,
            'trip_length' => $this->values_trip_length,
            'travel_day_all' => $this->travel_day,
            'comentario' => $this->comment,
            'nombre' => $this->name,
            'email' => $this->email,
            'telefono' => $this->phone,
            'code' => $this->phonecountry,

        ], function ($messaje) use ($from) {
            $messaje->to($from, 'GotoLatam')
                ->subject('GotoLatam')
//                    ->cc($from2, 'GotoLatam')
                /*->attach('ruta')*/
                ->from('info@gotolatam.com', 'GotoLatam');
        });

        $this->reset('values_categories');
        $this->reset('values_destinations');
        $this->reset('values_number');
        $this->reset('values_number_input');
        $this->reset('values_trip_length');
        $this->reset('travel_day');
        $this->reset('comment');
        $this->reset('name');
        $this->reset('email');
        $this->reset('phone');
        $this->reset('phonecountry');

        $this->success = __('message.msg_email');

    }

    public function load_submit(){
        return 'loading';
    }

}
