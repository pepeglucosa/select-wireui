<?php

namespace App\Livewire;

use App\View\Components\Layouts\Documentation;
use Livewire\Component;

class Select extends Component
{

    public $asyncSearchUser = [1];

    public $asyncSearchRelator = null;

    public $model = null;

    public $modelMultiple = [];
    
    public function submitForm()
        {
            // $this->asyncSearchUser ahora contiene la lista de IDs de los usuarios seleccionados
            $selectedUserIds = $this->asyncSearchUser;

            // Procesa los IDs seleccionados según tu lógica de negocio
            // Por ejemplo, puedes guardarlos en la base de datos:
            dd($selectedUserIds);
            foreach ($selectedUserIds as $userId) {
                // Guarda la asociación con el usuario en la base de datos
            }

            // Muestra un mensaje de éxito o realiza otras acciones
        }
    public function render()
    {
        
        return view('livewire.select');
    }
}