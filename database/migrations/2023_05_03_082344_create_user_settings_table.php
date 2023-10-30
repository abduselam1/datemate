<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->boolean('notification_paused');
            $table->json('notifications')->default(json_encode(['message' => [
                    'push' => true,
                    'email' => false
                ],
                'matchs' => [
                    'push' => true,
                    'email' => false
                ],
                'liked' => [
                    'push' => true,
                    'email' => false
                ],
                'visitors' => [
                    'push' => true,
                    'email' => false
                ],
                'other' => [
                    'push' => true,
                    'email' => false
                ],
                
            ]));
                // '{message:{push:true,email:false},matchs:{push:true,email:false},liked:{push:true,email:false},visitors:{push:true,email:false},other:{push:true,email:false},}');
            $table->json('privacy')->default(
                json_encode([
                    'view_profile' => "Only members",
                    'share_profile' => false,
                    'show_location' => true,
                    'online_status' => true,
                    'search_by_email' => false,
                    'visit_profile_only_by_liked' => false,
                    'show_identity' => true,
                    'hide_presence' => true,
                    'dont_show_as_visitor' => false,
                    'hide_premium' => false
                ])
            );
                // '{view_profile:"Only members",share_profile:false,show_location:true,online_status:true,search_by_email:false,visit_profile_only_by_liked:false,show_identity:true,hide_presence:false,dont_show_as_visitor:false,hide_premium:false}');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_settings');
    }
};
