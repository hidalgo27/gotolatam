<?php

namespace App\Http\Livewire\Page;

use App\Models\TCategoria;

use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Jenssegers\Agent\Agent;
use Livewire\Component;

class FormFooter extends Component
{
    public $values_categories = [], $values_destinations = [], $values_number, $values_trip_length, $travel_day, $comment, $name, $email, $phone, $country, $phonecountry, $values_number_input, $success, $device, $browser;

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

//        Mail::send(['html' => 'notifications.page.client-form-design'], ['name' => $this->name], function ($messaje) {
//            $messaje->to($this->email, $this->name)
//                ->subject('GotoLatam')
//                /*->attach('ruta')*/
//                ->from('info@gotolatam.com', 'GotoLatam');
//        });

        $travelDay = Carbon::parse($this->travel_day);

        // Formatear la fecha a ISO 8601 ("Y-m-d\TH:i:s.v\Z"), que es el formato deseado
//        $formattedDate = $travelDay->format('Y-m-d\TH:i:s.v\Z');
        $formattedDate = $travelDay->format('Y-m-d H:i:s');



//        $trip_length = '';
//        foreach ($this->values_trip_length as $item) {
//            $trip_length.=$item;
//        }

//        $formattedDate = Carbon::parse($this->travel_date)->format('Y-m-d H:i:s');

        $inquireDate = Carbon::now('America/Lima')->format('Y-m-d H:i:s');

        // Preparar los datos que se enviarán al servicio
        $data = [
            "category_d" => $this->values_categories,
            "destino_d" => $this->values_destinations, // Aquí puedes agregar los destinos si los tienes
            "pasajeros_d" => $travellers,
            "duracion_d" => $this->values_trip_length,
            "el_nombre" => $this->name,
            "el_email" => $this->email,
            "el_fecha" => $formattedDate, // O puedes usar $this->travel_day si es relevante
            "el_telefono" => $this->phone,
            "el_textarea" => $this->comment,
            'codigo_pais' => $this->phonecountry,
            'device' => $this->device,
            'browser' => $this->browser,
            'origen' => "Web",
            'producto' => "gotolatam.com",
            'inquire_date' => $inquireDate
        ];

        $data2 = [
            "product_id" => 2,
            "package"=>'',
            "hotel_category" => array_values($this->values_categories),
            "destinations" => array_values($this->values_destinations),
            "passengers" => $travellers,
            "duration" => array_values($this->values_trip_length),
            "travel_date"=>$formattedDate,
            "country"=>$this->country,
            "country_code"=>$this->phonecountry,
            "device"=>$this->device,
            "origin"=>"Web",
            "browser"=>$this->browser,
            "name"=>$this->name,
            "email"=>$this->email,
            "phone"=>$this->phone,
            "comment"=>$this->comment,
            "initial_price"=>0,
            "inquiry_date"=>$inquireDate,
            "dialCode"=>'',

        ];

//        dd($data2);

        $response2 = Http::post('https://app.g1.agency/api/v1/leads/', $data2);

        // Enviar los datos al servicio mediante una solicitud HTTP POST
        $response = Http::post('https://api.gotoecuador.com/api/store/inquire', $data);



        if ($response2->successful() AND $response->successful()) {
        Mail::send(['html' => 'notifications.page.admin-form-footer'], [

            'category_all' => implode(', ', $this->values_categories),
            'destinations_all' => implode(', ', $this->values_destinations),
            'travellers_all' => $travellers,
            'trip_length' => implode(', ', $this->values_trip_length),
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
        } else {
            // Manejo de errores
            $this->addError('error', 'Hubo un problema enviando la información al servicio.');
        }
    }

    public function load_submit(){
        return 'loading';
    }

}
