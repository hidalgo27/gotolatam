<?php

namespace App\Http\Livewire\About;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Http;
use Jenssegers\Agent\Agent;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class WorkWithUsForm extends Component
{
    use WithFileUploads;

    public $name;
    public $userEmail;
    public $phone;
    public $country;
    public $country_code;
    public $position = '';
    public $message = '';
    public $resume;
    public $travel_availability = false;
    public $expected_salary = 0.0;
    public $linkedin = '';
    public $experience_years = '';
    public $education_level = '';
    public $position_other = '';
    public $education_other = '';
    
    public $showLoader = false;
    public $phoneError = false;
    public $resumeUrl = '';
    public $uploadError = null;
    public $success = false;
    public $device;
    public $browser;
    public $origin = 'Web';

    protected $rules = [
        'name' => 'required|string|max:255',
        'userEmail' => 'required|email|max:255',
        'phone' => 'required|string|max:255',
        'position' => 'required|string|max:255',
        'experience_years' => 'required|integer|min:0|max:50',
        'resume' => 'required|file|mimes:pdf|max:5120',
    ];

    protected $messages = [
        'name.required' => 'Full Name is required',
        'userEmail.required' => 'Email is required',
        'userEmail.email' => 'Please enter a valid email',
        'phone.required' => 'Phone Number is required',
        'position.required' => 'Job Position is required',
        'experience_years.required' => 'Years of experience is required',
        'experience_years.min' => 'Minimum 0 years required',
        'experience_years.max' => 'Maximum 50 years allowed',
        'resume.required' => 'Please upload your CV',
        'resume.mimes' => 'Please upload a PDF file only',
        'resume.max' => 'File size exceeds 5MB limit',
    ];

    protected $listeners = ['showError', 'showSuccess'];

    public function showError($message)
    {
        $this->dispatchBrowserEvent('toast-message', [
            'type' => 'error',
            'message' => $message
        ]);
    }

    public function showSuccess($message)
    {
        $this->dispatchBrowserEvent('toast-message', [
            'type' => 'success',
            'message' => $message
        ]);
    }

    public function mount()
    {
        $agent = new Agent();
        $this->device = $agent->isMobile() ? 'Mobile' : 
                       ($agent->isTablet() ? 'Tablet' : 'Desktop');
        $this->browser = $agent->browser();
    }

    private function uploadResumeToApi()
    {
        try {
            if (!$this->resume || !$this->resume->isValid()) {
                throw new \Exception('El archivo no es válido o no se subió correctamente');
            }

            // Verificar que sea un PDF
            if ($this->resume->getMimeType() !== 'application/pdf') {
                throw new \Exception('Solo se permiten archivos PDF');
            }

            $this->dispatchBrowserEvent('console-log', [
                'type' => 'info',
                'message' => 'Preparando archivo para subida',
                'data' => [
                    'name' => $this->resume->getClientOriginalName(),
                    'size' => $this->resume->getSize(),
                    'mime' => $this->resume->getMimeType()
                ]
            ]);

            $client = Http::withOptions([
                'verify' => false, 
                'timeout' => 60
            ]);

            $response = $client->asMultipart()->post('https://app.g1.agency/api/v1/work/upload-resume', [
                [
                    'name' => 'file', 
                    'contents' => fopen($this->resume->getRealPath(), 'r'),
                    'filename' => $this->resume->getClientOriginalName(),
                    'headers' => [
                        'Content-Type' => 'application/pdf'
                    ]
                ]
            ]);

            if ($response->successful()) {
                $apiResponse = $response->json();
                
                if (!isset($apiResponse['url'])) {
                    throw new \Exception('La API no devolvió una URL válida');
                }
                
                return $apiResponse['url'];
            }

            throw new \Exception('Error en la API: ' . $response->status() . ' - ' . $response->body());

        } catch (\Exception $e) {
            $this->uploadError = 'Error al subir CV: ' . $e->getMessage();
            $this->dispatchBrowserEvent('console-log', [
                'type' => 'error',
                'message' => 'Error en uploadResumeToApi',
                'data' => $e->getMessage()
            ]);
            return null;
        }
    }

    public function submit()
    {
        if ($this->position === 'Other' && empty($this->position_other)) {
            $this->addError('position_other', 'Please specify your position');
            return;
        }
        
        if ($this->education_level === 'Other' && empty($this->education_other)) {
            $this->addError('education_other', 'Please specify your education level');
            return;
        }
        
        $this->validate();
        
        if ($this->phoneError) {
            $this->addError('phone', 'Invalid Phone Number');
            return;
        }
        
        $this->showLoader = true;
        $this->uploadError = null;
        $inquireDate = Carbon::now('America/Lima')->format('Y-m-d H:i:s');

        try {
            $apiResumeUrl = $this->uploadResumeToApi();
            
            if (!$apiResumeUrl) {
                throw new \Exception('No se pudo subir el CV a la API');
            }

            $apiData = [
                'name' => $this->name,
                'email' => $this->userEmail,
                'phone' => $this->phone,
                'country' => $this->country,
                'country_code' => $this->country_code,
                'position' => $this->position === 'Other' ? $this->position_other : $this->position,
                'message' => $this->message,
                'resume_url' => $apiResumeUrl,
                'travel_availability' => $this->travel_availability,
                'expected_salary' => (float)$this->expected_salary,
                'linkedin' => $this->linkedin,
                'experience_years' => (int)$this->experience_years,
                'education_level' => $this->education_level === 'Other' ? $this->education_other : $this->education_level,
                'device' => $this->device,
                'browser' => $this->browser,
                'origin' => $this->origin,
                'inquire_date' => $inquireDate
            ];

            $response = Http::withOptions([
                'verify' => env('APP_ENV') === 'production' 
                    ? storage_path('app/certs/cacert.pem') 
                    : false,
                'timeout' => 60
            ])->post('https://app.g1.agency/api/v1/work/submit', $apiData);

            if ($response->successful()) {
                $this->emit('formSubmitted');
                $this->resetForm(); 
            } else {
                $errorResponse = $response->body();
                
                $this->dispatchBrowserEvent('console-log', [
                    'type' => 'error',
                    'message' => 'Error en API de envío',
                    'data' => $errorResponse
                ]);
                
                throw new \Exception('Error en API: ' . $errorResponse);
            }

        } catch (\Exception $e) {
            $this->dispatchBrowserEvent('console-log', [
                'type' => 'error',
                'message' => 'Error al enviar formulario',
                'data' => $e->getMessage()
            ]);
            
            $this->addError('submission_error', 'Error al enviar: ' . $e->getMessage());
        } finally {
            $this->showLoader = false;
        }
    }

    private function resetForm()
    {
        $this->reset([
            'name',
            'userEmail',
            'phone',
            'country',
            'country_code',
            'position',
            'message',
            'resume',
            'travel_availability',
            'expected_salary',
            'linkedin',
            'experience_years',
            'education_level',
            'position_other',
            'education_other'
        ]);
        
        $this->resumeUrl = '';
        $this->uploadError = null;
        $this->phoneError = false;
    }

    public function render()
    {
        return view('livewire.about.work-with-us-form', [
            'educationLevels' => [
                'High School',
                'Technical Degree',
                'Bachelor\'s Degree',
                'Master\'s Degree',
                'PhD',
                'Other'
            ],
            'positions' => [
                'Travel Advisor',
                'Agency Manager',
                'Tourism Coordinator',
                'Community Manager',
                'Tour Package Designer',
                'Tour Guide',
                'Sales Executive',
                'Other'
            ]
        ]);
    }
}