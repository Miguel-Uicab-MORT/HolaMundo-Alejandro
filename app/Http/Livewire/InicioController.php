<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InicioController extends Component
{
    public $var;

    protected $listeners = ['helloWorld'];

    public function mount()
    {
        $this->var = null;
    }

    public function helloWorld()
    {
        $this->var = "Hola Mundo";
        $this->render();
    }

    public function render()
    {
        return view('livewire.inicio-controller');
    }
}
