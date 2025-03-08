@extends('layout.app')

@section('title', 'Новости в сфере автоматизации')

@section('content')
<div class="container">
    <h1 style="color: black">Новости в мире автоматизации</h1>
        <div class="container1" style="color: black">
            <h2 class="border3">
                <a href="/shownews.php">Новые роботы с ИИ</a>
                <p><small> Андроид-робот, разработанный компанией 1X. Может убирать, сортировать, перемещать и доставлять предметы</small></p>
            </h2>
            <h2 class="border3">
                <a href="/shownews.php">Пром сеть "Росатома"</a>
                <p><small>К 2030 году структуры «Росатома» разработают отечественную защищённую промышленную сеть. </small></p>
            </h2>
            <h2 class="border3">
                <a href="/shownews.php">Миграция в CoDeSys</a>
                <p><small>Список отечественных ПЛК на базе CoDeSys</small></p>
            </h2>
            <h2 class="border3">
                <a href="/shownews.php">мини-ПК GENESYSM</a>
                <p><small>Genesis Cube предназначен для выполнения сложных задач, оставаясь при этом компактным и универсальным. </small></p>
            </h2>
        </div>
</div>

@endsection
