@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Призывники</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <table class="table table-hover">
                    @foreach ($recruits as $recruit)
                        <tbody>
                            <tr>
                                <td>{{$recruit->student}}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>

        </div>
    </section>
@stop
