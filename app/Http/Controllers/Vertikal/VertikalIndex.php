<?php

namespace App\Http\Controllers\Vertikal;

use App\Models\Vertikal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VertikalIndex extends Controller
{
    protected $VertikalModel;

    public function __construct()
    {
        $this->VertikalModel = new Vertikal();
    }

    public function viewVertikalIndex(Request $request)
    {
        if ($request->has('search')) {
            $data['listVertikal'] = Vertikal::where('nama', 'LIKE', '%' . $request->search . '%')
                ->orWhere('id', 'LIKE', '%' . $request->search . '%')
                ->paginate(5);
        } else {
            $data['listVertikal'] = Vertikal::where('status', '1')
                ->orderBY('id', 'desc')
                ->paginate(5);
        }
        return view('cms.vertikal.index', $data);
    }
}
