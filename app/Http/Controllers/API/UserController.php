<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{

    public function __construct() {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index()
    {
        $users = User::all();
        return response()->json($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $this->validate( $request,
            [
                'name'      => ['required'],
                'sexe'      => ['required', 'max:1'],
                'email'     => ['required', 'email'],
                'birthday'  => ['required', 'date'],
                'password'  => ['required', 'min:8'],
            ] );
        if ($request->birthday) { $data['birthday'] = Carbon::parse($request->birthday); }
        if ($request->password) { $data['password'] = password_hash($request->password, PASSWORD_DEFAULT); }

        $user = User::query()->create($data);
        return response()->json($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return JsonResponse
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param User $user
     * @return JsonResponse
     */
    public function update(Request $request, User $user)
    {
        $data = $request->all();
        $this->validate( $request,
            [
                'password'      => 'min:8',
                'birthday'      => 'date',
            ] );
        if ($request->birthday) { $data['birthday'] = Carbon::parse($request->birthday); }
        if ($request->password) { $data['password'] = password_hash($request->password, PASSWORD_DEFAULT); }

        $user->update($data);
        return response()->json($user, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return JsonResponse
     */
    public function destroy(User $user)
    {
        $user->delete();
        return response()->json();
    }
}
