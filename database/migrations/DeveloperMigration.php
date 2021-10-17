<?php declare(strict_types=1);


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class DeveloperMigration extends Migration
{

    public function up()
    {
        Schema::create("developers", function(Blueprint $table){
            $table->id();
            $table->string("nome");
            $table->char("sexo");
            $table->int("idade");
            $table->text("hobby");
            $table->date("datanascimento");
        });
    }

    public function down()
    {
        Schema::drop("developers");
    }
}