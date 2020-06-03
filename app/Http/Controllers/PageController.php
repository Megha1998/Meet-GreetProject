<?php

namespace App\Http\Controllers;

use App\Events;
use App\Model\Addvacancies;
use App\Resturant;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function Vacancies()
    {
        $vacancies = Addvacancies::get();
        return view('Frontend.vacancies')->with([
            'vacancies' => $vacancies
        ]);
    }
    public function Resturant()
    {
        $res = Resturant::get();
        return view('Frontend.vacancies')->with([
            'res' => $res
        ]);
    }
    public function Event()
    {
        $res = Resturant::get();
        $events = Events::get();
        return view('Frontend.event')->with([
            'events' => $events,
            'res' => $res
        ]);
    }
    public function EventForm()
    {
        return view('Frontend.eventform');

    }
    public function Form()
    {
         return view('Frontend.form');
    }
    public function About($id)
    {
        $vacancies = Addvacancies::get();
        $res = Resturant::get();
        $addvaancies = Addvacancies::where('id' , $id)->first();
        return view('Frontend.about')->with([
            'vacancies' => $vacancies,
            'addvaancies' => $addvaancies,
            'res' => $res
        ]);
    }
    public function AddRoom($id)
    {
        $res = Resturant::get();
        $addroom = Resturant::where('id' , $id)->first();
        return view('Frontend.resturant')->with([
            'res' => $res,
            'addroom' => $addroom
        ]);
    }
    public function ResForm()
    {
        $res = Resturant::get();
        return view('Frontend.resform')->with([
            'res' => $res
        ]);
    }
    public function Home()
    {
        $res = Resturant::get();
        return view('Frontend.homepage')->with([
            'res' => $res
        ]);
    }
    public function AddEvent(Request $request){
        $eve =new Events();
        $eve->event= $request->event;
        $eve->eventsdd= $request->eventsdd;
        $eve->save();
        return back();
    }
    public function AddForm(Request $request){
        $form =new Addvacancies();
        $form->designation= $request->designation;
        $form->vacancies= $request->vacancies;
        $form->save();
        return back();
    }
    public function Addres(Request $request)
    {
        $ress = new Resturant();
        $ress->resname = $request->resname;
        $ress->restext = $request->restext;
        $ress->resnumber = $request->resnumber;
        $ress->resaddress = $request->resaddress;
        $ress->save();
        return back();
    }
}
