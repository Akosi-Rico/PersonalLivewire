<?php

namespace App\Http\Livewire\Study;

use Livewire\Component;
use App\Services\Model\StudentService;
use App\Models\Study\Student;
class HomeComponent extends Component
{
    public $firstName, $middleName, $lastName, $studentId;

    public function render()
    {
        return view('livewire.study.home-component')->layout("layout.app");
    }

    public function mount($studentId = null, StudentService $service, Student $student) 
    {
        $this->studentId = $studentId;
        $service->show($this, $student);
    }

    public function submit(StudentService $service, Student $student)
    {
        if (!empty($this->studentId)) {
            $response = $service->update($this, $student);
            return session()->flash("message", json_decode(json_encode($response, true))->original->message);
        }

        $response = $service->store($this, $student);
        return session()->flash("message", json_decode(json_encode($response, true))->original->message);
    }
}
