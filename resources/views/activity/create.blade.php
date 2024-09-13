<x-activity-layout>

  <form method="post" action="{{ route('activities.store') }}">
    @csrf
  
    <!-- Name -->
    <div>
      <x-input-label for="name" :value="__('Activity name')" />
      <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Type -->
    <div class="mt-4">
      <x-input-label for="name" :value="__('Type of activity')" />
      <x-select-input 
        type="select"
        name="type"
        id="type"
        class="block mt-1 w-full"
        :options="[
            'surf' => 'Surf',
            'windsurf' => 'Windsurf',
            'kayak' => 'Kayak',
            'atv' => 'ATV',
            'hot air balloon' => 'Hot Air Balloon'
        ]"
        required
        />
      <x-input-error :messages="$errors->get('type')" class="mt-2" />
    </div>

    <!-- Date and time of the activity -->
    <div class="mt-4">
      <x-input-label for="date_time" :value="__('Select a date')" />
      <x-datetime-input
        name="date_time"
        id="date_time"
        class="block mt-1 w-full"
        :value="old('date_time', now()->format('Y-m-d\TH:i'))"
        required
        />
      <x-input-error :messages="$errors->get('date_time')" class="mt-2" />
    </div>

    <!-- Note -->
    <div class="mt-4">
      <x-input-label for="notes" :value="__('Add a note (optional)')" />
      <x-text-area
        name="notes"
        id="notes"
        class="block mt-1 w-full"
        rows="5"
        :value="old('notes')"
        />
      <x-input-error :messages="$errors->get('notes')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
      <x-primary-button class="ms-3">
        {{ __('Create the new activity') }}
      </x-primary-button>
    </div>  
  </form>

</x-activity-layout>
