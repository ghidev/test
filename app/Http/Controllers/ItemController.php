<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

/**
 * In this class you should implement the methods listed below
 * Methods should respond in JSON format including the status code for each situation
 * It is strongly recommended to validate the request before
 *
 *
 * Class ItemController
 * @package App\Http\Controllers
 */
class ItemController extends Controller
{
    /**
     * This method returns a complete list of Items in storage
     * sorted from the oldest to the newest
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        // TODO
    }


    /**
     * Store a newly created Item in storage and return the stored Item in JSON format
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // TODO
    }

    /**
     * Update the specified Item in storage and return the updated Item in JSON format
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // TODO
    }

    /**
     * Remove the specified Item from storage
     * and returns a 200 code in case of success or 400 in case of error (both in JSON format)
     *
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        // TODO
    }
}
