<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Models\Reception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class EReceptionController extends Controller
{
    public function E_reception()
    {
      return view('front.e_reception');
    }

         /**
   * @throws ValidationException
   */
  public function quotecallbackSave(Request $request): RedirectResponse
  {
      $data =  $request->validate([
          'fullname' => 'required',
          'date_of_birth' => 'required',
          'passport_data' => 'required',
          'address' => 'required',
          'index' => 'required',
          'email' => 'required',
          'phone_number' => 'required',
          'question_text' => ''
     ]);

      Reception::create($data);

      return back()->with('message', 'unable to sending');

  }
}
