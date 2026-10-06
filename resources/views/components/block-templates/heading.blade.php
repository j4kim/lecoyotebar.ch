@props(['block'])

<x-video-background src="{{ Storage::disk('public')->url($block['video']) }}"></x-video-background>
