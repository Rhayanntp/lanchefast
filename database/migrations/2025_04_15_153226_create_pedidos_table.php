<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->dateTime('data_hora')->nullable(false);
            $table->decimal('valor_total', 10, 2)->nullable(false);
            $table->decimal('valor_com_desconto', 10, 2)->nullable(false);
            $table->enum('forma_pagamento', ['cartao_credito', 'cartao_debito', 'pix', 'dinheiro']);
            $table->enum('status', ['em_aberto', 'aguardando_preparo', 'em_preparo', 'em_rota', 'entregue']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
