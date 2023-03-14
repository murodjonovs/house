<?php

namespace App\Http\Livewire;

use App\Models\Words;
use Livewire\Component;

class Word extends Component
{
    public $key, $word_ru, $word_uz, $word_kr, $edit=0;
    public $key_edit, $word_edit_ru, $word_edit_uz, $word_edit_kr;
    
    protected $rules = [
        'key' => 'required|unique:words,key,'
    ];
    public function render()
    {
        $words = Words::orderBy('id', 'desc')->get();
        return view('livewire.word', [
            'words'=>$words
        ]);
    }

    public function store()
    {
        $this->validate();
        
        Words::create([
            'key' => $this->key,
            'word_ru'=> $this->word_ru,
            'word_uz' => $this->word_uz,
            'word_kr' => $this->word_kr
        ]);
        // dd($this->key);
        $this->resetVariables();
    }

    function resetVariables(){
        $this->key = '';
        $this->word_ru = '';
        $this->word_uz = '';
        $this->word_kr = '';
    }

    public function edit($id)
    {
        $word = Words::find($id);
        $this->edit = $id;
        $this->key = $word->key;
        $this->word_edit_ru = $word->word_ru;
        $this->word_edit_uz = $word->word_uz;
        $this->word_edit_kr = $word->word_kr;
    }

    public function update($id)
    {
        if(Words::find($id)->key != $this->key){
            $this->validate();
        }
        Words::find($id)->update([
            'key' => $this->key,
            'word_ru' => $this->word_edit_ru,
            'word_uz' => $this->word_edit_uz,
            'word_kr' => $this->word_edit_kr
        ]);
        $this->edit = 0;
        $this->resetVariables();
    }

    public function destroy($id)
    {
        Words::find($id)->delete();
    }
}
