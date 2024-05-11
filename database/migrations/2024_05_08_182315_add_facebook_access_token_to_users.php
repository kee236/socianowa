<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFacebookAccessTokenToFacebookPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('facebook_pages', function (Blueprint $table) {
            $table->string('facebook_access_token')->nullable()->after('page_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('facebook_pages', function (Blueprint $table) {
            $table->dropColumn('facebook_access_token');
        });
    }
}
