@props(['valueInput' => '', 'requestParam' => ''])
<option value="{{ $valueInput }}" {{ request($requestParam) == $valueInput ? 'selected' : '' }}>
		{{ $slot }}
</option>
