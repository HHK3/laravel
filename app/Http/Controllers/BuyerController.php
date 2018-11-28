<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuyerController extends Controller
{
    public function buyer()
    {
        $buyer = new \App\Buyer();
        $buyer->firstname = 'Joel';
        $buyer->middlename = '';
        $buyer->lastname = 'Lakhai';
        $buyer->email = 'joeltilon@live.nl';
        $buyer->birthdate = '2000-03-09';
        $buyer->website = 'http://hoohahkong.nl';

        $buyer->save();

        return 'OK bewaard!';

    }
}
