<?php
/**
 * @author Ross Edlin <contact@rossedlin.com>
 * Date: 2020-09-08
 * Time: 18:28
 *
 * @var \App\Models\HeartbeatEntity[] $heartbeatEntities
 */
?>

@extends('layouts.admin.app')

@section('content')
    <div class="table-responsive g-mb-40">
        <table class="table u-table--v3 g-c1olor-black">
            <thead>
            <tr>
                <th>#</th>
                <th>Code</th>
                <th>Status</th>
                <th>Latest Pulse</th>
                <th>latest IP Address</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($heartbeatEntities as $heartbeatEntity)
                <tr>
                    <td>{{$heartbeatEntity->id}}</td>
                    <td>{{$heartbeatEntity->code}}</td>
                    <td>
                        @if($heartbeatEntity->isAlive(3600))
                            <span class="text-success"><strong>Alive</strong></span>
                        @else
                            <span class="text-danger"><strong>Dead</strong></span>
                        @endif
                    </td>
                    <td>{{$heartbeatEntity->created_at}}</td>
                    <td>{{$heartbeatEntity->latestHeartbeatPulse->ip_address}}</td>
                    <td>
                        <a href="{{route('admin.heartbeat.check-pulse', [$heartbeatEntity->id])}}"
                           class="btn btn-info">{{ __('View') }}</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection