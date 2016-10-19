<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDevelopAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developadmin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('account', '50');
            $table->string('password', '100');
            $table->string('nowLoginIp', '50')->default('0.0.0.0');
            $table->enum('status', ['normal', 'lock'])->default('normal');
            $table->dateTime('login_time')->nullable();
            $table->rememberToken();
        });

        //create default admin user
        DB::table('developadmin')->insert([
            'account' => 'chiuko',
            'password' => '$2y$10$fwOL9OLoj87LozLBkjFhO.Ug9T0.HSwTCjuctqKrrfwFz2NuCV92O', //password
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('developAdmin');
    }
}
