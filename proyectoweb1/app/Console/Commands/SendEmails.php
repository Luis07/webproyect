<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;
use Mail;
use Cache;
class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emails:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Enviar correos y actualizar bd';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $value = Cache::get('user');
        $data=[];
        $correos= DB::table('emails')->select('id','destino','asunto','contenido')->where('email',$value)->where('salida','1')->get();
        foreach ($correos as $correos) {
        Mail::later(5,'emails', $data, function ($message) use ($correos){
        $message->subject($correos->asunto);
        $message->to($correos->destino);
        }); 
        DB::table('emails')
            ->where('id', $id)
            ->update(['enviado' =>'1','salida' =>'0']);
    }  
      }
}
