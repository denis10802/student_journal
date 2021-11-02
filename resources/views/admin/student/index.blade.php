@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Студенты</h1>
@stop
@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <table class="table table-hover">
                    @foreach ($students as $student)
                    <tbody>

                    @if($student->course === [])
                        <tr>
                            <td>{{$student->firstName. ' ' .$student->lastName. ' ' .$student->surname}}  ,
                                ({{$student->age}}, {{$student->gender}})</td>
                        </tr>
                    @else
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>
                                <i class="expandable-table-caret fas fa-caret-right fa-fw"></i>
                                {{$student->firstName. ' ' .$student->lastName. ' ' .$student->surname}} ,
                                ({{$student->age}}, {{$student->gender}})
                            </td>
                        </tr>
                        <tr class="expandable-body d-none">
                            <td>
                                <div class="p-0" style="display: none;">
                                    <table class="table table-hover">
                                        <tbody>
                                        @foreach ($student->course as $course)
                                            <tr>
                                                <td>{{$course}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>
                    @endif
                    </tbody>
                    @endforeach
                </table>
            </div>

        </div>
    </section>
@stop
