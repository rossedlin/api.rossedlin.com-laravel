<?php
/**
 * @author Ross Edlin <contact@rossedlin.com>
 * Date: 2020-09-08
 * Time: 18:28
 *
 * @var \App\Models\HeartbeatPulse[] $heartbeatPulses
 */
?>

@extends('layouts.admin.app')

@section('content')
    <div class="table-responsive g-mb-40">
        <table class="table u-table--v3 g-color-black">
            <thead>
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Created At</th>
                <th>IP Address</th>
                <th>Data Type</th>
                <th>Data</th>
            </tr>
            </thead>
            <tbody>
            @foreach($heartbeatPulses as $heartbeatPulse)
                <tr>
                    <td>{{$heartbeatPulse->id}}</td>
                    <td>{{$heartbeatPulse->heartbeatEntity->code}}</td>
                    <td>{{$heartbeatPulse->created_at}}</td>
                    <td>{{$heartbeatPulse->ip_address}}</td>
                    <td>{{$heartbeatPulse->data_type}}</td>
                    <td>{{$heartbeatPulse->data}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection