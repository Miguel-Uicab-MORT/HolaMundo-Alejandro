<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HelloController extends Component
{

    public function start()
    {
        $this->emit('helloWorld');
    }
    
    public function render()
    {
        return view('livewire.hello-controller');
    }
}
