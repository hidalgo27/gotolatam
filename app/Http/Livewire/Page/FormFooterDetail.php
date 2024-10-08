<?php

namespace App\Http\Livewire\Page;

use App\Models\TCategoria;
use App\Models\TDestino;
use Illuminate\Support\Facades\Mail;
use Jenssegers\Agent\Agent;
use Livewire\Component;

class FormFooterDetail extends Component
{
    public $values_categories = [], $values_destinations = [], $values_number, $values_trip_length, $travel_day, $comment, $name, $email, $phone, $phonecountry, $values_number_input, $success, $paquete, $device, $browser;

    public function mount()
    {
        $agent = new Agent();

        if ($agent->isMobile()) {
            $this->device = 'Móvil';
        } elseif ($agent->isTablet()) {
            $this->device = 'Tablet';
        } else {
            $this->device = 'Desktop';
        }

        $this->browser = $agent->browser();
    }
    public function render()
    {
        $destinations = TDestino::all();
        $categories = TCategoria::all();

        $number = ['1','2','3','4','5'];
        $trip_lengths = ['7-11','12-15','16-21','22-28','29+'];
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

//        ,
//        [
//            'star'=>'2',
//            'category'=>__('message.form_footer_par18')
//        ]


        return view('livewire.page.form-footer-detail', compact('destinations','categories', 'number','trip_lengths','hotels','destino'));
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

//        Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $this->name], function ($messaje) {
//            $messaje->to($this->email, $this->name)
//                ->subject('GotoLatam')
//                /*->attach('ruta')*/
//                ->from('info@gotolatam.com', 'GotoLatam');
//        });
        Mail::send(['html' => 'notifications.page.admin-form-footer-detail'], [
            'paquete' => $this->paquete,
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
            'device' => $this->device,
            'browser' => $this->browser

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
