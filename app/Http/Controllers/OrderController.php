<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    // Показать форму заказа
    public function showOrderForm()
    {
        return view('order.form');
    }

    // Обработка отправки формы заказа
    public function submitOrder(Request $request)
    {
        // Проверка аутентификации пользователя
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Для оформления заказа необходимо войти в систему.');
        }

        // Валидация данных
        $validated = $request->validate([
            'solution_name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
        ]);

        // Создание заказа
        Order::create([
            'user_id' => Auth::id(), // Используем Auth::id() вместо auth()->user()->id
            'solution_name' => $validated['solution_name'],
            'description' => $validated['description'],
        ]);

        // Редирект с сообщением об успехе
        return redirect()->back()->with('success', 'Заказ успешно отправлен!');
    }
}
