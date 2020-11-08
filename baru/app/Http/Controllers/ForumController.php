<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Forum;
class ForumController extends Controller
{
    public function index(){
        $forum = Forum::paginate(10);
        return view('forum.index', compact(['forum']));
    }
}
