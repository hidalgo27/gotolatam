@extends('layouts.notifications.app-inquire')
@section('content')

    <tr>
        <td style="padding:20px 0px 20px 50px">
            <p style="font-size:18px"><b>Mensaje de</b>: {{$nombre}}</p>
            <p>Mensaje del formulario de Diseño.</p>
            <center style="background:#f6f6f6; padding:10px;">
                <table>
                    <tbody>
                    <tr>
                        <td style="text-align:left">
                            <p><strong>Package: {{$paquete}}</strong></p>
                            <p><strong>Category Hotel: {{$category_all}}</strong></p>
                            <p><strong>Destinations: {{$destinations_all}}</strong></p>
                            <p><strong>Travellers: {{$travellers_all}}</strong></p>
                            <p><strong>Trip Length: {{$trip_length}}</strong></p>
                            <p><strong>Travel date: {{$travel_day_all}}</strong></p>

                        </td>
                        <td style="text-align:left">

                            <p><strong>Email: {{$email}}</strong></p>
                            <p><strong>Code: {{$code}}</strong></p>
                            <p><strong>Phone: {{$telefono}}</strong></p>
                            <p><strong>Comment: {{$comentario}}</strong></p>
                            <p><strong>Browser: {{$browser}}</strong></p>
                            <p><strong>Device: {{$device}}</strong></p>
                        </td>

                    </tr>
                    </tbody>
                </table>
            </center>
        </td>
    </tr>

@stop
