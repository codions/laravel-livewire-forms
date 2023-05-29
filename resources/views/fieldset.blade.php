@php
    if ( !empty($props['prefix']) ) {
        $name = $props['prefix'];
    } else {
        $name = '';
    }
@endphp

<fieldset class="{{ $row_class }}">
    @isset($props['label'])
        <legend>
            {{ __($props['label']) }}
        </legend>
    @endisset
    @foreach($props['fields'] as $field)
        @if ( !method_exists($field, 'prefix') )
            {{ $field->render()->with($field->data()) }}
        @else
            <div class="{{ $field->getColClass() ?? 'col-md-6'}} mb-3">
                {{ $field->render()->with($field->data()) }}
            </div>
        @endif
    @endforeach
</fieldset>
