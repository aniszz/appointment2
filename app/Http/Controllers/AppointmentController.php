<?php
   
namespace App\Http\Controllers;
use App\Model\Appointments;
use App\Model\Owners;
use App\Model\Others;
use Illuminate\Http\Request;
//use App\Http\Requests\StoreRequest;



class AppointmentController extends Controller
{
    public function appointments(){
        $appointments = Appointments::all();
        //return view('appointments.index', compact('appointments'));
        return view('appointments.index', $appointments);
    }   
    /**
     * Display a listing of the source
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('appointments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appointments.create');
    }
    /**
     * Store a newly created resource in storage
     * Store a newly created resource in storage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */ 
    public function store(Request $request)
    {
        $owners = Owners::create($request->all());
        $others = Others::create($request->all());
        $appointments = Appointments::create($request->all());


        //validate
        // $this->validate($request, [
        //     'user_name' => ['required', 'string', 'min:3', 'max:255'],
        //     'user_email' => ['required', 'string', 'email', 'max:255', 'unique:owners'],
        //     'c_name' => ['required', 'string', 'min:3', 'max:255'],
        //     'c_email' => ['required', 'string', 'email', 'max:255', 'unique:others'],
        //     'subject' => ['required', 'string', 'min:3', 'max:255'],
        //     'date' => ['required', 'date'],
        //     'time' => ['required', 'string'],
        //  ]);
        //  //$data = $request->only('user_email', 'user_name', 'c_name', 'c_email', 'subject', 'time');

        // //store
        // $appointments = new Appointments();
        // $appointments->subject = $request->input('subject');
        // $appointments->date = $request->input('date');
        // $appointments->time = $request->input('time');
        // $appointments->location = $request->input('location');
        // $appointments->save();


        // $owners = new Owners();
        // $owners->user_name = $request->input('user_name');
        // $owners->user_email = $request->input('user_email');
        // $owners->user_company = $request->input('user_company');
        // $owners->user_mobileNo = $request->input('user_mobileNo');
        // $owners->save();


        // $others = new Others();
        // $others->c_name = $request->input('c_name');
        // $others->c_company = $request->input('c_company');
        // $others->c_mobileNo = $request->input('c_mobileNo');
        // $others->c_email = $request->input('c_email');
        // $others->save();

        // $user = User::findOrFail($a_id);
        // $user->appointments()->save($appointments);
        // $user->owners()->save($owners);
        // $user->others()->save($others);


        //redirect
        // return Redirect::to('/');
        return redirect()->route('appointments.index');
    }
    /**
     * Display the specified resources
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        return view('appointments.show'); 
    }
    /**
     * Show the form for editing the specified resource
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /*public function store(StoreRequest $storeRequest)
        {
            $form = $storeRequest->all();

            Appointments::create([
                'subject' => $form['subject'],
                'date' => $form['date'],
                'time' => $form['time'],
                'location' => $form['location']
            ]);

            Owners::create([
                'user_name' => $form['user_name'],
                'user_company' => $form['user_company'],
                'user_mobileNo' => $form['user_mobileNo'],
                'user_email' => $form['user_email']
            ]);

            Others::create([
                'c_name' => $form['c_name'],
                'c_company' => $form['c_company'],
                'c_mobileNo' => $form['c_mobileNo'],
                'c_email' => $form['c_email']
            ]);

            return redirect()->route('appointments.show', compact(['appointments', 'owners', 'others']));

        }*/
}