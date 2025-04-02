@props(['fullDay', 'shortDay'])

<th class="p-2 border-1 border-gray-300 h-10 xl:w-40 lg:w-30 md:w-30 sm:w-20 w-10 xl:text-sm text-xs">
    <span class="xl:block lg:block md:block sm:block hidden">{{ $fullDay }}</span>
    <span class="xl:hidden lg:hidden md:hidden sm:hidden block">{{ $shortDay }}</span>
</th>
