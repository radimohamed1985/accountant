<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Currency;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('country', 100);
            $table->string('currency', 100);
            $table->string('code', 25);
            $table->string('symbol', 25);
            $table->string('thousand_separator', 10);
            $table->string('decimal_separator', 10);
            $table->integer('status')->unsigned();
            $table->nullableTimestamps();
       
        });
    
    DB::table('currencies')->insert([ 
        ["id"=>'1',"country" => "Algerie", "currency" => "Algerian dinar", "code" => "DZD", "symbol" => "د.ج", "thousand_separator" => " ", "decimal_separator" => ".", "status"=>null,"created_at" => null , "updated_at" => null ],
        ["id"=>'2', "country" => "United Arab Emirates", "currency" => "United Arab Emirates dirham", "code" => "AED", "symbol" => "د.إ", "thousand_separator" => ",", "decimal_separator" => ".", "status"=>null,"created_at" => null , "updated_at" => null ],
        [ "id"=>'3',"country" => "Uganda", "currency" => "Uganda shillings", "code" => "UGX", "symbol" => "USh", "thousand_separator" => ",", "decimal_separator" => ".", "status"=>null,"created_at" => null , "updated_at" => null ],
        [ "id"=>'4',"country" => "Tanzania", "currency" => "Tanzanian shilling", "code" => "TZS", "symbol" => "TSh", "thousand_separator" => ",", "decimal_separator" => ".", "status"=>null,"created_at" => null , "updated_at" => null ],
        [ "id"=>'5',"country" => "Angola", "currency" => "Kwanza", "code" => "AOA", "symbol" => "Kz", "thousand_separator" => ",", "decimal_separator" => ".", "status"=>null,"created_at" => null , "updated_at" => null ],
        ["id"=>'6', "country" => "Kuwait", "currency" => "Kuwaiti dinar", "code" => "KWD", "symbol" => "KD", "thousand_separator" => ",", "decimal_separator" => ".", "status"=>null,"created_at" => null , "updated_at" => null ],
        ["id"=>'7', "country" => "Bahrain", "currency" => "Bahraini dinar", "code" => "BHD", "symbol" => "BD", "thousand_separator" => ",", "decimal_separator" => ".", "status"=>null,"created_at" => null , "updated_at" => null ]
  ]);



}
    
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currencies');
    }
}
