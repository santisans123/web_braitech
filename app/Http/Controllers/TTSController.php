<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;


use Google\Cloud\TextToSpeech\V1\AudioConfig;
use Google\Cloud\TextToSpeech\V1\AudioEncoding;
use Google\Cloud\TextToSpeech\V1\SynthesisInput;
use Google\Cloud\TextToSpeech\V1\TextToSpeechClient;
use Google\Cloud\TextToSpeech\V1\VoiceSelectionParams;
use Kreait\Firebase\Contract\Database;

class TTSController extends Controller
{
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'UsersData/uoRhgJ3ClWSAXyh9QnnsCqkFjit2';
    }
    
    public function index(Request $request)
    {
        $datas = $this->database->getReference($this->tablename)->getValue();
        $sentence = '';
        foreach ($datas as $result) {
            $sentence .= $result['keyboard'] . ' ';
        }
        // dd($sentence);

        $txt=$sentence;
            $txt=htmlspecialchars($txt);
            $txt=rawurlencode($txt);
            $html=file_get_contents('https://translate.google.com/translate_tts?ie=UTF-8&client=gtx&q='.$txt.'&tl=id-ID');
            $player="<audio controls='controls' autoplay style='margin-top: -60px'><source src='data:audio/mpeg;base64,".base64_encode($html)."'></audio>";
            echo $player;
            return view('teks',  [
                'results' => $datas
            ]);
    }
}
