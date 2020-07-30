<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Producer;

class ProducerController extends Controller
{
    public function index(){

	    $producers = Producer::query()->orderBy('created_at', 'desc')->paginate(3);
	    return view('admin.producers.index',['producers'=>$producers]);
	}
	public function search(Request $request){
		$producers = Producer::where('name', 'like', "%". $request->txtsearch ."%")
		->orWhere('phone', 'like',"%" . $request->txtsearch."%")
		->orWhere('email', 'like',"%" . $request->txtsearch ."%")
		->orderBy('created_at', 'desc')->paginate(3);
		return view('admin.producers.index', compact('producers'));
	}
	public function create(){
		return view('admin.producers.create');	
	}

	public function store(Request $request){
		//check dieu kien nhap
		$rules = ['name'  => 'required|max:191',
				'phone' => 'required|max:191', 
				'email' => 'required|max:191',
                'active' => 'numeric',
                'image' => 'image|max:2048'];

                
		$request->validate($rules);

		$producers = new Producer;

		$file = $request->file('image');

		$image = time() . "-". $file->getClientOriginalName();

		$file->storeAs('public/producer', $image);

		$producers->fill($request->all());

		$producers->image = $image;

		$producers->save();
		return redirect('admin/producer')->with('success', "Thêm mới thành công");
	}
	public function edit($id){
		$producers = Producer::findOrFail($id);
		return view('admin.producers.edit', ['producers'=>$producers]);
	}

	public function update(Request $request, $id){

		$rules = ['name' => 'required|max:191',
                    'phone' => 'required|max:191',
                    
                    'email' => 'required|max:191',
                    'image' => 'image|max:2048',
                    'active' => 'numeric',
                    ];
        $request->validate($rules);
        $producers = Producer::findOrFail($id);
        $file = $request->file('image');
        $image = time()."-".$file->getClientOriginalName();
        $file->storeAs('/public/producer', $image);
        $producers->fill($request->all());
        $producers->image=$image;
        $producers->save();
        return redirect('admin/producer')->with('success', 'Cập nhập thành công');            
	}

	public function destroy($id){
		$producers = Producer::findOrFail($id);
		$producers->delete();
		return redirect('admin/producer')->with('success', "Xóa thành công");
	}



}
