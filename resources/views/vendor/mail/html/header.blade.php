<tr>
    <td class="header">
        <a href="{{ $url }}" style="display: inline-block;">
            @if (trim($slot) === 'Laravel')
            <img src="{{ asset('content/architect2/images/architect_2.png') }}" class="logo" alt="hercule Logo">
            @else
            {{ $slot }}
            @endif
        </a>
    </td>
</tr>