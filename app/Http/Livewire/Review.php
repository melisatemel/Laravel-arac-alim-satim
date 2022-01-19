<?php

namespace App\Http\Livewire;
use App\Models\Arac;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Review extends Component
{
    public $record, $subject,$review,$arac_id;

    public function mount($id){
        $this->record = Arac::findOrFail($id);
        $this->arac_id = $this->record->id;
    }
    public function render()
    {
        return view('livewire.review');
    }

    private function resetInput() {
        $this->subject=null;
        $this->review=null;
        $this->arac_id=null;
        $this->IP=null;
    }

    public function store(){
        $this->validate([
            'subject'=>'required|min:5',
            'review'=>'required|min:10',
        ]);

        \App\Models\Review::create([
            'arac_id' => $this->arac_id,
            'user_id' => Auth::id(),
            'IP' => $_SERVER['REMOTE_ADDR'],
            'subject' => $this->subject,
            'review' => $this->review

        ]);

        session()->flash('message', 'Review Send Succesfully.');
        $this->resetInput();
    }
}