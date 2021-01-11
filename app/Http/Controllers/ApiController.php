<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Popup;

class ApiController extends Controller
{
    public function createPopup(Request $request) {
        $popup = new Popup;
        $popup->name = $request->name;
        $popup->bgColor = $request->bgColor;
        $popup->title = $request->title;
        $popup->infoText = $request->infoText;
        $popup->fieldName = $request->fieldName;
        $popup->buttonText = $request->buttonText;
        $popup->containerWidth = $request->containerWidth;
        $popup->containerHeight = $request->containerHeight;
        $popup->items = $request->items;
        $popup->save();

        return response()->json([
            "message" => "popup record created"
        ], 201);
    }

    public function getPopup($id) {
        if (Popup::where('id', $id)->exists()) {
            $popup = Popup::where('id', $id)->get()->toJson(JSON_PRETTY_PRINT);
            return response($popup, 200);
         } else {
            return response()->json([
              "message" => "popup not found"
            ], 404);
        }
    }

    public function updatePopup(Request $request, $id) {
        if (Popup::where('id', $id)->exists()) {
            $popup = Popup::find($id);

            // $popup->name = is_null($request->name) ? $popup->name : $request->name;
            // $popup->bgColor = is_null($request->bgColor) ? $popup->bgColor : $request->bgColor;
            // $popup->title = is_null($request->title) ? $popup->title : $request->title;
            // $popup->infoText = is_null($request->infoText) ? $popup->infoText : $request->infoText;
            // $popup->fieldName = is_null($request->fieldName) ? $popup->fieldName : $request->fieldName;
            // $popup->buttonText = is_null($request->buttonText) ? $popup->buttonText : $request->buttonText;
            // $popup->items = is_null($request->items) ? $popup->items : $request->items;

            $popup->name = $request->name;
            $popup->bgColor = $request->bgColor;
            $popup->title = $request->title;
            $popup->infoText = $request->infoText;
            $popup->fieldName = $request->fieldName;
            $popup->buttonText = $request->buttonText;
            $popup->containerWidth = $request->containerWidth;
            $popup->containerHeight = $request->containerHeight;
            $popup->items = $request->items;

            $popup->save();

            return response()->json([
                "message" => "records updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "Popup not found"
            ], 404);

        }
    }
}
