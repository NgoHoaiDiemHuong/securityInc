<?php
namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;

use App\Customer;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Database\Eloquent\Collection;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customers=Customer::all()->paginate(10);;
        $customers = Customer::paginate(10);
        // $customers->setBaseUrl('securityInc/public/url');
        // $customers = DB::table('customers')->paginate(10);
        //         // $users = User::All();       
        // // return View::make('users.index',compact('users'));
        return view('admin.customer.index',compact('customers'));
      // return view('admin.customer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.customer.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = new Customer;

        $customer->name = $request->name;
        $customer->birthday = $request->birthday;
        $customer->identity_card_number = $request->identity_card_number;
        $customer->company = $request->company;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->description =  $request->description;
        $customer->address = $request->address;

        $customer->save();
        return redirect("admin/customer");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $customer=Customer::find($id);
         return view('admin.customer.edit',['customer'=>$customer]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer=Customer::find($id);
        
        return view('admin.customer.edit',['customer' =>$customer]);

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
    // public function search(){
    //     $keywords=Input::get('keywords');
    //     $customer=Customer::All();
    //     $searchCustomers= new \Illuminate\Database\Eloquent\Collection();
    //     foreach ($customers as $c) {
    //        if(Str::contains(Str::lower($c->name), Str::lower($keywords),Str::lower($c->phone_number)))
    //             $searchCustomers->add($c);
    //     }
    //     return view('search')->with('searchCustomers',$searchCustomers);
    // }

    //search
    public function search() {

    $q = Input::get('keywords');

    $searchTerms = explode(' ', $q);

    $query = DB::table('customers');
    

    foreach($searchTerms as $term)
    {
        $query->where('name', 'LIKE', '%'. $term .'%')
                ->orWhere('email', 'LIKE', '%'. $term .'%');
    }

    $results = $query->get();

    return view('admin.customer.index',compact('results'));
    
    }

}
