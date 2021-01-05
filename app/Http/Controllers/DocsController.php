<?php

namespace App\Http\Controllers;

use App\Models\Documentation;
use Illuminate\Http\Request;

class DocsController extends Controller
{
    private const DEFAULT_PAGE = 'table-view';
    private Documentation $documentation;

    public function __construct(Documentation $documentation)
    {
        $this->documentation = $documentation;
    }

    public function show($page = null)
    {
        if (!$page) {
            return redirect()->route('page', self::DEFAULT_PAGE);
        }

        if (!$this->documentation->exists($page)) {
            abort(404);
        }

        $page = json_decode($this->documentation->get($page));

        return view('docs', compact('page'));
    }
}
