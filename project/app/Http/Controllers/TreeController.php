<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Tree;

class TreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $json_string = '[
            {
                "id": 0,
                "text": "Same but with checkboxes",
                "value": "Same but with checkboxes",
                "icon": "",
                "opened": false,
                "selected": false,
                "disabled": false,
                "loading": false,
                "children": [
                {
                    "id": 1,
                    "text": "initially selected",
                    "value": "initially selected",
                    "icon": "",
                    "opened": false,
                    "selected": true,
                    "disabled": false,
                    "loading": false,
                    "children": []
                },
                {
                    "id": 2,
                    "text": "custom icon",
                    "value": "custom icon",
                    "icon": "fa fa-warning icon-state-danger",
                    "opened": false,
                    "selected": false,
                    "disabled": false,
                    "loading": false,
                    "children": []
                },
                {
                    "id": 3,
                    "text": "initially open",
                    "value": "initially open",
                    "icon": "fa fa-folder icon-state-default",
                    "opened": true,
                    "selected": false,
                    "disabled": false,
                    "loading": false,
                    "children": [
                    {
                        "id": 4,
                        "text": "Another node",
                        "value": "Another node",
                        "icon": "",
                        "opened": false,
                        "selected": false,
                        "disabled": false,
                        "loading": false,
                        "children": []
                    }
                    ]
                },
                {
                    "id": 5,
                    "text": "custom icon",
                    "value": "custom icon",
                    "icon": "fa fa-warning icon-state-warning",
                    "opened": false,
                    "selected": false,
                    "disabled": false,
                    "loading": false,
                    "children": []
                },
                {
                    "id": 6,
                    "text": "disabled node",
                    "value": "disabled node",
                    "icon": "fa fa-check icon-state-success",
                    "opened": false,
                    "selected": false,
                    "disabled": true,
                    "loading": false,
                    "children": []
                }
                ]
            },
            {
                "id": 7,
                "text": "Same but with checkboxes",
                "value": "Same but with checkboxes",
                "icon": "",
                "opened": true,
                "selected": false,
                "disabled": false,
                "loading": false,
                "children": [
                {
                    "id": 8,
                    "text": "initially selected",
                    "value": "initially selected",
                    "icon": "",
                    "opened": false,
                    "selected": true,
                    "disabled": false,
                    "loading": false,
                    "children": []
                },
                {
                    "id": 9,
                    "text": "custom icon",
                    "value": "custom icon",
                    "icon": "fa fa-warning icon-state-danger",
                    "opened": false,
                    "selected": false,
                    "disabled": false,
                    "loading": false,
                    "children": []
                },
                {
                    "id": 10,
                    "text": "initially open",
                    "value": "initially open",
                    "icon": "fa fa-folder icon-state-default",
                    "opened": true,
                    "selected": false,
                    "disabled": false,
                    "loading": false,
                    "children": [
                    {
                        "id": 11,
                        "text": "Another node",
                        "value": "Another node",
                        "icon": "",
                        "opened": false,
                        "selected": false,
                        "disabled": false,
                        "loading": false,
                        "children": []
                    }
                    ]
                },
                {
                    "id": 12,
                    "text": "custom icon",
                    "value": "custom icon",
                    "icon": "fa fa-warning icon-state-warning",
                    "opened": false,
                    "selected": false,
                    "disabled": false,
                    "loading": false,
                    "children": []
                },
                {
                    "id": 13,
                    "text": "disabled node",
                    "value": "disabled node",
                    "icon": "fa fa-check icon-state-success",
                    "opened": false,
                    "selected": false,
                    "disabled": true,
                    "loading": false,
                    "children": []
                }
                ]
            },
            {
                "id": 14,
                "text": "And wholerow selection",
                "value": "And wholerow selection",
                "icon": "",
                "opened": false,
                "selected": false,
                "disabled": false,
                "loading": false,
                "children": []
            },
            {
                "id": 24,
                "text": "newNode",
                "value": "newNode",
                "icon": "",
                "opened": false,
                "selected": false,
                "disabled": false,
                "loading": false,
                "children": []
            },
            {
                "id": 15,
                "text": "drag disabled",
                "value": "drag disabled",
                "icon": "fa fa-warning icon-state-danger",
                "opened": false,
                "selected": true,
                "disabled": false,
                "loading": false,
                "children": [],
                "dragDisabled": true
            },
            {
                "id": 16,
                "text": "drop disabled",
                "value": "drop disabled",
                "icon": "fa fa-warning icon-state-danger",
                "opened": false,
                "selected": false,
                "disabled": false,
                "loading": false,
                "children": [],
                "dropDisabled": true
            }
        ]';
        $json = json_decode($json_string);
        $tree = new Tree;
        $tree->name = 'test';

        $tree->save();

        return response()->json($json);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response($request);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tree = new Tree;
        $tree->name = 'test';

        $tree->save();
        Log::info('Showing Tree $request when store: ' . $request);
        return response($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
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
}
