<div class="space-y-10">
    <form wire:submit.prevent="submitForm">
        <x-select
            class="sm:max-w-xs"
            label="Search a User"
            wire:model="asyncSearchUser"
            placeholder="Select some user"
            :async-data="route('api.users.index')"
            option-label="name"
            option-value="id"
            multiselect
            :template="[
            'name'   => 'user-option',
            'config' => ['src' => 'profile_image'],            
            ]"
            option-description="email"
        />
        <button type="submit">Enviar formulario</button>
    </form>
</div>
<script>
  
</script>