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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('religion_id')->nullable()->constrained();
            $table->foreignId('mood_id')->nullable()->constrained();
            $table->boolean('sex'); //1 for male 0 for female
            $table->boolean('interested_sex'); // the same as the sex
            $table->date('dob');
            $table->string('purpose');
            $table->string('job_title')->nullable();
            $table->string('company_name')->nullable();
            $table->string('school')->nullable();
            $table->string('bio');
            $table->json('other');
            $table->double('height')->nullable();
            $table->string('relationship')->null;
            $table->softDeletes();
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
        Schema::dropIfExists('user_infos');
    }
};
