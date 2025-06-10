<?php

use App\Models\company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/company', function () {
    $companies = company::all();

    return view('company.index',compact('companies'));
});

Route::get('/company/create', function () {
    return view('company.create');
});

Route::post('/update-company/{id}', function (Request $request, $id) {
    $company = company::find($id);
    $company->name = $request->name;
    $company->email = $request->email;
    $company->address = $request->address;
    $file = $request->logo;
    if ($file) {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('photos', $fileName);
        $company->logo = "photos/".$fileName;
    }
    $company->save();
    return redirect()->back();
});
 Route::delete('/delete-company/{id}', function ($id) {

    company::find($id)->delete();
    return redirect('/company');

});

 Route::get('/edit-company/{id}', function ($id) {
   $company = company::find($id);
   return view('company.edit', compact('company'));
});



Route::post('/save-company', function (Request $request) {
    $company = new company;
    $company->name = $request->name;
    $company->email = $request->email;
    $company->address = $request->address;
    $file = $request->logo;
    if ($file) {
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->move('photos', $fileName);
        $company->logo = "photos/".$fileName;
    }
    $company->save();
    return redirect('/company');
});
// Removed duplicate '/update-company' route definition

