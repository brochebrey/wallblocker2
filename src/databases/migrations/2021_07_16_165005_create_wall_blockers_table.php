<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Piseth\WallBlocker\Models\WallBlocker;
use Illuminate\Support\Facades\Hash;

class CreateWallBlockersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbwall_blockers', function (Blueprint $table) {
            $table->id();
            $table->string('secret_key');
            $table->timestamps();
        });

        $wb = new WallBlocker();
        $wb->secret_key = Hash::make('secret');
        $wb->save();

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbwall_blockers');
    }
}
