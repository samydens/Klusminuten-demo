<?php

namespace App\Http\Livewire\Admin\Client;

use Livewire\Component;
use App\Models\Client;

class AdminClientDelete extends Component
{
    public $client;
    public $confirm = False;

    public function submit()
    {
        // if ($this->client->jobs()->exists()) {
            foreach ($this->client->jobs as $job) {
                $this->client->jobs()->detach($job->id);
            }
        // }

        // dd($this->client->jobs);

        $this->client->delete();

        session()->flash('message', 'Klant verwijderd!');

        return redirect()->to('/admin?slide=2');
    }

    public function render()
    {
        return view('livewire.admin.client.admin-client-delete');
    }
}
