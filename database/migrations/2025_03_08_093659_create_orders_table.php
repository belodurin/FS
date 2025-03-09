<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Запуск миграции.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Уникальный идентификатор заказа
            $table->unsignedBigInteger('user_id'); // ID пользователя, который создал заказ
            $table->string('solution_name'); // Название решения
            $table->text('description'); // Описание заказа
            $table->timestamps(); // Поля created_at и updated_at

            // Внешний ключ для связи с таблицей users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Откат миграции.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
