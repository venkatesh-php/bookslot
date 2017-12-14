@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Book Your Slot For Interview</div>

                <div class="panel-body">
                <h1>Book Your Slot For Interview</h1>
                <?php
                    $name=Auth::user()->name;
                    $email=Auth::user()->email;
                ?>
                 
                 {!! Form::open(array('action' => 'SlotController@submit')) !!}
               
                    <div class="form-group">
                    {{Form::label('name', 'Name:')}}
                    {{Form::label($name)}}
                    </div>
                    <div class="form-group">
                    {{Form::label('email', 'Email:')}}
                    {{Form::label($email)}}
                    </div> 
                    <div class="form-group">
                        {{Form::label('date', 'Date')}}
                        {{Form::select('date', array(
                        'Day1' => array('26/12/17' => '26/12/17'),
                        'Day2' => array('27/12/17' => '27/12/17'),
                        'Day3' => array('28/12/17' => '28/12/17'),
                        'Day4' => array('29/12/17' => '29/12/17'),
                        ));}}

                    </div> 
                    <div class="form-group">
                    {{Form::label('slot', 'Slot')}}
                    {{Form::select('slot', array(
                        '1St Slot' => array('10:00' => '10:00'),
                        '2nd Slot' => array('10:30' => '10:30'),
                        '3rd Slot' => array('11:00' => '11:00'),
                        '4th Slot' => array('11:30' => '11:30'),
                        '5th Slot' => array('12:00' => '12:00'),
                        '6th Slot' => array('12:30' => '12:30'),
                        '7th Slot' => array('02:00' => '02:00'),
                        '8th Slot' => array('02:30' => '02:30'),
                        '9th Slot' => array('03:00' => '03:00'),
                        '10th Slot' => array('03:30' => '03:30'),
                        '11th Slot' => array('04:00' => '04:00'),
                    ));}}

                    </div>
                    <div> 
                        {{Form::submit('Submit', ['class'=> 'btn btn-primary'])}}
                    </div> 
                   {!! Form::close() !!} 


                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
