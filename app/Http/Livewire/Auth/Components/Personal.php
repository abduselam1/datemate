<?php

namespace App\Http\Livewire\Auth\Components;

use App\Models\User\JobTitle;
use App\Models\User\Language;
use App\Models\User\Religion;
use Livewire\Component;

class Personal extends Component
{
    public $religion;
    public $religions;
    public $education;
    public $employment;
    public $purpose;
    public $languages = [];
    public $languagesId = [];
    public $allLanguages;
    public $searchLanguage;

    public $jobTitles;
    public $purposes = ['Here to Date', 'Open to chat', 'Ready for a relationship'];

    public $educationLevels = ['Less than 8th grade', 'High school', 'College diploma', 'Bachelor degree', 'Masters degree', 'PHD degree',];

    protected $listeners = ['remove'=>'removeLanguage','submit'=>'submitForm'];

    protected $rules = [
        'purpose' => 'required',
        'education' => 'required',
        'employment' => 'required'
    ];



    public function removeLanguage($key){
        $new_array = [];
        foreach ($this->languages as $language) {
            if($language['id'] != $key)
                $new_array[] = $language;

        }
        foreach ($this->languagesId as $index => $value) {
            if($value == $key){
                unset($this->languagesId[$index]);
            }
        }
        $this->languages = $new_array;
        // dd($this->languages);
    }

    public function addLanguage($id){
        // dd($id);
        foreach ($this->languages as $language) {
            if($language['id'] == $id)
                return;
        }

        foreach($this->allLanguages as $language){
            if($language->id == $id){
                $this->languages[] = $language->toArray();
                // dd($this->languages);
                $this->languagesId[] = $id;
                break;
            }

        }
        // dd($id);
        // $this->languages[] = ['id'=>$id,'name'=>$name];
        $this->searchLanguage  = null;
        $this->allLanguages = Language::where('name', 'like', '%' . $this->searchLanguage . '%')->whereNotIn('id', $this->languagesId)->get();

        // dd($language);
    }

    public function updatedSearchLanguage(){
        // $new_array = [];
        // foreach ($this->unselectedLanguage as $language) {
        //     if(str_starts_with(strtolower($language->name), strtolower($this->searchLanguage)) || str_ends_with(strtolower($language->name), strtolower($this->searchLanguage))){
        //         $new_array[] = $language;
        //     }
        // }
        // $this->allLanguages = $new_array;
        // dd($this->languagesId);
        // print_r($this->languagesId);
        $this->allLanguages = Language::where('name','like','%'.$this->searchLanguage.'%')->whereNotIn('id',$this->languagesId)->get();
        // dd($this->allLanguages);
    }

    public function previous(){
        $this->emit('changePage',1);
    }

    public function submit(){
        $this->validate();
        $this->emit('changePage',3);
        // dd($this->languagesId);
    }

    public function submitForm(){
        $this->emit('submitForm',[
            'religion' => $this->religion,
            'education' => $this->education,
            'jobTitle' => $this->employment,
            'languages' => $this->languagesId,
            'purpose' => $this->purpose,
        ]);
    }

    public function mount(){
        $this->allLanguages = Language::select('id','name')->get();

        $this->religions = Religion::all();

        $this->jobTitles = JobTitle::orderBy('name')->get();
        // dd($this->allLanguages);
    }

    public function render()
    {
        return view('livewire.auth.components.personal');
    }
}
