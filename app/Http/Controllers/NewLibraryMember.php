<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResponse;
use App\Models\User;
use App\Models\LibraryMember;
use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Response;
use App\Http\Middleware\libeary;
use App\Http\Middleware\Administrator;

class NewLibraryMember extends Controller
{
    
    public function __construct()
    {
        $this->middleware([Library::class, Administrator::class]);
    }

    /*the functioniness of the controller is the approval or concern 
    of user requests for the member. When a client fills in the form,
     it becomes a user, event user, so a request for a library member.*/

    public function index()
    {
        return user::collection();
    }

    public function create (User $user , LibrayMember $libraryMember)
    {

        if($request->has('check')){

        $this->authorize('update', $User);

        $user->create($request->only(['name', 'username', 'email']));

        return new LibraryMember($libraryMember);
        }

    }


    public function destroy(User $user)
    { 
        if($request->has('delete')) { 
        $this->authorize('delete', $user);

        $user->delete();

        return response()->noContent();
    }
}
}


