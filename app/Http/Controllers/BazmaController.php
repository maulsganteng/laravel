<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BazmaController extends Controller
{
    public function responseFunction()
    {
        return response("ini adalah bentuk response");
    }
    public function responseHeader()
    {
        $bodyResponse = [
            'name' => 'maulana',
            'scholl' => 'smk ti bazma'
        ];
        return response(json_encode($bodyResponse), 200)
            ->header('Comtent-Type', 'Application/Json')
            ->withHeaders([
                'App' => 'Maulana fikri',
                'classes' => "XI",
                'Web' => 'larevel'
            ]);
    }

    public function encryptData()
    {
        $encrypt = encrypt("ini adalah enkripsi");
        $decrypt = decrypt($encrypt);
        dd($encrypt . $decrypt);
    }
    public function redirectTo()
    {
        return "redirect To";
    }
    public function redirectFrom()
    {
        return redirect("/redirect/to");
    }
    public function redirectToNamedRoute()
    {
        return "redirect to with named route";
    }
    public function redirectFromNamedRoute()
    {
        return redirect(route("redirect.to"));
    }
}
