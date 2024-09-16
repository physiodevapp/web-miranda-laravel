<x-activity-layout>
  <form id="activity-form" method="POST" action="{{ route('activities.update', $activity->id) }}">
    @csrf
    @method('PATCH')

    <!-- Type -->
    <div class="mt-4">
      <x-input-label for="type" :value="__('Type of activity')" />
      <x-select-input 
        type="select"
        name="type"
        id="type"
        class="block mt-1 w-full"
        :options="[ 'surf' => 'Surf', 'windsurf' => 'Windsurf', 'kayak' => 'Kayak', 'atv' => 'ATV', 'hot air balloon' => 'Hot Air Balloon' ]"
        :value="$activity->type"
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
        :value="$activity->date_time"
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
        :value="$activity->notes"
      />
      <x-input-error :messages="$errors->get('notes')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
      <x-primary-button class="ms-3" onclick="setFormAttributes('PATCH', '{{ route('activities.update', $activity->id) }}')">
        {{ __('Update the activity') }}
      </x-primary-button>

      <!-- Delete Button -->
      <x-danger-button class="ms-3" onclick="setFormAttributes('DELETE', '{{ route('activities.destroy', $activity->id) }}')">
        {{ __('Delete the activity') }}
      </x-danger-button>
    </div>  
  </form>

  <script>
    function setFormAttributes(method, action) {
      const form = document.getElementById('activity-form');
      
      // Update the form action (URL)
      form.setAttribute('action', action);

      // Update the method input (PATCH or DELETE)
      let methodInput = document.querySelector('input[name="_method"]');
      
      if (!methodInput) {
        methodInput = document.createElement('input');
        methodInput.setAttribute('type', 'hidden');
        methodInput.setAttribute('name', '_method');
        form.appendChild(methodInput);
      }

      methodInput.setAttribute('value', method);
      
      // Submit the form
      form.submit();
    }
  </script>
</x-activity-layout>
