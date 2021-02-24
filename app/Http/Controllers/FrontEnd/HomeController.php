<?php



namespace App\Http\Controllers\FrontEnd;

use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use DB;
use Hash;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        return view('frontend.pages.home',compact('user',$user));
    }

    public function test(){
    return view('frontend.pages.test');

    }
    public function tasks(Request $request){
            $tasks = $request->user()->tasks()->paginate(3);

    return view('frontend.pages.tasks',['tasks' => $tasks]);

    }


 public function fqa()

    {

       $title ="frequently asked questions";
        return view('frontend.pages.fqa',compact('title'));
    }

    public function store(Request $request)
{
    $this->validate($request, [
        'name' => 'required|max:255',
    ]);

    $request->user()->tasks()->create([
        'name' => $request->name,
        'description' => $request->description
    ]);



  //dd($prod);
    $request->session()->flash('message', 'Product successfully added!');

    return back();
}

public function show($id)
{

    $task = Task::findOrFail($id);
    return view('frontend.pages.show')->withTask($task);
}


   public function edit_task($id) {


        $task = DB::table('tasks') -> find($id);
        return view('frontend.pages.edit_task', ['task' => $task]);
    }
    
    
    public function update(Request $request,$id) {


   /* here is coding for update picture*/

   $task = Task::findOrFail($id);

    $this->validate($request, [
        'name' => 'required',
        'description' => 'required'
    ]);

    $input = $request->all();

    $task->fill($input)->save();

    Session::flash('flash_message', 'Task successfully added!');

    return redirect()->back();   
              
    }
public function destroy(Request $request, Task $task)
{
     $this->authorize('destroy', $task);
       $task->delete();
       return back();

}



}
