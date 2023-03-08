<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class Show extends Component
{
    public $category;
    public $i;
    public $modalId;

    public function render()
    {
        $this->category = Category::all();
        return view('livewire.admin.category.show',['category'=>$this->category,'i'=>$this->i]);
    }
    public function remove($id)
    {
        
    }
}
