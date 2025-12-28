<div wire:poll.10s> {{-- Se actualiza automáticamente cada 10 segundos --}}
    <div class="overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th class="px-6 py-3">Fecha</th>
                    <th class="px-6 py-3">Remitente</th>
                    <th class="px-6 py-3">Monto</th>
                    <th class="px-6 py-3">Referencia</th>
                    <th class="px-6 py-3">Memo</th>
                    <th class="px-6 py-3">Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pagos as $pago)
                <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="px-6 py-4">{{ $pago->fecha_pago }}</td>
                    <td class="px-6 py-4 font-bold text-gray-900">{{ $pago->remitente }}</td>
                    <td class="px-6 py-4 text-green-600 font-bold">${{ number_format($pago->monto, 2) }}</td>
                    <td class="px-6 py-4">{{ $pago->referencia }}</td>
                    <td class="px-6 py-4 text-xs">{{ $pago->nota_memorandum }}</td>
                    <td class="px-6 py-4">
                        <span class="px-2 py-1 text-xs font-semibold text-green-800 bg-green-100 rounded-full">
                            {{ $pago->estado }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-4">
        {{ $pagos->links() }}
    </div>
</div>