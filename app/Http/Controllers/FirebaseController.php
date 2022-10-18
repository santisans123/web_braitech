<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Kreait\Firebase\Contract\Database;
use App\Library\VoiceRSS;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FirebaseController extends Controller
{
    protected $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'UsersData/uoRhgJ3ClWSAXyh9QnnsCqkFjit2';
    }

    public function index()
    {
        $data = $this->database->getReference($this->tablename)->getValue();
        return view('teks', [
            'results' => $data
        ]);
        // dd($data);

    }

    public function createPDF()
    {
        // retreive all records from db
        // $data = $this->database->getReference($this->tablename)->getValue();
        // share data to view
        // view()->share('results',$data);
        // $data = [
        //     'title' => 'Welcome to Tutsmake.com',
        //     'date' => date('m/d/Y')
        // ];
        // $pdf = PDF::loadView('teks', $data);
        // // download PDF file with download method
        // return $pdf->download('pdf_file.pdf');

        $data = $this->database->getReference($this->tablename)->getValue();

        $pdf = PDF::loadView('generate_pdf', [
            'results' => $data
        ]);

        return $pdf->download('BraitechPDF.pdf');
    }

    public function TextToSpeechConvert(Request $request)
   	{	
		try {		
			
			$tts = new VoiceRSS;
			$voice = $tts->speech([
			    'key' => env('VOICE_RSS_API_KEY'),
			    'hl' =>  $request->lan,
			    'src' => $request->text,
			    'r' => '0',
			    'c' => 'mp3',
			    'f' => '44khz_16bit_stereo',
			    'ssml' => 'false',
			    'b64' => 'false'
			]);	
				
			$filename = Str::uuid().'.mp3';
			if( empty($voice["error"]) ) {		

				$rawData = $voice["response"];	
				
				if (!File::exists(storage_path('app/public/speeches')))
				{
					Storage::makeDirectory(public_path('storage/speeches'));
				}

				Storage::disk('speeches')->put($filename, $rawData);
				$speechFilelink =  asset('storage/speeches/'.$filename);							   		                 
			   	$urls["play-url"] = $speechFilelink;		   	
			   	$urls["download-file"] = $filename;			   
			    $data = array('status' => 200, 'responseText' => $urls);
	            return response()->json($data);		
			}

	   		$data = array('status' => 400, 'responseText' => "Please try again!");
            return response()->json($data);     

		} 
		catch (SitemapParserException $e) {
		    $data = array('status' => 400, 'responseText' => $e->getMessage());
            return response()->json($data);
		}                     
   	}
}
