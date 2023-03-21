<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <div class="auth">
                <a class="navbar-brand" href="/">
                    <h2>Sixteen <span>Clothing</span></h2>
                </a>
            </div>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="profile/{{ Auth::user()->id }}" style="position: relative;"
            enctype="multipart/form-data" id="editProfile">
            @csrf
            @method('PATCH')

            <div class="flex items-center">
                <div
                    style="position: relative; width: 100px; height: 100px; border-radius: 50%; overflow: hidden; margin: 0px 20px 10px 0px; text-align: center; color: white;">
                    <img id="profileImage" src="/storage/{{ Auth::user()->avatar }}" alt="Profile Image" class="w-full"
                        style="height: 100%; object-fit: cover;">
                    <i id="cameraIcon" class="edit-mode fa fa-camera" aria-hidden="true" style="display: none"></i>
                </div>
                <input id="fileInput" type="file" name="avatar" accept="image/*" style="display: none;">

                <div>
                    <!-- Name -->
                    <x-label for="name" :value="__('Name')" />

                    <x-input id="name" class="block mt-1" style="width: 280px" type="text" name="name"
                        :value="Auth::user()->name" required autofocus readonly />
                </div>
            </div>

            <!-- Username -->
            <div class="mt-4 block">
                <x-label for="username" :value="__('Username')" />

                <x-input id="username" class="block mt-1 w-full" type="text" name="username" :value="Auth::user()->username"
                    required autofocus readonly />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="Auth::user()->email"
                    required readonly />
            </div>

            <div class="edit-mode" style="display: none;">
                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')" />

                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required />
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <a href="/login" style="background-color: rgb(248 113 113); display: none;"
                    class="edit-mode px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring disabled:opacity-25 transition ease-in-out duration-150">Back</a>
                <x-button class="edit ml-4">
                    Edit
                </x-button>
            </div>
            <div class="loader" style="display: none;">
                <div class="spinner"></div>
            </div>
        </form>

        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

        <script>
            let editMode = false;

            $('.edit').on('click', function(event) {
                if (editMode) {
                    $('#editProfile').submit();
                    console.log(editMode);
                } else {
                    event.preventDefault();
                }
                $('.loader').fadeIn();
                setTimeout(() => {
                    $('.loader').fadeOut();
                    editMode = !editMode;
                    $('input').prop('readonly', !editMode);
                    $(this).text(editMode ? 'Save' : 'Edit');
                    $('.edit-mode').toggle(editMode);
                }, 2000)
            });

            $('#cameraIcon').on('click', function() {
                $('#fileInput').click();
            });
            $('#fileInput').on('change', function(e) {
                let file = e.target.files[0];
                let reader = new FileReader();
                reader.onload = function(e) {
                    $('#profileImage').attr('src', e.target.result);
                };
                reader.readAsDataURL(file);
            });
        </script>
    </x-auth-card>
</x-guest-layout>
