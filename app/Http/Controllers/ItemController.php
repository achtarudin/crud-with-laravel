<?php

namespace App\Http\Controllers;

use App\Item;
use App\Skill;
use App\Http\Requests\ItemStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ItemController extends Controller
{

    public function index()
    {
        $data = Item::all();
        $data = Item::paginate(10);
        return view('item.index')->with('data', $data);
    }

    public function create()
    {
        return view('item.createOrEdit');
    }

    public function store(ItemStoreRequest $request)
    {
        $item = new Item();
        $request->validated();

        $item->name = $request->name;
        if ($request->hasFile('image')) {
            $item->filename = $request->file('image')->store('image');
        } 
        else {
            $item->filename = null;
        }

        $item->phone =  $request->phone;
        $item->email =  $request->email;
        $item->github_account =  $request->get('github_account');
        $item->save();
        foreach($request->skills as $key => $value) {
            if( $value !== null){
                $skill = new Skill();
                $skill->skill = $value;
                $item->skills()->save($skill);
            }
        }
        return redirect()->route('item.show', $item->slug);
    }

    public function show(Item $item)
    {
        return view('item.show')->with('data', $item);
    }

    public function edit(Item $item)
    {
        $items = Item::find($item->id);
        $skills = $items->skills;
        $data = [];
        foreach($skills as $datas){
            array_push($data, $datas);
        }
        return view('item.createOrEdit')
            ->with('item', $items)
            ->with('skills', $skills);
    }

    public function update(Request $request, Item $item)
    {
        $data =  Skill::where('item_id', $item->id);
        $data->delete();
        $item = Item::find($item->id); 
        if ($request->hasFile('image')){
            Storage::delete($item->filename);
            $item->filename = $request->file('image')->store('image');
        }
        else{
            $item->filename = $item->filename;
        }
        $item->name = $request->name;
        $item->phone =  $request->phone;
        $item->email =  $request->email;
        $item->github_account =  $request->get('github_account');
        $item->slug = str_slug($request->name);
        $item->save();
        // dd($request->skills);
        if($request->skills !== null){
            foreach ($request->skills as $key => $value) {
                if($value !== null){
                    $skill = new Skill();
                    $skill->skill = $value;
                    $item->skills()->save($skill);
                }
            }
        }
        return redirect()->route('item.show', $item->slug);
    }

    public function destroy(Item $item)
    {
        $data =  Skill::where('item_id', $item->id);
        $data->delete();
        $item = Item::find($item->id); 
        Storage::delete($item->filename);
        $item->delete();
        return redirect()->route('item.index');

    }
}
