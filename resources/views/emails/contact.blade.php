@component('mail::layout')
{{-- Header --}}
@slot('header')
    @component('mail::header', ['url' => config('app.url')])
        {{ config('app.name') }}
    @endcomponent
@endslot

{{-- Body --}}
<table class="body" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td class="content-cell" style="padding: 35px;">
            <h1 style="color: #333; font-size: 24px; margin-top: 0;">New Contact Message</h1>
            <p><strong>From:</strong> {{ $message->name }}</p>
            <p><strong>Email:</strong> {{ $message->email }}</p>
            <p><strong>Subject:</strong> {{ $message->subject }}</p>
            <p style="border-top: 1px solid #eaeaea; padding-top: 15px; color: #555;">{{ $message->message }}</p>
        </td>
    </tr>
</table>

{{-- Subcopy --}}
@isset($subcopy)
    @slot('subcopy')
        @component('mail::subcopy')
            {{ $subcopy }}
        @endcomponent
    @endslot
@endisset

{{-- Footer --}}
@slot('footer')
    @component('mail::footer')
        © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
    @endcomponent
@endslot
@endcomponent
