<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('form', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $form = new Form([
                "name" => $request->get('name'),
                "surname" => $request->get('surname'),
                "file_path" => $request->file->hashName(),
                "email" => $request->get('email')
            ]);
            $form->save(); // Finally, save the record.
        }

        return view('forms.create');

    }
}
