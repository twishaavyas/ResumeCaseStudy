<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Resume;
use View;
use Session;
use Redirect;
use Illuminate\Support\Facades\Input;

class ResumeController extends Controller
{
    public function index()
	{
		$resumes = Resume::all();
		return View::make('resume.index')
			->with('resumes', $resumes);			
	}

	public function create()
	{
		// load the create form (app/views/nerds/create.blade.php)
		return View::make('resume.create');
	}

	public function store()
	{
		$rules = array(
			'name'       => 'required',
			'email'      => 'required|email',
			'qualification' => 'required',
			'resume'	=> 'required',
			'hobbies' => 'required',
		);
		$validator = Validator::make(Input::all(), $rules);

			$resume = new Resume;
			$resume->name = Input::get('name');
			$resume->company = Input::get('company');
			$resume->email = Input::get('email');
			$resume->qualification = Input::get('qualification');
			$resume->hobbies = Input::get('hobbies');
			$file = Input::file('resume');
			if (is_null($file)){
				Session::flash('message', 'There is an error, upload file again!'); 
				return Redirect::to('resume/create');
			}
			else{
				$size = ($file->getSize());
				$extension = $file->getClientOriginalExtension();
				$filename =  $file->getClientOriginalName();
			
				if($size <= 5000000 and ($extension == 'pdf' or $extension =='doc' or $extension == 'docx') and ( (strpos($filename, ' ') == 0)) )
				{
					dd($size, $extension);
					$destinationPath = public_path() .'/uploads/';
					$file->move($destinationPath, $filename);
					$resume->resume = $filename;
					$resume->save();
					Session::flash('message', 'Successfully created resume!');
					return Redirect::to('resume');
				}
				else
				{
					Session::flash('message', 'Invalid file name, size or extension!'); 
					return Redirect::to('resume/create');
				}
			}
	}

	
	public function show($id)
	{
		$resume = Resume::find($id);
		return View::make('resume.show')
			->with('resume', $resume);
	}
	
	public function edit($id)
	{
		$resume = Resume::find($id);
		return View::make('resume.edit')
			->with('resume', $resume);
	}
	public function update($id)
	{
		$rules = array(
			'name'       => 'required',
			'email'      => 'required|email',
		);
		$validator = Validator::make(Input::all(), $rules);

			$resume = Resume::find($id);
			$resume->name = Input::get('name');
			$resume->company = Input::get('company');
			$resume->email = Input::get('email');
			$resume->qualification = Input::get('qualification');
			$resume->hobbies = Input::get('hobbies');
			$resume->resume = Input::get('resume');
			$resume->save();
			Session::flash('message', 'Successfully updated resume!');
			return Redirect::to('resume');
		
	}

	public function destroy($id)
	{
		$resume = Resume::find($id);
		$resume->delete();
		Session::flash('message', 'Successfully deleted the resume!');
		return Redirect::to('resume');
	}


}
