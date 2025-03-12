<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateBannersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->string('file_desktop_url')->nullable()->after('file_desktop_id');
            $table->string('file_mobile_url')->nullable()->after('file_mobile_id');
            $table->dropColumn(['file_desktop_id', 'file_mobile_id']);
        });
    }
    
    public function down()
    {
        Schema::table('banners', function (Blueprint $table) {
            $table->dropColumn(['file_desktop_url', 'file_mobile_url']);
            $table->unsignedBigInteger('file_desktop_id')->nullable();
            $table->unsignedBigInteger('file_mobile_id')->nullable();
        });
    }
    
}
