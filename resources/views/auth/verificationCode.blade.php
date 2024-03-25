<x-guest-layout>
    <form method="POST" action="{{ route('verification') }}">
        @csrf
        <div>
            <x-input-label for="code" :value="__('Code de verification')" />
            <x-text-input id="code" placeholder="XXXXXX" class="block mt-1 w-full" type="text" name="code" :value="old('code')" required autofocus  />
            <x-input-error :messages="$errors->get('code')" class="mt-2" />
            <input type="hidden" name="id" value="{{$id_user}}">
        </div>
        <div class="flex items-center justify-end mt-4">
            <input type="submit" value="Verification" class="btn btn-success">
        </div>
    </form>
</x-guest-layout>
