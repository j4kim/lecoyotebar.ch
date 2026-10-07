@props(['block'])

<x-atoms.video-background src="{{ Storage::disk('public')->url($block['video']) }}" />
