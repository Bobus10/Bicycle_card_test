<x-app-layout>
    <div class="grid grid-cols-2 px-5 py-3 border border-black container mx-auto h-screen bg-slate-200">
        @foreach ($subjects as $subject)
            <div class="h-4">
                <ul>
                    <li>
                        {{ $subject->subject_name }} -
                        <a href="{{ $subject->file_path }}" target="_blank">
                            <button type="button" class='rounded-full bg-blue-100 hover:bg-blue-500 py-2 px-4'>
                                Link to study
                            </button>
                        </a>
                    </li>
                </ul>
            </div>
            <div>
                {{-- <iframe src="{{ $subject->file_path }}" ></iframe> --}}
                {{-- <iframe src="{{ asset('build/assets/Odpowiedzi.pdf') }}" ></iframe> --}}
            </div>
        @endforeach
        <x-buttons.route-button route="home" label="Main page"/>
    </div>
</x-app-layout>
