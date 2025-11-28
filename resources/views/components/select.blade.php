@props(['name' => '', 'placeholder' => 'Pilih Opsi...', 'value' => ''])

@php
    $uniqueId = 'select-' . uniqid();
    $options = [];
@endphp

<div class="relative custom-select" id="{{ $uniqueId }}">
    <input type="hidden" name="{{ $name }}" value="{{ $value }}" class="select-value">
    
    <button type="button" class="select-toggle relative py-3 px-4 pe-9 flex w-full cursor-pointer bg-white border border-gray-200 rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400">
        <span class="select-text">{{ $placeholder }}</span>
        <div class="absolute top-1/2 end-3 -translate-y-1/2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </div>
    </button>
    
    <div class="select-dropdown mt-2 z-50 w-full max-h-72 p-1 bg-white border border-gray-200 rounded-lg overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:bg-gray-900 dark:border-gray-700 absolute" style="display: none;"></div>
    
    <select style="display: none;" class="select-source">
        <option value="">Choose</option>
        {{ $slot }}
    </select>
</div>

@once
@push('script-bawah')
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.custom-select').forEach(function(el) {
        var toggle = el.querySelector('.select-toggle');
        var dropdown = el.querySelector('.select-dropdown');
        var valueInput = el.querySelector('.select-value');
        var textSpan = el.querySelector('.select-text');
        var source = el.querySelector('.select-source');
        var isOpen = false;
        
        // Parse options
        var options = [];
        source.querySelectorAll('option').forEach(function(opt) {
            if (opt.value) {
                options.push({ value: opt.value, text: opt.textContent.trim() });
            }
        });
        
        // Set initial text
        if (valueInput.value) {
            var found = options.find(function(o) { return o.value === valueInput.value; });
            if (found) textSpan.textContent = found.text;
        }
        
        // Render dropdown
        var html = '';
        options.forEach(function(opt) {
            var check = opt.value === valueInput.value ? '<svg class="size-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>' : '';
            html += '<div class="select-item cursor-pointer py-2 px-4 text-sm hover:bg-gray-100 rounded dark:hover:bg-gray-800 dark:text-gray-200" data-value="' + opt.value + '"><div class="flex justify-between items-center"><span>' + opt.text + '</span>' + check + '</div></div>';
        });
        dropdown.innerHTML = html;
        
        // Add click handlers
        dropdown.querySelectorAll('.select-item').forEach(function(item) {
            item.addEventListener('click', function() {
                var val = this.getAttribute('data-value');
                var txt = this.querySelector('span').textContent;
                valueInput.value = val;
                textSpan.textContent = txt;
                console.log('Selected:', val);
                closeDropdown();
                // Re-render to update checkmarks
                html = '';
                options.forEach(function(opt) {
                    var check = opt.value === val ? '<svg class="size-3.5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>' : '';
                    html += '<div class="select-item cursor-pointer py-2 px-4 text-sm hover:bg-gray-100 rounded dark:hover:bg-gray-800 dark:text-gray-200" data-value="' + opt.value + '"><div class="flex justify-between items-center"><span>' + opt.text + '</span>' + check + '</div></div>';
                });
                dropdown.innerHTML = html;
                dropdown.querySelectorAll('.select-item').forEach(function(i) {
                    i.addEventListener('click', arguments.callee);
                });
            });
        });
        
        function closeDropdown() {
            isOpen = false;
            dropdown.style.display = 'none';
        }
        
        toggle.addEventListener('click', function(e) {
            e.stopPropagation();
            isOpen = !isOpen;
            dropdown.style.display = isOpen ? 'block' : 'none';
        });
        
        document.addEventListener('click', function(e) {
            if (!el.contains(e.target)) closeDropdown();
        });
    });
    console.log('✅ Select ready');
});
</script>
@endpush
@endonce
