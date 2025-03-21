<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('category'); // استبدل 'category' باسم الحقل الذي تريد حذفه
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('category'); // استرجاع الحقل في حالة التراجع
        });
    }
};
