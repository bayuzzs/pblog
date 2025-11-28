@props([
    'apiUrl' => '',
    'name' => '',
    'placeholder' => 'Cari Data...',
    'searchName' => '',
    'fieldName' => '',
    'value' => '',
])

@php
    $uniqueId = 'combo-' . uniqid();
@endphp

<div class="relative custom-combobox" id="{{ $uniqueId }}" data-api="{{ $apiUrl }}" data-field="{{ $fieldName }}" data-search="{{ $searchName }}">
    <input type="hidden" name="{{ $name }}" value="{{ $value }}" class="combo-value" required>
    
    <div class="relative">
        <input type="text" value="{{ $value }}" placeholder="{{ $placeholder }}" autocomplete="off"
            class="combo-input block w-full rounded-lg border-gray-200 px-4 py-3 text-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-400 dark:focus:ring-gray-600">
        <div class="absolute end-3 top-1/2 -translate-y-1/2 cursor-pointer combo-toggle">
            <svg class="size-3.5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </div>
    </div>
    
    <div class="combo-dropdown absolute z-50 mt-2 max-h-72 w-full overflow-y-auto rounded-lg border border-gray-200 bg-white p-1 dark:border-gray-700 dark:bg-gray-900 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-gray-500" style="display: none;"></div>
</div>

@once
@push('script-bawah')
<script>
document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.custom-combobox').forEach(function(el) {
        var input = el.querySelector('.combo-input');
        var value = el.querySelector('.combo-value');
        var dropdown = el.querySelector('.combo-dropdown');
        var toggle = el.querySelector('.combo-toggle');
        var apiUrl = el.getAttribute('data-api');
        var fieldName = el.getAttribute('data-field');
        var searchName = el.getAttribute('data-search');
        var isOpen = false;
        
        function openDropdown() {
            isOpen = true;
            dropdown.style.display = 'block';
            fetchData(input.value);
        }
        
        function closeDropdown() {
            isOpen = false;
            dropdown.style.display = 'none';
        }
        
        function fetchData(query) {
            dropdown.innerHTML = '<div class="p-4 text-center"><div class="inline-block h-6 w-6 animate-spin rounded-full border-[3px] border-current border-t-transparent text-blue-600"></div></div>';
            
            var url = new URL(apiUrl);
            if (query) url.searchParams.append('search', query);
            
            fetch(url).then(function(r) { return r.json(); }).then(function(data) {
                var items = data.data || data;
                if (items.length === 0) {
                    dropdown.innerHTML = '<div class="p-4 text-center text-gray-500">Tidak ada data</div>';
                } else {
                    var html = '';
                    items.forEach(function(item) {
                        html += '<div class="combo-item cursor-pointer p-2 hover:bg-gray-100 rounded" data-val="' + item[fieldName] + '"><div class="font-medium">' + item[fieldName] + '</div><div class="text-xs text-gray-500">' + item[searchName] + '</div></div>';
                    });
                    dropdown.innerHTML = html;
                    dropdown.querySelectorAll('.combo-item').forEach(function(item) {
                        item.addEventListener('click', function() {
                            var val = this.getAttribute('data-val');
                            input.value = val;
                            value.value = val;
                            console.log('Selected:', val);
                            closeDropdown();
                        });
                    });
                }
            });
        }
        
        input.addEventListener('focus', openDropdown);
        input.addEventListener('input', function() { openDropdown(); });
        toggle.addEventListener('click', function(e) {
            e.stopPropagation();
            if (isOpen) closeDropdown(); else openDropdown();
        });
        
        document.addEventListener('click', function(e) {
            if (!el.contains(e.target)) closeDropdown();
        });
    });
    console.log('✅ Combobox ready');
});
</script>
@endpush
@endonce
