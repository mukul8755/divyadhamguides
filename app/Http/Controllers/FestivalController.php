<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use Illuminate\Http\Request;

class FestivalController extends Controller
{
    public function activeFestival()
    {
        $festival = Festival::where('is_active', 1)
            ->latest('date')
            ->first();

        if (!$festival) {
            return response()->json(null);
        }

        return response()->json([
            'title' => $festival->title,
            'description' => $festival->description,
            'image' => $festival->image ? asset('storage/' . $festival->image) : null,
            'date' => $festival->festival_date,
        ]);
    }
}
