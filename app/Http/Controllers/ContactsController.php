<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Contact;

class ContactsController extends Controller
{
    public function index() {

        $data = $this->propstack_api_contacts();

        return view('contacts.index', [
            'contacts' => $data,
        ]);
    }
    
    private function propstack_api_contacts() {
        $response = Http::withHeaders([
            'X-API-KEY' => env('PROPSTACK_TOKEN'),
        ])->get('https://api.propstack.de/v1/contacts');
    
        return json_decode($response->body());

    }
}
